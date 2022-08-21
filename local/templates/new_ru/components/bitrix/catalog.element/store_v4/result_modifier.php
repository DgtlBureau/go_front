<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/**
 * @var CBitrixComponentTemplate $this
 * @var CatalogElementComponent $component
 */

$component = $this->getComponent();
$arParams = $component->applyTemplateModifications();


// список игроков для печати
if (!empty($arResult['PROPERTIES']['TEAM']['VALUE'])):
    $iterator = \Bitrix\Iblock\PropertyTable::query()
        ->setFilter([
            ['IBLOCK.CODE' => 'players', 'CODE' => ['TEAM', 'NUMBER']],
        ])
        ->setSelect(['ID', 'CODE'])
        ->exec();
    while ($arCode = $iterator->fetch())
        $mapCode[$arCode['CODE']] = $arCode['ID'];

    $iterator = \Bitrix\Iblock\ElementTable::query()
        ->registerRuntimeField(
            '',
            new \Bitrix\Main\Entity\ReferenceField(
                'PROPERTY_TEAM',
                \Bitrix\Iblock\ElementPropertyTable::getEntity(),
                array('=ref.IBLOCK_ELEMENT_ID' => 'this.ID'),
                array('join_type' => 'LEFT')
            )
        )
        ->registerRuntimeField(
            '',
            new \Bitrix\Main\Entity\ReferenceField(
                'PROPERTY_NUMBER',
                \Bitrix\Iblock\ElementPropertyTable::getEntity(),
                array('=ref.IBLOCK_ELEMENT_ID' => 'this.ID'),
                array('join_type' => 'LEFT')
            )
        )
        ->setFilter([
            'IBLOCK.CODE' => 'players',
            'PROPERTY_NUMBER.IBLOCK_PROPERTY_ID' => $mapCode['NUMBER'],
            'PROPERTY_TEAM.IBLOCK_PROPERTY_ID' => $mapCode['TEAM'],
            'TEAM' => $arResult['PROPERTIES']['TEAM']['VALUE'],
        ])
        ->setSelect([
            'ID',
            'FIO' => 'NAME',
            'NUMBER' => 'PROPERTY_NUMBER.VALUE',
            'TEAM' => 'PROPERTY_TEAM.VALUE',

        ])
        ->setOrder(['NAME' => 'ASC'])
        ->exec();

    while ($player = $iterator->fetch()){
        $temp = explode(' ', $player['FIO']);

        $player['NAME'] =  trim($temp[0]);
        $player['LAST_NAME'] =  trim($temp[1]);

        $arResult['PLAYERS'][] = $player;
    }


endif;
