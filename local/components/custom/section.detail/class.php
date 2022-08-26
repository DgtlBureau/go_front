<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main;
use Bitrix\Main\Localization\Loc as Loc;
use Bitrix\Main\Engine\Contract\Controllerable;
use Bitrix\Main\Engine\ActionFilter;

class StandardElementListComponent extends CBitrixComponent implements Controllerable
{
    /**
     * кешируемые ключи arResult
     * @var array()
     */
    protected $cacheKeys = array();

    /**
     * дополнительные параметры, от которых должен зависеть кеш
     * @var array
     */
    protected $cacheAddon = array();

    /**
     * парамтеры постраничной навигации
     * @var array
     */
    protected $navParams = array();

    /**
     * вохвращаемые значения
     * @var mixed
     */
    protected $returned;

    /**
     * тегированный кеш
     * @var mixed
     */
    protected $tagCache;

    /**
     * подключает языковые файлы
     */
    public function onIncludeComponentLang()
    {
        $this->includeComponentLang(basename(__FILE__));
        Loc::loadMessages(__FILE__);
    }

    /**
     * подготавливает входные параметры
     * @param array $arParams
     * @return array
     */
    public function onPrepareComponentParams($params)
    {
        $result = array(
            'IBLOCK_TYPE' => trim($params['IBLOCK_TYPE']),
            'IBLOCK_ID' => intval($params['IBLOCK_ID']),
            'IBLOCK_CODE' => trim($params['IBLOCK_CODE']),
            'SHOW_NAV' => ($params['SHOW_NAV'] == 'Y' ? 'Y' : 'N'),
            'SHOW_FILTER' => ($params['SHOW_FILTER'] == 'Y' ? 'Y' : 'N'),
            'ONLY_ACTIVE' => ($params['ONLY_ACTIVE'] == 'Y' ? 'Y' : 'N'),
            'COUNT' => intval($params['COUNT']),
            'SORT_FIELD1' => strlen($params['SORT_FIELD1']) ? $params['SORT_FIELD1'] : 'ID',
            'SORT_DIRECTION1' => $params['SORT_DIRECTION1'] == 'ASC' ? 'ASC' : 'DESC',
            'SORT_FIELD2' => strlen($params['SORT_FIELD2']) ? $params['SORT_FIELD2'] : 'ID',
            'SORT_DIRECTION2' => $params['SORT_DIRECTION2'] == 'ASC' ? 'ASC' : 'DESC',
            'CACHE_TIME' => intval($params['CACHE_TIME']) > 0 ? intval($params['CACHE_TIME']) : 3600,
            'AJAX' => $params['AJAX'] == 'N' ? 'N' : $_REQUEST['AJAX'] == 'Y' ? 'Y' : 'N',
            'FILTER' => is_array($params['FILTER']) && sizeof($params['FILTER']) ? $params['FILTER'] : array(),
            'CACHE_TAG_OFF' => $params['CACHE_TAG_OFF'] == 'Y',
            'VARIABLES' => $params['VARIABLES'],
            'FOLDER' => $params['FOLDER'],
        );
        return $result;
    }

    /**
     * определяет читать данные из кеша или нет
     * @return bool
     */
    protected function readDataFromCache()
    {
        global $USER;
        if ($this->arParams['CACHE_TYPE'] == 'N')
            return false;

        if (is_array($this->cacheAddon))
            $this->cacheAddon[] = $USER->GetUserGroupArray();
        else
            $this->cacheAddon = array($USER->GetUserGroupArray());

        return !($this->startResultCache(false, $this->cacheAddon, '/s1/cedro/university.iblock.section.detail'));

    }

    /**
     * кеширует ключи массива arResult
     */
    protected function putDataToCache()
    {
        if (is_array($this->cacheKeys) && sizeof($this->cacheKeys) > 0) {
            $this->SetResultCacheKeys($this->cacheKeys);
        }
    }

    /**
     * прерывает кеширование
     */
    protected function abortDataCache()
    {
        $this->AbortResultCache();
    }

    /**
     * завершает кеширование
     * @return bool
     */
    protected function endCache()
    {
        if ($this->arParams['CACHE_TYPE'] == 'N')
            return false;

        $this->endResultCache();
    }

    /**
     * проверяет подключение необходиимых модулей
     * @throws LoaderException
     */
    protected function checkModules()
    {
        if (!Main\Loader::includeModule('iblock'))
            throw new Main\LoaderException(Loc::getMessage('STANDARD_ELEMENTS_LIST_CLASS_IBLOCK_MODULE_NOT_INSTALLED'));
    }

    /**
     * проверяет заполнение обязательных параметров
     * @throws SystemException
     */
    protected function checkParams()
    {
        if ($this->arParams['IBLOCK_ID'] <= 0 && strlen($this->arParams['IBLOCK_CODE']) <= 0)
            throw new Main\ArgumentNullException('IBLOCK_ID');
    }

    /**
     * выполяет действия перед кешированием
     */
    protected function executeProlog()
    {
        if ($this->arParams['COUNT'] > 0) {
            if ($this->arParams['SHOW_NAV'] == 'Y') {
                \CPageOption::SetOptionString('main', 'nav_page_in_session', 'N');
                $this->navParams = array(
                    'nPageSize' => $this->arParams['COUNT']
                );
                $arNavigation = \CDBResult::GetNavParams($this->navParams);
                $this->cacheAddon = array($arNavigation);
            } else {
                $this->navParams = array(
                    'nTopCount' => $this->arParams['COUNT']
                );
            }
        } else
            $this->navParams = false;
    }

