<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
$TEAM = $arParams['ADD_PROPERTY_TEAM'];
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

$id = $arResult["ID"];
$arFilter = Array(
    "IBLOCK_ID"=>$arParams['IBLOCK_ID'],
    ">ID"=>$id,
	"PROPERTY_TEAM"=>$TEAM,
);
$res = CIBlockElement::GetList(Array("ID"=>"ASC"), $arFilter,false, false,  Array("ID", "PREVIEW_PICTURE", "CODE", "ID", "NAME"));
if ($obRes = $res->GetNextElement()) {
    $ar_fields = $obRes->GetFields();
    $pr_pic = CFile::GetFileArray($ar_fields["PREVIEW_PICTURE"]);
    $arResult['NEXT_ELEMENT']['IMG'] = CFile::GetFileArray($ar_fields["PREVIEW_PICTURE"]);
    $arResult['NEXT_ELEMENT']['CODE'] = $ar_fields['CODE'];
    $arResult['NEXT_ELEMENT']['NAME'] = $ar_fields['NAME'];
	$arResult['NEXT_ELEMENT']['ID'] = $ar_fields['ID'];
}
if(empty($arResult['NEXT_ELEMENT']['ID'])){//если первый элемент
	$arFilter = Array(
		"IBLOCK_ID"=>$arParams['IBLOCK_ID'],
		"PROPERTY_TEAM"=>$TEAM,
	);
	$res = CIBlockElement::GetList(Array("ID"=>"ASC"), $arFilter,false, false,  Array("ID", "PREVIEW_PICTURE", "CODE", "ID", "NAME"));
	if ($obRes = $res->GetNextElement()) {
		$ar_fields = $obRes->GetFields();
		$pr_pic = CFile::GetFileArray($ar_fields["PREVIEW_PICTURE"]);
		$arResult['NEXT_ELEMENT']['IMG'] = CFile::GetFileArray($ar_fields["PREVIEW_PICTURE"]);
		$arResult['NEXT_ELEMENT']['CODE'] = $ar_fields['CODE'];
		$arResult['NEXT_ELEMENT']['NAME'] = $ar_fields['NAME'];
		$arResult['NEXT_ELEMENT']['ID'] = $ar_fields['ID'];
	}
}
$arFilter = Array(
    "IBLOCK_ID"=>$arParams['IBLOCK_ID'],
    "<ID"=>$id,
	"PROPERTY_TEAM"=>$TEAM,
);
$res = CIBlockElement::GetList(Array("ID"=>"DESC"), $arFilter,false, false,  Array("ID", "PREVIEW_PICTURE", "CODE", "ID", "NAME"));
if ($obRes = $res->GetNextElement()) {
    $ar_fields = $obRes->GetFields();
	$pr_pic = CFile::GetFileArray($ar_fields["PREVIEW_PICTURE"]);
    $arResult['PREV_ELEMENT']['IMG'] = CFile::GetFileArray($ar_fields["PREVIEW_PICTURE"]);
    $arResult['PREV_ELEMENT']['CODE'] = $ar_fields['CODE'];
    $arResult['PREV_ELEMENT']['NAME'] = $ar_fields['NAME'];
	$arResult['PREV_ELEMENT']['ID'] = $ar_fields['ID'];
}
if(empty($arResult['PREV_ELEMENT']['ID'])){//если первый элемент
	$arFilter = Array(
		"IBLOCK_ID"=>$arParams['IBLOCK_ID'],
		"PROPERTY_TEAM"=>$TEAM,
	);
	$res = CIBlockElement::GetList(Array("ID"=>"DESC"), $arFilter,false, false,  Array("ID", "PREVIEW_PICTURE", "CODE", "ID", "NAME"));
	if ($obRes = $res->GetNextElement()) {
		$ar_fields = $obRes->GetFields();
		$pr_pic = CFile::GetFileArray($ar_fields["PREVIEW_PICTURE"]);
		$arResult['PREV_ELEMENT']['IMG'] = CFile::GetFileArray($ar_fields["PREVIEW_PICTURE"]);
		$arResult['PREV_ELEMENT']['CODE'] = $ar_fields['CODE'];
		$arResult['PREV_ELEMENT']['NAME'] = $ar_fields['NAME'];
		$arResult['PREV_ELEMENT']['ID'] = $ar_fields['ID'];
	}
}
//Получаем и группируем сезоны Достижений
		$IBLOCK_IDS = 16;//ID инф. блока достиж
		$k=0;
		//какие параметры выбираем
		$arSelect = Array(
			"PROPERTY_SEAZON"
		);
		$arFilter = Array(
			"IBLOCK_ID"=>$IBLOCK_IDS, 
			"ACTIVE"=>"Y", 
			"ID"=>$arResult["PROPERTIES"]["DOS"]["VALUE"], 
		);
		$res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
		while($ob = $res->GetNextElement()){
			$arFields = $ob->GetFields();
			$Seazon[$k] = $arFields["PROPERTY_SEAZON_VALUE"];
			$k++;	
		}
		$Seazon = array_unique($Seazon);//удаляем одинаковые сезоны
		
		$i = 0;
		foreach($Seazon as $arSeazon){
			$arSeazonPrint[$i] = $arSeazon; $i++;
		}
		
		rsort($arSeazonPrint);
		//$arResult['SEAZON_ELEMENT'] = $arSeazonPrint;
		foreach($arSeazonPrint as $key=>$Seazongroup){
			$arResult['SEAZON_ELEMENT'][$key]['NAME']=$Seazongroup;
			//какие параметры выбираем
			$arSelect = Array(
				"ID",
				"NAME",
				"PROPERTY_DEVIZ", 
				"PROPERTY_SEAZON", 
				"PREVIEW_PICTURE"
			);
			$arFilter = Array(
				"IBLOCK_ID"=>$IBLOCK_IDS, 
				"ACTIVE"=>"Y", 
				"PROPERTY_SEAZON_VALUE"=>$Seazongroup, 
				"ID"=>$arResult["PROPERTIES"]["DOS"]["VALUE"], 
			);
			$res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
			$i = 0;
			while($ob = $res->GetNextElement()){
				$arFields = $ob->GetFields();
				$arResult['SEAZON_ELEMENT'][$key]['DOSTIJ'][$i] = $arFields;
				$i++;		
			}
		}
?>
