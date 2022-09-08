<?php
\Bitrix\Main\Loader::IncludeModule("iblock");

$iterator = \Bitrix\Iblock\ElementPropertyTable::query()
    ->registerRuntimeField(
        '',
        new \Bitrix\Main\Entity\ReferenceField(
            'PROPERTY',
            \Bitrix\Iblock\PropertyTable::getEntity(),
            array('=ref.ID' => 'this.IBLOCK_PROPERTY_ID'),
            array('join_type' => 'LEFT')
        )
    )
    ->registerRuntimeField(
        '',
        new \Bitrix\Main\Entity\ReferenceField(
            'ELEMENT',
            \Bitrix\Iblock\ElementTable::getEntity(),
            array('=ref.ID' => 'this.IBLOCK_ELEMENT_ID'),
            array('join_type' => 'LEFT')
        )
    )
    ->setFilter([
        'ELEMENT.CODE' => ['go', 'gohockey'],
    ])
    ->setSelect([
        'VALUE',
        'PROPERTY_CODE' => 'PROPERTY.CODE',
        'ELEMENT_CODE' => 'ELEMENT.CODE',
        'PROPERTY_TYPE' => 'PROPERTY.PROPERTY_TYPE',
    ])
    ->exec();


while ($res = $iterator->fetch()) {
    $site_settings[$res['ELEMENT_CODE']][$res['PROPERTY_CODE']] = $res['VALUE'];
    if ($res['PROPERTY_TYPE'] == 'F')
        $site_settings[$res['ELEMENT_CODE']][$res['PROPERTY_CODE'] . '_SRC'] = CFile::GetPath($res['VALUE']);
}
$GLOBALS['SITE_SETTINGS'] = $site_settings;