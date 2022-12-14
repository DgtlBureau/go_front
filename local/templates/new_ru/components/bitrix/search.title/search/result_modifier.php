<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$PREVIEW_WIDTH = intval($arParams["PREVIEW_WIDTH"]);
if ($PREVIEW_WIDTH <= 0)
    $PREVIEW_WIDTH = 75;

$PREVIEW_HEIGHT = intval($arParams["PREVIEW_HEIGHT"]);
if ($PREVIEW_HEIGHT <= 0)
    $PREVIEW_HEIGHT = 75;

$arParams["PRICE_VAT_INCLUDE"] = $arParams["PRICE_VAT_INCLUDE"] !== "N";

$arCatalogs = false;

$arResult["ELEMENTS"] = array();
$arResult["SEARCH"] = array();

foreach ($arResult["CATEGORIES"] as $category_id => $arCategory) {
    foreach ($arCategory["ITEMS"] as $i => $arItem) {
        if (isset($arItem["ITEM_ID"])) {
            $arResult["SEARCH"][] = &$arResult["CATEGORIES"][$category_id]["ITEMS"][$i];
            if (
                $arItem["MODULE_ID"] == "iblock"
                && mb_substr($arItem["ITEM_ID"], 0, 1) !== "S"
            ) {
                if ($arCatalogs === false) {
                    $arCatalogs = array();
                    if (CModule::IncludeModule("catalog")) {
                        $rsCatalog = CCatalog::GetList(array(
                            "sort" => "asc",
                        ));
                        while ($ar = $rsCatalog->Fetch()) {
                            if ($ar["PRODUCT_IBLOCK_ID"])
                                $arCatalogs[$ar["PRODUCT_IBLOCK_ID"]] = 1;
                            else
                                $arCatalogs[$ar["IBLOCK_ID"]] = 1;
                        }
                    }
                }

                if (array_key_exists($arItem["PARAM2"], $arCatalogs)) {
                    $arResult["ELEMENTS"][$arItem["ITEM_ID"]] = $arItem["ITEM_ID"];
                }
            }
        }
    }
}

foreach ($arResult["SEARCH"] as $i => $arItem) {
    switch ($arItem["MODULE_ID"]) {
        case "iblock":
            if (array_key_exists($arItem["ITEM_ID"], $arResult["ELEMENTS"])) {
                $arElement = &$arResult["ELEMENTS"][$arItem["ITEM_ID"]];

                if ($arParams["SHOW_PREVIEW"] == "Y") {
                    if ($arElement["PREVIEW_PICTURE"] > 0)
                        $arElement["PICTURE"] = CFile::ResizeImageGet($arElement["PREVIEW_PICTURE"], array("width" => $PREVIEW_WIDTH, "height" => $PREVIEW_HEIGHT), BX_RESIZE_IMAGE_PROPORTIONAL, true);
                    elseif ($arElement["DETAIL_PICTURE"] > 0)
                        $arElement["PICTURE"] = CFile::ResizeImageGet($arElement["DETAIL_PICTURE"], array("width" => $PREVIEW_WIDTH, "height" => $PREVIEW_HEIGHT), BX_RESIZE_IMAGE_PROPORTIONAL, true);
                }
            }
            break;
    }

    $arResult["SEARCH"][$i]["ICON"] = true;
}