    /**
     * Определяет ID инфоблока по коду, если не был задан
     */
    protected function getIblockId()
    {
        if ($this->arParams['IBLOCK_ID'] <= 0) {
            if (class_exists('Settings')) {
                $this->arParams['IBLOCK_ID'] = \SiteSettings::getInstance()->getIblockId($this->arParams['IBLOCK_CODE']);
                if ($this->arParams['IBLOCK_ID'] && $this->arParams['CACHE_TAG_OFF'])
                    \CIBlock::disableTagCache($this->arParams['IBLOCK_ID']);
            }
        }

        if ($this->arParams['IBLOCK_ID'] <= 0) {
            $sort = array(
                'id' => 'asc'
            );
            $filter = array(
                'TYPE' => $this->arParams['IBLOCK_TYPE'],
                'CODE' => $this->arParams['IBLOCK_CODE']
            );
            $iterator = \CIBlock::GetList($sort, $filter);
            if ($iblock = $iterator->GetNext())
                $this->arParams['IBLOCK_ID'] = $iblock['ID'];
            else {
                $this->abortDataCache();
                throw new Main\ArgumentNullException('IBLOCK_ID');
            }
        }
        $this->arResult['IBLOCK_ID'] = $this->arParams['IBLOCK_ID'];
        $this->arResult['IBLOCK_NAME'] = \CIBlock::GetByID($this->arResult['IBLOCK_ID'])->fetch()['NAME'];
        $this->cacheKeys[] = 'IBLOCK_ID';
    }

    /**
     * получение результатов
     */
    protected function getResult()
    {

        $sectionId = $this->arParams['VARIABLES']['SECTION_ID'];
        $section = \CIBlockSection::GetByID($sectionId)->fetch();

        if (!empty($section['PICTURE']))
            $section['PICTURE_URL'] = CFile::GetPath($section['PICTURE']);

        $this->arResult['SECTION'] = $section;

        $filter = array(
            'IBLOCK_TYPE' => $this->arParams['IBLOCK_TYPE'],
            'IBLOCK_ID' => $this->arParams['IBLOCK_ID'],
        );
        if (!empty($sectionId))
            $filter['SECTION_ID'] = $sectionId;

        if ($this->arParams['ONLY_ACTIVE'] == 'Y')
            $filter['ACTIVE'] = 'Y';

        if (!empty($this->arParams['FILTER']))
            $filter = array_merge($filter, $this->arParams['FILTER']);

//        echo '<pre>'; print_r($this->arParams); echo '</pre>';

        $sort = array(
            $this->arParams['SORT_FIELD1'] => $this->arParams['SORT_BY1'],
            $this->arParams['SORT_FIELD2'] => $this->arParams['SORT_DIRECTION2']
        );
        $select = array('*');

        $iterator = \CIBlockElement::GetList($sort, $filter, false, $this->navParams, $select);

        while ($ob = $iterator->GetNextElement()) {
            $element = $ob->GetFields();
            $element['PROPERTIES'] = $ob->GetProperties();

            if (!empty($element['DETAIL_PICTURE']))
                $element['DETAIL_PICTURE_URL'] = CFile::GetPath($element['DETAIL_PICTURE']);
            if (!empty($element['PREVIEW_PICTURE']))
                $element['PREVIEW_PICTURE_URL'] = CFile::GetPath($element['PREVIEW_PICTURE']);;
            $this->arResult['ITEMS'][] = $element;
        }
        if ($this->arParams['SHOW_NAV'] == 'Y' && $this->arParams['COUNT'] > 0) {
            $this->arResult['NAV_STRING'] = $iterator->GetPageNavString('');
        }
    }

    /**
     * выполняет действия после выполения компонента, например установка заголовков из кеша
     */
    protected function executeEpilog()
    {
        if ($this->arResult['IBLOCK_ID'] && $this->arParams['CACHE_TAG_OFF'])
            \CIBlock::enableTagCache($this->arResult['IBLOCK_ID']);
    }

    /**
     * выполняет логику работы компонента
     */
    public function executeComponent()
    {
        global $APPLICATION;
        try {
            $this->checkModules();
            $this->checkParams();
            $this->executeProlog();
            if ($this->arParams['AJAX'] == 'Y')
                $APPLICATION->RestartBuffer();
//            if (!$this->readDataFromCache()) {
                $this->getIblockId();
                $this->getResult();
                $this->putDataToCache();
                $this->includeComponentTemplate();
//            }
            $this->executeEpilog();

            if ($this->arParams['AJAX'] == 'Y')
                die();

            return $this->returned;
        } catch (Exception $e) {
            $this->abortDataCache();
            ShowError($e->getMessage());
        }
    }


    public function configureActions()
    {
        return [
            'reload' => [
                '-prefilters' => [
                    ActionFilter\Authentication::class,
                ],
            ],
        ];
    }


    public function reloadAction($params, $filter = []) // перезагрузка компонента
    {
        if (!empty($filter))
            $params['FILTER'] = $filter;

        return new \Bitrix\Main\Engine\Response\Component('custom:section.detail', $params['COMPONENT_TEMPLATE'], $params);
    }
}

?>