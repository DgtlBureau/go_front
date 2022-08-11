<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

// ========================================= вывод свойств привязанного элемента

$arSelect = ['ID', 'NAME', 'IBLOCK_ID', 'PREVIEW_PICTURE', 'PROPERTY_IMG'];

$arFilter = [
    'IBLOCK_ID' => [19]
];

$res = CIBlockElement::GetList([], $arFilter, false, false, $arSelect);

while($ob = $res->Fetch()){
    $arResult['DOSTIZH'][$ob['IBLOCK_ID']][$ob['ID']] = $ob;
}

?>