// ???? ????????????????
if (!empty($arResult["ELEMENTS"]) && CModule::IncludeModule("iblock")) {
    $arConvertParams = array();
    if ('Y' == $arParams['CONVERT_CURRENCY']) {
        if (!CModule::IncludeModule('currency')) {
            $arParams['CONVERT_CURRENCY'] = 'N';
            $arParams['CURRENCY_ID'] = '';
        } else {
            $arCurrencyInfo = CCurrency::GetByID($arParams['CURRENCY_ID']);
            if (!(is_array($arCurrencyInfo) && !empty($arCurrencyInfo))) {
                $arParams['CONVERT_CURRENCY'] = 'N';
                $arParams['CURRENCY_ID'] = '';
            } else {
                $arParams['CURRENCY_ID'] = $arCurrencyInfo['CURRENCY'];
                $arConvertParams['CURRENCY_ID'] = $arCurrencyInfo['CURRENCY'];
            }
        }
    }

    $useCatalogTab = (string)\Bitrix\Main\Config\Option::get('catalog', 'show_catalog_tab_with_offers') == 'Y';

    $obParser = new CTextParser;

    if (is_array($arParams["PRICE_CODE"]))
        $arResult["PRICES"] = CIBlockPriceTools::GetCatalogPrices(0, $arParams["PRICE_CODE"]);
    else
        $arResult["PRICES"] = array();

    $arSelect = array(
        "ID",
        'NAME',
        "IBLOCK_ID",
        'ELEMENT_CODE',
        'SECTION_CODE',
        "PREVIEW_TEXT",
        "PREVIEW_PICTURE",
        "DETAIL_PICTURE",
        "DETAIL_PAGE_URL",
        "ACTIVE_FROM",
        "PROPERTY_ARTICLE",
        'CATALOG_PRICE_1'
    );
    $arFilter = array(
        "IBLOCK_LID" => SITE_ID,
        "IBLOCK_ACTIVE" => "Y",
        "ACTIVE_DATE" => "Y",
        "ACTIVE" => "Y",
        "CHECK_PERMISSIONS" => "Y",
        "MIN_PERMISSION" => "R",
    );
    foreach ($arResult["PRICES"] as $value) {
        if (!$value['CAN_VIEW'] && !$value['CAN_BUY'])
            continue;
        $arSelect[] = $value["SELECT"];
        $arFilter["CATALOG_SHOP_QUANTITY_" . $value["ID"]] = 1;
    }
    $arFilter["=ID"] = array_keys($arResult["ELEMENTS"]);

    $arResult["ELEMENTS"] = array();
    $rsElements = CIBlockElement::GetList(array(), $arFilter, false, false, $arSelect);
    while ($arElement = $rsElements->GetNext()) {

//        dump($arElement);

        $arElement["PRICES"] = array();
        if ($arElement["CATALOG_TYPE"] != \Bitrix\Catalog\ProductTable::TYPE_SKU || $useCatalogTab)
            $arElement["PRICES"] = CIBlockPriceTools::GetItemPrices($arElement["IBLOCK_ID"], $arResult["PRICES"], $arElement, $arParams['PRICE_VAT_INCLUDE'], $arConvertParams);
        else
            $arElement["PRICES"]['BASE'] = [
                'VALUE_NOVAT' => $arElement['CATALOG_PRICE_1'],
                'PRINT_VALUE_NOVAT' => $arElement['CATALOG_PRICE_1'],
                'VALUE_VAT' => $arElement['CATALOG_PRICE_1'],
                'PRINT_VALUE_VAT' => $arElement['CATALOG_PRICE_1'],
                'VATRATE_VALUE' => 0,
                'PRINT_VATRATE_VALUE' => 0,
                'DISCOUNT_VALUE_NOVAT' => $arElement['CATALOG_PRICE_1'],
                'PRINT_DISCOUNT_VALUE_NOVAT' => $arElement['CATALOG_PRICE_1'],
                'DISCOUNT_VALUE_VAT' => $arElement['CATALOG_PRICE_1'],
                'PRINT_DISCOUNT_VALUE_VAT' => $arElement['CATALOG_PRICE_1'],
                'DISCOUNT_VATRATE_VALUE' => 0,
                'PRINT_DISCOUNT_VATRATE_VALUE' => 0,
                'CURRENCY' => 'RUB',
                'ROUND_VALUE_VAT' => $arElement['CATALOG_PRICE_1'],
                'ROUND_VALUE_NOVAT' => $arElement['CATALOG_PRICE_1'],
                'ROUND_VATRATE_VALUE' => 0,
                'PRICE_ID' => 1,
                'ID' => 11,
                'CAN_ACCESS' => 'Y',
                'CAN_BUY' => 'Y',
                'MIN_PRICE' => 'Y',
                'VALUE' => $arElement['CATALOG_PRICE_1'],
                'PRINT_VALUE' => CurrencyFormat($arElement['CATALOG_PRICE_1'], "RUB"),
                'UNROUND_DISCOUNT_VALUE' => $arElement['CATALOG_PRICE_1'],
                'DISCOUNT_VALUE' => $arElement['CATALOG_PRICE_1'],
                'PRINT_DISCOUNT_VALUE' => $arElement['CATALOG_PRICE_1'],
                'DISCOUNT_DIFF' => 0,
                'DISCOUNT_DIFF_PERCENT' => 0,
                'PRINT_DISCOUNT_DIFF' => 0,
            ];


        if ($arParams["PREVIEW_TRUNCATE_LEN"] > 0)
            $arElement["PREVIEW_TEXT"] = $obParser->html_cut($arElement["PREVIEW_TEXT"], $arParams["PREVIEW_TRUNCATE_LEN"]);


        if ($arParams["SHOW_PREVIEW"] == "Y") {
            if ($arElement["PREVIEW_PICTURE"] > 0)
                $arElement["PICTURE"] = CFile::ResizeImageGet($arElement["PREVIEW_PICTURE"], array("width" => $PREVIEW_WIDTH, "height" => $PREVIEW_HEIGHT), BX_RESIZE_IMAGE_PROPORTIONAL, true);
            elseif ($arElement["DETAIL_PICTURE"] > 0)
                $arElement["PICTURE"] = CFile::ResizeImageGet($arElement["DETAIL_PICTURE"], array("width" => $PREVIEW_WIDTH, "height" => $PREVIEW_HEIGHT), BX_RESIZE_IMAGE_PROPORTIONAL, true);
        }


        $arResult["ELEMENTS"][$arElement["ID"]] = $arElement;
    }
}

