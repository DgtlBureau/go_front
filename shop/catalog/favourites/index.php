<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
global $APPLICATION, $USER;

$APPLICATION->SetTitle("Избранное");

if (!$USER->IsAuthorized()) {
    $arElements = (empty($_COOKIE["FAVORITES"])) ? [] : unserialize($_COOKIE["FAVORITES"]);
    $favorites = unserialize($APPLICATION->get_cookie("favorites"));
} else {
    $idUser = $USER->GetID();
    $arUser = CUser::GetByID($idUser)->Fetch();
    $arElements = $arUser['UF_FAVORITES'];
}

//dump($arElements);
?>

    <main class="shop">
        <div class="container"><a class="go-back-bnt" href="/shop/catalog/odezhda/">
                <div class="go-back-arrow">←</div>
                <div class="go-back-txt">В каталог</div>
            </a>
            <?
            if (empty($arElements)) {

            } else {
                global $bbFilter;
                $bbFilter = array("ID" => $arElements);
                $APPLICATION->IncludeComponent(
                    "bitrix:catalog.section",
                    "favourites",
                    array(
                        "IBLOCK_TYPE" => "shop",
                        "IBLOCK_ID" => "12",
                        "SECTION_CODE" => "odezhda",
                        "ELEMENT_SORT_FIELD" => "name",
                        "ELEMENT_SORT_ORDER" => "asc",
                        "FILTER_NAME" => "bbFilter",
                        "PROP_FILTER" => "",
                        "INCLUDE_SUBSECTIONS" => "Y",
                        "SHOW_ALL_WO_SECTION" => "Y",
                        "SHOW_FILTER_OPTIONS" => "N",
                        "PAGE_ELEMENT_COUNT" => "20",
                        "LINE_ELEMENT_COUNT" => "2",
                        "PROPERTY_CODE" => array(
                            0 => "OLD_PRICE",
                            1 => "CML2_ARTICLE",
                            2 => "SI_BRAND",
                            3 => "SI_IN_BOX",
                            4 => "",
                        ),
                        "SECTION_URL" => "",
                        "DETAIL_URL" => "",
                        "BASKET_URL" => "/personal/cart/",
                        "ACTION_VARIABLE" => "action",
                        "PRODUCT_ID_VARIABLE" => "ELEMENT_ID",
                        "SECTION_ID_VARIABLE" => "SECTION_ID",
                        "AJAX_MODE" => "N",
                        "AJAX_OPTION_SHADOW" => "Y",
                        "AJAX_OPTION_JUMP" => "N",
                        "AJAX_OPTION_STYLE" => "Y",
                        "AJAX_OPTION_HISTORY" => "N",
                        "CACHE_TYPE" => "N",
                        "CACHE_TIME" => "3600",
                        "META_KEYWORDS" => "-",
                        "META_DESCRIPTION" => "-",
                        "DISPLAY_PANEL" => "N",
                        "DISPLAY_COMPARE" => "N",
                        "SET_TITLE" => "Y",
                        "CACHE_FILTER" => "N",
                        "QUANTITY_TRACE" => "N",
                        "DISPLAY_QUANTITY" => "Y",
                        "DISPLAY_QUANTITY_MASKED" => "Y",
                        "CONTROL_MULTIPLIER" => "N",
                        "ORDER_BY_SECTION" => "N",
                        "ORDER_BY_BRAND" => "N",
                        "PRICE_CODE" => array(
                            0 => "BASE",
                        ),
                        "USE_PRICE_COUNT" => "N",
                        "SHOW_PRICE_COUNT" => "1",
                        "PRICE_VAT_INCLUDE" => "Y",
                        "DISPLAY_TOP_PAGER" => "Y",
                        "DISPLAY_BOTTOM_PAGER" => "Y",
                        "PAGER_TITLE" => "Товары",
                        "PAGER_SHOW_ALWAYS" => "Y",
                        "PAGER_TEMPLATE" => "",
                        "PAGER_DESC_NUMBERING" => "N",
                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                        "AJAX_OPTION_ADDITIONAL" => "",
                        "COMPONENT_TEMPLATE" => "favourites",
                        "SECTION_ID" => $_REQUEST["SECTION_ID"],
                        "SECTION_USER_FIELDS" => array(
                            0 => "",
                            1 => "",
                        ),
                        "CUSTOM_FILTER" => "{\"CLASS_ID\":\"CondGroup\",\"DATA\":{\"All\":\"AND\",\"True\":\"True\"},\"CHILDREN\":[]}",
                        "HIDE_NOT_AVAILABLE" => "N",
                        "HIDE_NOT_AVAILABLE_OFFERS" => "N",
                        "ELEMENT_SORT_FIELD2" => "id",
                        "ELEMENT_SORT_ORDER2" => "desc",
                        "OFFERS_SORT_FIELD" => "sort",
                        "OFFERS_SORT_ORDER" => "asc",
                        "OFFERS_SORT_FIELD2" => "id",
                        "OFFERS_SORT_ORDER2" => "desc",
                        "PROPERTY_CODE_MOBILE" => array(
                            0 => "OLD_PRICE",
                        ),
                        "OFFERS_FIELD_CODE" => array(
                            0 => "",
                            1 => "",
                        ),
                        "OFFERS_LIMIT" => "5",
                        "BACKGROUND_IMAGE" => "-",
                        "TEMPLATE_THEME" => "blue",
                        "PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'1','BIG_DATA':false},{'VARIANT':'1','BIG_DATA':false},{'VARIANT':'1','BIG_DATA':false},{'VARIANT':'1','BIG_DATA':false},{'VARIANT':'1','BIG_DATA':false},{'VARIANT':'1','BIG_DATA':false},{'VARIANT':'1','BIG_DATA':false},{'VARIANT':'1','BIG_DATA':false},{'VARIANT':'1','BIG_DATA':false},{'VARIANT':'1','BIG_DATA':false}]",
                        "ENLARGE_PRODUCT" => "STRICT",
                        "PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
                        "SHOW_SLIDER" => "Y",
                        "SLIDER_INTERVAL" => "3000",
                        "SLIDER_PROGRESS" => "N",
                        "PRODUCT_DISPLAY_MODE" => "N",
                        "ADD_PICT_PROP" => "-",
                        "LABEL_PROP" => array(
                            0 => "HIT",
                        ),
                        "LABEL_PROP_MOBILE" => array(),
                        "LABEL_PROP_POSITION" => "top-left",
                        "PRODUCT_SUBSCRIPTION" => "Y",
                        "SHOW_DISCOUNT_PERCENT" => "N",
                        "SHOW_OLD_PRICE" => "N",
                        "SHOW_MAX_QUANTITY" => "N",
                        "SHOW_CLOSE_POPUP" => "N",
                        "MESS_BTN_BUY" => "Купить",
                        "MESS_BTN_ADD_TO_BASKET" => "В корзину",
                        "MESS_BTN_SUBSCRIBE" => "Подписаться",
                        "MESS_BTN_DETAIL" => "Подробнее",
                        "MESS_NOT_AVAILABLE" => "Нет в наличии",
                        "RCM_TYPE" => "personal",
                        "RCM_PROD_ID" => $_REQUEST["PRODUCT_ID"],
                        "SHOW_FROM_SECTION" => "N",
                        "SEF_MODE" => "N",
                        "CACHE_GROUPS" => "Y",
                        "SET_BROWSER_TITLE" => "Y",
                        "BROWSER_TITLE" => "-",
                        "SET_META_KEYWORDS" => "Y",
                        "SET_META_DESCRIPTION" => "Y",
                        "SET_LAST_MODIFIED" => "N",
                        "USE_MAIN_ELEMENT_SECTION" => "N",
                        "ADD_SECTIONS_CHAIN" => "N",
                        "CONVERT_CURRENCY" => "N",
                        "USE_PRODUCT_QUANTITY" => "N",
                        "PRODUCT_QUANTITY_VARIABLE" => "quantity",
                        "ADD_PROPERTIES_TO_BASKET" => "Y",
                        "PRODUCT_PROPS_VARIABLE" => "prop",
                        "PARTIAL_PRODUCT_PROPERTIES" => "N",
                        "ADD_TO_BASKET_ACTION" => "ADD",
                        "USE_ENHANCED_ECOMMERCE" => "N",
                        "PAGER_SHOW_ALL" => "N",
                        "PAGER_BASE_LINK_ENABLE" => "N",
                        "LAZY_LOAD" => "N",
                        "MESS_BTN_LAZY_LOAD" => "Показать ещё",
                        "LOAD_ON_SCROLL" => "N",
                        "SET_STATUS_404" => "N",
                        "SHOW_404" => "N",
                        "MESSAGE_404" => "",
                        "COMPATIBLE_MODE" => "Y",
                        "DISABLE_INIT_JS_IN_COMPONENT" => "N"
                    ),
                    false
                );
            }
            ?>
        </div>
    </main>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>