<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
$TEAM = $arParams['ADD_PROPERTY_TEAM'];
$i=0;$s=0;$y=0;

//текущая дата и время
$right_now = date("Y-m-d H:i:s");
$timestamp_now = strtotime($right_now);
foreach($arResult['ITEMS'] as $key => $arItem){
	//получаем там timestamp элементов
	$timestamp = strtotime(FormatDate("Y-m-d H:i:s", MakeTimeStamp($arItem["PROPERTIES"]["MATCHDATE"]["VALUE"])));
	//элементы  будущие
	if($timestamp > $timestamp_now){
		$FirstElement[$i] = $arResult['ITEMS'][$key];
		$i++;
	}//Элементы прошедшие
	if($timestamp_now > $timestamp){
		if($arItem["PROPERTIES"]["BTN_MATCH"]["VALUE"] == 'Трансляция'){
			//Текущий матч
			$current[$y] = $arResult['ITEMS'][$key];
			$y++;
		}
		else{
			//все прошедшие матчи
			$TwoElement[$s] = $arResult['ITEMS'][$key];
			$s++;
		}
		
	}
}
//Последний ставим первым	
$FirstFirst[0] = $TwoElement[$s-1];
unset($TwoElement[$s-1]);
$arResult['ITEMS'] = array_merge((array)$FirstFirst, (array)$current, (array)$FirstElement, (array)$TwoElement); 