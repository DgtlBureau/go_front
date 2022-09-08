<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main;
use Bitrix\Main\Localization\Loc as Loc;
use Bitrix\Main\Engine\Contract\Controllerable;
use Bitrix\Main\Engine\ActionFilter;

class FavoritesWidgetComponent extends CBitrixComponent implements Controllerable
{

    protected function getResult()
    {

        global $APPLICATION, $USER;

        if(!$USER->IsAuthorized())
        {
            $this->arResult['FAVORITES'] = (empty($_COOKIE["FAVORITES"])) ? [] : unserialize($_COOKIE["FAVORITES"]);

        }
        else {
            $idUser = $USER->GetID();
            $arUser = CUser::GetByID($idUser)->Fetch();
            $this->arResult['FAVORITES'] = $arUser['UF_FAVORITES'];
        }

//        dump($this->arResult['FAVORITES']);

    }


    public function executeComponent()
    {
        global $APPLICATION;
        try {
            if ($this->arParams['AJAX'] == 'Y')
                $APPLICATION->RestartBuffer();

            $this->getResult();
            $this->includeComponentTemplate();

            if ($this->arParams['AJAX'] == 'Y')
                die();

            return $this->arResult;
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

        return new \Bitrix\Main\Engine\Response\Component('custom:favourites.widget', '', $params);
    }

}

?>