// ???? ??????????????
if (!$arResult["SEARCH"] && is_numeric($arResult['query'])) {

    $arConvertParams = array();
    if ('Y' == $arParams['CONVERT_CURRENCY']) {
        if (!CModule::IncludeModule('currency')) {
            $arParams['CONVERT_CURRENCY'] = 'N';
            $arParams['CURRENCY_ID'] = '';
        } else {
            $arCurrencyInfo = CCurrency::GetByID($arParams['CURRENCY_ID']);
            if (!(is_array($arCurrencyInfo) && !empty($arCurrencyInfo))) {
                $arParams['CONVERT_CURRENCY'] = 'N';
                $arParams['CURRENCY_ID'] = '';
            } else {
                $arParams['CURRENCY_ID'] = $arCurrencyInfo['CURRENCY'];
                $arConvertParams['CURRENCY_ID'] = $arCurrencyInfo['CURRENCY'];
            }
        }
    }

    $useCatalogTab = (string)\Bitrix\Main\Config\Option::get('catalog', 'show_catalog_tab_with_offers') == 'Y';

    $obParser = new CTextParser;

    if (is_array($arParams["PRICE_CODE"]))
        $arResult["PRICES"] = CIBlockPriceTools::GetCatalogPrices(0, $arParams["PRICE_CODE"]);
    else
        $arResult["PRICES"] = array();



    CModule::IncludeModule("iblock");

    $arSelect = array(
        "ID",
        'NAME',
        "IBLOCK_ID",
        'ELEMENT_CODE',
        'SECTION_CODE',
        "PREVIEW_TEXT",
        "PREVIEW_PICTURE",
        "DETAIL_PICTURE",
        "DETAIL_PAGE_URL",
        "ACTIVE_FROM",
        "PROPERTY_ARTICLE",
        'CATALOG_PRICE_1'
    );
    $arFilter = [
        'IBLOCK_ID' => 12,
        'ACTIVE' => 'Y',
        'PROPERTY_ARTICLE' => $arResult['query']
    ];


    foreach ($arResult["PRICES"] as $value) {
        if (!$value['CAN_VIEW'] && !$value['CAN_BUY'])
            continue;
        $arSelect[] = $value["SELECT"];
        $arFilter["CATALOG_SHOP_QUANTITY_" . $value["ID"]] = 1;
    }

    $rsElements = CIBlockElement::GetList(array(), $arFilter, false, false, $arSelect);
    while ($arElement = $rsElements->GetNext()) {
        $arElement["PRICES"] = array();
        if ($arElement["CATALOG_TYPE"] != \Bitrix\Catalog\ProductTable::TYPE_SKU || $useCatalogTab)
            $arElement["PRICES"] = CIBlockPriceTools::GetItemPrices($arElement["IBLOCK_ID"], $arResult["PRICES"], $arElement, $arParams['PRICE_VAT_INCLUDE'], $arConvertParams);
        else
            $arElement["PRICES"]['BASE'] = [
                'VALUE_NOVAT' => $arElement['CATALOG_PRICE_1'],
                'PRINT_VALUE_NOVAT' => $arElement['CATALOG_PRICE_1'],
                'VALUE_VAT' => $arElement['CATALOG_PRICE_1'],
                'PRINT_VALUE_VAT' => $arElement['CATALOG_PRICE_1'],
                'VATRATE_VALUE' => 0,
                'PRINT_VATRATE_VALUE' => 0,
                'DISCOUNT_VALUE_NOVAT' => $arElement['CATALOG_PRICE_1'],
                'PRINT_DISCOUNT_VALUE_NOVAT' => $arElement['CATALOG_PRICE_1'],
                'DISCOUNT_VALUE_VAT' => $arElement['CATALOG_PRICE_1'],
                'PRINT_DISCOUNT_VALUE_VAT' => $arElement['CATALOG_PRICE_1'],
                'DISCOUNT_VATRATE_VALUE' => 0,
                'PRINT_DISCOUNT_VATRATE_VALUE' => 0,
                'CURRENCY' => 'RUB',
                'ROUND_VALUE_VAT' => $arElement['CATALOG_PRICE_1'],
                'ROUND_VALUE_NOVAT' => $arElement['CATALOG_PRICE_1'],
                'ROUND_VATRATE_VALUE' => 0,
                'PRICE_ID' => 1,
                'ID' => 11,
                'CAN_ACCESS' => 'Y',
                'CAN_BUY' => 'Y',
                'MIN_PRICE' => 'Y',
                'VALUE' => $arElement['CATALOG_PRICE_1'],
                'PRINT_VALUE' => CurrencyFormat($arElement['CATALOG_PRICE_1'], "RUB"),
                'UNROUND_DISCOUNT_VALUE' => $arElement['CATALOG_PRICE_1'],
                'DISCOUNT_VALUE' => $arElement['CATALOG_PRICE_1'],
                'PRINT_DISCOUNT_VALUE' => $arElement['CATALOG_PRICE_1'],
                'DISCOUNT_DIFF' => 0,
                'DISCOUNT_DIFF_PERCENT' => 0,
                'PRINT_DISCOUNT_DIFF' => 0,
            ];


        if ($arParams["SHOW_PREVIEW"] == "Y") {
            if ($arElement["PREVIEW_PICTURE"] > 0)
                $arElement["PICTURE"] = CFile::ResizeImageGet($arElement["PREVIEW_PICTURE"], array("width" => $PREVIEW_WIDTH, "height" => $PREVIEW_HEIGHT), BX_RESIZE_IMAGE_PROPORTIONAL, true);
            elseif ($arElement["DETAIL_PICTURE"] > 0)
                $arElement["PICTURE"] = CFile::ResizeImageGet($arElement["DETAIL_PICTURE"], array("width" => $PREVIEW_WIDTH, "height" => $PREVIEW_HEIGHT), BX_RESIZE_IMAGE_PROPORTIONAL, true);
        }

        $arResult["ELEMENTS"][$arElement['ID']] = $arElement;
    }
}