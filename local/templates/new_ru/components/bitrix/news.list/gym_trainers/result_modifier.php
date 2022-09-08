<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

$sectionIds = array_values(array_column($arResult['ITEMS'], 'IBLOCK_SECTION_ID'));

$sectionProvider = \Bitrix\Iblock\Model\Section::compileEntityByIblock($arResult['ID']);
$sectionReq = $sectionProvider::getList([
    'select' => [
        'ID',
        'NAME',
        'IBLOCK_SECTION_ID',
    ],
]);
while ($section = $sectionReq->fetch()) {
    $sections[$section['ID']] = $section;
}

foreach ($arResult['ITEMS'] as &$item) {
    $item['SECTION_NAME'] = $sections[$item['IBLOCK_SECTION_ID']]['NAME'];
}
