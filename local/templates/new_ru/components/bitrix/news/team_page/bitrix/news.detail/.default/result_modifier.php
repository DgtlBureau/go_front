<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

// ========================================= вывод свойств привязанного элемента

$arSelect = ['ID', 'NAME', 'IBLOCK_ID', 'PREVIEW_PICTURE', 'PROPERTY_IMG'];

$arFilter = [
    'IBLOCK_ID' => $arResult["PROPERTIES"]["DOS"]["LINK_IBLOCK_ID"],
    'ID'        => $arResult["PROPERTIES"]["DOS"]["VALUE"],
];

$res = CIBlockElement::GetList([], $arFilter, false, false, $arSelect);

while($ob = $res->Fetch()){
    $arResult['DOSTIZH'][$ob['IBLOCK_ID']][$ob['ID']] = $ob;
}

$arFilter = Array(
    "IBLOCK_ID"=>$arParams['IBLOCK_ID'],
    ">ID"=>$arParams['ID'],
);

$res = CIBlockElement::GetList(Array("ID"=>"ASC"), $arFilter,false, false,  Array("ID", "PREVIEW_PICTURE", "CODE", "NAME"));
if ($obRes = $res->GetNextElement()) {
    $ar_fields = $obRes->GetFields();
    $pr_pic = CFile::GetFileArray($ar_fields["PREVIEW_PICTURE"]);
    $arResult['NEXT_ELEMENT']['IMG'] = CFile::GetFileArray($ar_fields["PREVIEW_PICTURE"]);
    $arResult['NEXT_ELEMENT']['CODE'] = $ar_fields['CODE'];
    $arResult['NEXT_ELEMENT']['NAME'] = $ar_fields['NAME'];
}
$res = CIBlockElement::GetList(Array("ID"=>"DESC"), $arFilter,false, false,  Array("ID", "PREVIEW_PICTURE", "CODE", "NAME"));
if ($obRes = $res->GetNextElement()) {
    $ar_fields = $obRes->GetFields();
    $pr_pic = CFile::GetFileArray($ar_fields["PREVIEW_PICTURE"]);
    $arResult['PREV_ELEMENT']['IMG'] = CFile::GetFileArray($ar_fields["PREVIEW_PICTURE"]);
    $arResult['PREV_ELEMENT']['CODE'] = $ar_fields['CODE'];
    $arResult['PREV_ELEMENT']['NAME'] = $ar_fields['NAME'];
}

foreach($arResult["DOSTIZH"][19] as $arDOSTIZH) {
            $arFilter = Array("IBLOCK_ID"=>19, "ID"=>$arDOSTIZH["ID"]);
            $res_dostizh = CIBlockElement::GetList(Array(), $arFilter); // с помощью метода CIBlockElement::GetList вытаскиваем все значения из нужного элемента
            if ($dostizh = $res_dostizh->GetNextElement()){; // переходим к след элементу, если такой есть
                $arDostizhProps = $dostizh->GetProperties(); // свойства элемента
                $res_seson = CIBlockElement::GetByID($arDostizhProps["SESON"]["VALUE"]);
                if ($seson = $res_seson->GetNext()){
                    $arResult['DOSTIZH']['SEASONS'][$seson["NAME"]][] = array_merge($arDOSTIZH, $arDostizhProps);
                }
            }
}



//die(print_r($arResult));

?>
