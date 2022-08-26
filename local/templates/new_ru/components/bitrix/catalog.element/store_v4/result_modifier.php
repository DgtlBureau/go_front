<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/**
 * @var CBitrixComponentTemplate $this
 * @var CatalogElementComponent $component
 */

$component = $this->getComponent();
$arParams = $component->applyTemplateModifications();


if (!empty($arResult['PROPERTIES']['TEAM']['VALUE'])):

    // get id property by code
    $iterator = \Bitrix\Iblock\PropertyTable::query()
        ->setFilter([
            ['IBLOCK.CODE' => ['players', 'teams'], 'CODE' => ['TEAM', 'NUMBER', 'TEAM_COLOR']],
        ])
        ->setSelect(['ID', 'CODE'])
        ->exec();
    while ($arCode = $iterator->fetch())
        $mapCode[$arCode['CODE']] = $arCode['ID'];


    // цвета команды
    $iterator = \Bitrix\Iblock\PropertyEnumerationTable::query()
        ->setFilter([
            'PROPERTY.CODE' => 'TEAM_COLOR',
        ])
        ->setSelect(['XML_ID', 'VALUE', 'ID'])
        ->exec();
    while ($color = $iterator->fetch())
        $mapColor[$color['ID']] = $color['XML_ID'];

    $colorValue = \Bitrix\Iblock\ElementPropertyTable::query()
        ->setFilter(['IBLOCK_ELEMENT_ID' => $arResult['PROPERTIES']['TEAM']['VALUE'], 'IBLOCK_PROPERTY_ID' => $mapCode['TEAM_COLOR']])
        ->setSelect(['VALUE'])
        ->fetch()['VALUE'];

    $arResult['TEAM_COLOR'] = $mapColor[$colorValue];

    // список игроков для печати
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

    while ($player = $iterator->fetch()) {
        $temp = explode(' ', $player['FIO']);

        $player['NAME'] = trim($temp[0]);
        $player['LAST_NAME'] = trim($temp[1]);
        $arResult['PLAYERS'][] = $player;

//    echo '<pre>';
//    print_r($arResult);
//    echo '</pre>';
    }
endif;
