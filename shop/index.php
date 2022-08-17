<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Интернет-магазин");

$asset = \Bitrix\Main\Page\Asset::getInstance();

$asset->addCss(SITE_TEMPLATE_PATH . '/assets/go_shop_build/ShopMain/main.css');
$asset->addJs(SITE_TEMPLATE_PATH . '/assets/go_shop_build/ShopMain/index.js');
$asset->addCss(SITE_TEMPLATE_PATH . '/assets/slider/slider-styles.css');
$asset->addJs(SITE_TEMPLATE_PATH . '/assets/slider/index.js');
$asset->addJs(SITE_TEMPLATE_PATH . '/assets/slider/slider_touch.js');

?>
<?
$APPLICATION->IncludeComponent(
    'bitrix:main.include',
    '',
    array(
        'AREA_FILE_SHOW' => 'file',
        'PATH' => '/shop/includes/top_fav_and_basket.php',
        'AREA_FILE_RECURSIVE' => 'N',
        'EDIT_MODE' => 'html',
    ),
    false,
    array('HIDE_ICONS' => 'Y')
);
?>


<?
$APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "banner_shop",
    array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "ADD_SECTIONS_CHAIN" => "Y",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "0",
        "CACHE_TYPE" => "A",
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "",
        "DISPLAY_BOTTOM_PAGER" => "Y",
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "FIELD_CODE" => array(0 => "NAME", 1 => "PREVIEW_PICTURE", 2 => "",),
        "FILTER_NAME" => "",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => "9",
        "IBLOCK_TYPE" => "shop",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
        "INCLUDE_SUBSECTIONS" => "Y",
        "MESSAGE_404" => "",
        "NEWS_COUNT" => "3",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => ".default",
        "PAGER_TITLE" => "Новости",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "PROPERTY_CODE" => array(0 => "", 1 => "",),
        "SET_BROWSER_TITLE" => "Y",
        "SET_LAST_MODIFIED" => "N",
        "SET_META_DESCRIPTION" => "Y",
        "SET_META_KEYWORDS" => "Y",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "Y",
        "SHOW_404" => "N",
        "SORT_BY1" => "ACTIVE_FROM",
        "SORT_BY2" => "SORT",
        "SORT_ORDER1" => "DESC",
        "SORT_ORDER2" => "ASC",
        "STRICT_SECTION_CHECK" => "N"
    )
);
?>
    <main class="shop">
        <? $APPLICATION->IncludeComponent(
            "bitrix:menu",
            "shop_menu",
            array(
                "ALLOW_MULTI_SELECT" => "N",
                "CHILD_MENU_TYPE" => "",
                "COMPONENT_TEMPLATE" => "shop_menu",
                "DELAY" => "N",
                "MAX_LEVEL" => "1",
                "MENU_CACHE_GET_VARS" => array(),
                "MENU_CACHE_TIME" => "0",
                "MENU_CACHE_TYPE" => "A",
                "MENU_CACHE_USE_GROUPS" => "Y",
                "ROOT_MENU_TYPE" => "shop",
                "USE_EXT" => "N"
            )
        ); ?>
        <? $APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "sections_main",
            array(
                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                "ADD_SECTIONS_CHAIN" => "Y",
                "AJAX_MODE" => "N",
                "AJAX_OPTION_ADDITIONAL" => "",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "Y",
                "CACHE_TIME" => "0",
                "CACHE_TYPE" => "A",
                "CHECK_DATES" => "Y",
                "COMPONENT_TEMPLATE" => "sections_main",
                "DETAIL_URL" => "",
                "DISPLAY_BOTTOM_PAGER" => "Y",
                "DISPLAY_DATE" => "Y",
                "DISPLAY_NAME" => "Y",
                "DISPLAY_PICTURE" => "Y",
                "DISPLAY_PREVIEW_TEXT" => "Y",
                "DISPLAY_TOP_PAGER" => "N",
                "FIELD_CODE" => array(0 => "NAME", 1 => "PREVIEW_PICTURE", 2 => "",),
                "FILTER_NAME" => "",
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                "IBLOCK_ID" => "10",
                "IBLOCK_TYPE" => "shop",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                "INCLUDE_SUBSECTIONS" => "Y",
                "MESSAGE_404" => "",
                "NEWS_COUNT" => "20",
                "PAGER_BASE_LINK_ENABLE" => "N",
                "PAGER_DESC_NUMBERING" => "N",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                "PAGER_SHOW_ALL" => "N",
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_TEMPLATE" => ".default",
                "PAGER_TITLE" => "Новости",
                "PARENT_SECTION" => "",
                "PARENT_SECTION_CODE" => "test2",
                "PREVIEW_TRUNCATE_LEN" => "",
                "PROPERTY_CODE" => array(0 => "", 1 => "",),
                "SET_BROWSER_TITLE" => "Y",
                "SET_LAST_MODIFIED" => "N",
                "SET_META_DESCRIPTION" => "Y",
                "SET_META_KEYWORDS" => "Y",
                "SET_STATUS_404" => "N",
                "SET_TITLE" => "Y",
                "SHOW_404" => "N",
                "SORT_BY1" => "ACTIVE_FROM",
                "SORT_BY2" => "SORT",
                "SORT_ORDER1" => "DESC",
                "SORT_ORDER2" => "ASC",
                "STRICT_SECTION_CHECK" => "N"
            )
        ); ?>

        <div class="flex_container">
            <div class="shop__new-product">
                <div class="shop__title-block">
                    <div class="shop__title">Новинки</div>
                    <div class="shop__title-arrow">&#8601;</div>
                </div>
                <div class="shop__swiper-block">
                    <div class="shop__swiper">
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:catalog.section",
                            "main_slider",
                            array(
                                "ACTION_VARIABLE" => "action",
                                "ADD_PICT_PROP" => "-",
                                "ADD_PROPERTIES_TO_BASKET" => "Y",
                                "ADD_SECTIONS_CHAIN" => "N",
                                "ADD_TO_BASKET_ACTION" => "ADD",
                                "AJAX_MODE" => "N",
                                "AJAX_OPTION_ADDITIONAL" => "",
                                "AJAX_OPTION_HISTORY" => "N",
                                "AJAX_OPTION_JUMP" => "N",
                                "AJAX_OPTION_STYLE" => "Y",
                                "BACKGROUND_IMAGE" => "-",
                                "BASKET_URL" => "/personal/basket.php",
                                "BROWSER_TITLE" => "-",
                                "CACHE_FILTER" => "N",
                                "CACHE_GROUPS" => "Y",
                                "CACHE_TIME" => "0",
                                "CACHE_TYPE" => "A",
                                "COMPATIBLE_MODE" => "Y",
                                "CONVERT_CURRENCY" => "Y",
                                "CUSTOM_FILTER" => "{\"CLASS_ID\":\"CondGroup\",\"DATA\":{\"All\":\"AND\",\"True\":\"True\"},\"CHILDREN\":[]}",
                                "DETAIL_URL" => "catalog/odezhda/#ELEMENT_CODE#/",
                                "DISABLE_INIT_JS_IN_COMPONENT" => "N",
                                "DISPLAY_BOTTOM_PAGER" => "Y",
                                "DISPLAY_COMPARE" => "N",
                                "DISPLAY_TOP_PAGER" => "N",
                                "ELEMENT_SORT_FIELD" => "sort",
                                "ELEMENT_SORT_FIELD2" => "id",
                                "ELEMENT_SORT_ORDER" => "asc",
                                "ELEMENT_SORT_ORDER2" => "desc",
                                "ENLARGE_PRODUCT" => "STRICT",
                                "FILTER_NAME" => "arrFilter",
                                "HIDE_NOT_AVAILABLE" => "Y",
                                "HIDE_NOT_AVAILABLE_OFFERS" => "N",
                                "IBLOCK_ID" => "12",
                                "IBLOCK_TYPE" => "shop",
                                "INCLUDE_SUBSECTIONS" => "Y",
                                "LABEL_PROP" => array(),
                                "LAZY_LOAD" => "N",
                                "LINE_ELEMENT_COUNT" => "18",
                                "LOAD_ON_SCROLL" => "N",
                                "MESSAGE_404" => "",
                                "MESS_BTN_ADD_TO_BASKET" => "В корзину",
                                "MESS_BTN_BUY" => "Купить",
                                "MESS_BTN_DETAIL" => "Подробнее",
                                "MESS_BTN_LAZY_LOAD" => "Показать ещё",
                                "MESS_BTN_SUBSCRIBE" => "Подписаться",
                                "MESS_NOT_AVAILABLE" => "Нет в наличии",
                                "META_DESCRIPTION" => "-",
                                "META_KEYWORDS" => "-",
                                "OFFERS_CART_PROPERTIES" => "",
                                "OFFERS_FIELD_CODE" => array(
                                    0 => "NAME",
                                    1 => "",
                                ),
                                "OFFERS_LIMIT" => "0",
                                "OFFERS_PROPERTY_CODE" => array(
                                    0 => "",
                                    1 => "",
                                ),
                                "OFFERS_SORT_FIELD" => "sort",
                                "OFFERS_SORT_FIELD2" => "id",
                                "OFFERS_SORT_ORDER" => "asc",
                                "OFFERS_SORT_ORDER2" => "desc",
                                "PAGER_BASE_LINK_ENABLE" => "N",
                                "PAGER_DESC_NUMBERING" => "N",
                                "PAGER_DESC_NUMBERING_CACHE_TIME" => "0",
                                "PAGER_SHOW_ALL" => "N",
                                "PAGER_SHOW_ALWAYS" => "N",
                                "PAGER_TEMPLATE" => ".default",
                                "PAGER_TITLE" => "Товары",
                                "PAGE_ELEMENT_COUNT" => "18",
                                "PARTIAL_PRODUCT_PROPERTIES" => "N",
                                "PRICE_CODE" => array(
                                    0 => "BASE",
                                ),
                                "PRICE_VAT_INCLUDE" => "Y",
                                "PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
                                "PRODUCT_DISPLAY_MODE" => "N",
                                "PRODUCT_ID_VARIABLE" => "id",
                                "PRODUCT_PROPERTIES" => "",
                                "PRODUCT_PROPS_VARIABLE" => "prop",
                                "PRODUCT_QUANTITY_VARIABLE" => "quantity",
                                "PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",
                                "PRODUCT_SUBSCRIPTION" => "Y",
                                "PROPERTY_CODE" => array(
                                    0 => "OLD_PRICE",
                                    1 => "",
                                ),
                                "PROPERTY_CODE_MOBILE" => array(
                                    0 => "OLD_PRICE",
                                ),
                                "RCM_PROD_ID" => $_REQUEST["PRODUCT_ID"],
                                "RCM_TYPE" => "personal",
                                "SECTION_CODE" => "",
                                "SECTION_ID" => $_REQUEST["SECTION_ID"],
                                "SECTION_ID_VARIABLE" => "SECTION_ID",
                                "SECTION_URL" => "",
                                "SECTION_USER_FIELDS" => array(
                                    0 => "",
                                    1 => "",
                                ),
                                "SEF_MODE" => "Y",
                                "SET_BROWSER_TITLE" => "Y",
                                "SET_LAST_MODIFIED" => "N",
                                "SET_META_DESCRIPTION" => "Y",
                                "SET_META_KEYWORDS" => "Y",
                                "SET_STATUS_404" => "N",
                                "SET_TITLE" => "Y",
                                "SHOW_404" => "N",
                                "SHOW_ALL_WO_SECTION" => "N",
                                "SHOW_CLOSE_POPUP" => "N",
                                "SHOW_DISCOUNT_PERCENT" => "N",
                                "SHOW_FROM_SECTION" => "N",
                                "SHOW_MAX_QUANTITY" => "N",
                                "SHOW_OLD_PRICE" => "N",
                                "SHOW_PRICE_COUNT" => "1",
                                "SHOW_SLIDER" => "Y",
                                "SLIDER_INTERVAL" => "3000",
                                "SLIDER_PROGRESS" => "N",
                                "TEMPLATE_THEME" => "blue",
                                "USE_ENHANCED_ECOMMERCE" => "N",
                                "USE_MAIN_ELEMENT_SECTION" => "N",
                                "USE_PRICE_COUNT" => "N",
                                "USE_PRODUCT_QUANTITY" => "N",
                                "COMPONENT_TEMPLATE" => "main_slider",
                                "SEF_RULE" => "",
                                "SECTION_CODE_PATH" => "",
                                "CURRENCY_ID" => "RUB"
                            ),
                            false
                        ); ?>
                    </div>
                </div>
            </div>
        </div>

        <?
        /*
        ?>
        <div class="flex_container">
            <div class="shop__new-product">
                <div class="shop__title-block">
                    <div class="shop__title">Новинки</div>
                    <div class="shop__title-arrow">&#8601;</div>
                </div>
                <div class="shop__swiper-block">
                    <div class="shop__swiper">
                        <div class="shop__swiper-item">
                            <div class="shop__swiper-item-image scale">
                                <div class="shop__swiper-item-like">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/like.svg" alt="like">
                                    <img class="like-active hide" src="<?= SITE_TEMPLATE_PATH ?>/img/full_like.svg"
                                         alt="full_like">
                                </div>
                                <div class="shop__swiper-item-sale">sale</div>
                                <img src="<?= SITE_TEMPLATE_PATH ?>/img/swiper_image_01.png" alt="swiper_image_01">
                            </div>
                            <div class="shop__swiper-item-footer">
                                <div class="shop__swiper-item-txt">
                                    <div class="shop__swiper-item-name">Футболка клуба GO!</div>
                                    <div class="shop__swiper-item-price">2 500 ₽</div>
                                    <del class="shop__swiper-item-old-price">2 500 ₽</del>
                                </div>
                                <a class="shop__swiper-item-basket" href="#">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/basket.svg" alt="basket">
                                </a>
                            </div>
                        </div>
                        <div class="shop__swiper-item">
                            <div class="shop__swiper-item-image scale">
                                <div class="shop__swiper-item-like">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/like.svg" alt="like">
                                    <img class="like-active hide" src="<?= SITE_TEMPLATE_PATH ?>/img/full_like.svg"
                                         alt="full_like">
                                </div>
                                <div class="shop__swiper-item-hit">ХИТ</div>
                                <img src="<?= SITE_TEMPLATE_PATH ?>/img/swiper_image_02.png" alt="swiper_image_02">
                            </div>
                            <div class="shop__swiper-item-footer">
                                <div class="shop__swiper-item-txt">
                                    <div class="shop__swiper-item-name">Футболка клуба GO!</div>
                                    <div class="shop__swiper-item-price">2 500 ₽</div>
                                </div>
                                <a class="shop__swiper-item-basket" href="#">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/basket.svg" alt="basket">
                                </a>
                            </div>
                        </div>
                        <div class="shop__swiper-item">
                            <div class="shop__swiper-item-image scale">
                                <div class="shop__swiper-item-like">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/like.svg" alt="like">
                                    <img class="like-active hide" src="<?= SITE_TEMPLATE_PATH ?>/img/full_like.svg"
                                         alt="full_like">
                                </div>
                                <div class="shop__swiper-item-sale">sale</div>
                                <div class="shop__swiper-item-hit shop__swiper-item-hit-twice">ХИТ</div>
                                <img src="<?= SITE_TEMPLATE_PATH ?>/img/swiper_image_03.png" alt="swiper_image_03">
                            </div>
                            <div class="shop__swiper-item-footer">
                                <div class="shop__swiper-item-txt">
                                    <div class="shop__swiper-item-name">Футболка клуба GO!</div>
                                    <div class="shop__swiper-item-price">2 500 ₽</div>
                                </div>
                                <a class="shop__swiper-item-basket" href="#">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/basket.svg" alt="basket">
                                </a>
                            </div>
                        </div>
                        <div class="shop__swiper-item">
                            <div class="shop__swiper-item-image scale">
                                <div class="shop__swiper-item-like">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/like.svg" alt="like">
                                    <img class="like-active hide" src="<?= SITE_TEMPLATE_PATH ?>/img/full_like.svg"
                                         alt="full_like">
                                </div>
                                <img src="<?= SITE_TEMPLATE_PATH ?>/img/swiper_image_01.png" alt="swiper_image_01">
                            </div>
                            <div class="shop__swiper-item-footer">
                                <div class="shop__swiper-item-txt">
                                    <div class="shop__swiper-item-name">Футболка клуба GO!</div>
                                    <div class="shop__swiper-item-price">2 500 ₽</div>
                                </div>
                                <a class="shop__swiper-item-basket" href="#">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/basket.svg" alt="basket">
                                </a>
                            </div>
                        </div>
                        <div class="shop__swiper-item">
                            <div class="shop__swiper-item-image scale">
                                <div class="shop__swiper-item-like">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/like.svg" alt="like">
                                    <img class="like-active hide" src="<?= SITE_TEMPLATE_PATH ?>/img/full_like.svg"
                                         alt="full_like">
                                </div>
                                <img src="<?= SITE_TEMPLATE_PATH ?>/img/swiper_image_02.png" alt="swiper_image_02">
                            </div>
                            <div class="shop__swiper-item-footer">
                                <div class="shop__swiper-item-txt">
                                    <div class="shop__swiper-item-name">Футболка клуба GO!</div>
                                    <div class="shop__swiper-item-price">2 500 ₽</div>
                                </div>
                                <a class="shop__swiper-item-basket" href="#">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/basket.svg" alt="basket">
                                </a>
                            </div>
                        </div>
                        <div class="shop__swiper-item">
                            <div class="shop__swiper-item-image scale">
                                <div class="shop__swiper-item-like">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/like.svg" alt="like">
                                    <img class="like-active hide" src="<?= SITE_TEMPLATE_PATH ?>/img/full_like.svg"
                                         alt="full_like">
                                </div>
                                <img src="<?= SITE_TEMPLATE_PATH ?>/img/swiper_image_03.png" alt="swiper_image_03">
                            </div>
                            <div class="shop__swiper-item-footer">
                                <div class="shop__swiper-item-txt">
                                    <div class="shop__swiper-item-name">Футболка клуба GO!</div>
                                    <div class="shop__swiper-item-price">2 500 ₽</div>
                                </div>
                                <a class="shop__swiper-item-basket" href="#">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/basket.svg" alt="basket">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?
        */
        ?>

        <div class="flex_container">
            <div class="shop__categories categories">
                <div class="shop__title-block">
                    <div class="shop__title">Категории</div>
                    <div class="shop__title-arrow">↙</div>
                </div>
                <? $APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list", 
	"shop_main_section", 
	array(
		"ACTION_VARIABLE" => "action",
		"ADD_PICT_PROP" => "-",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"ADD_TO_BASKET_ACTION" => "ADD",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BACKGROUND_IMAGE" => "-",
		"BASKET_URL" => "/personal/basket.php",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "0",
		"CACHE_TYPE" => "A",
		"COMPATIBLE_MODE" => "Y",
		"CONVERT_CURRENCY" => "Y",
		"CUSTOM_FILTER" => "{\"CLASS_ID\":\"CondGroup\",\"DATA\":{\"All\":\"AND\",\"True\":\"True\"},\"CHILDREN\":[]}",
		"DETAIL_URL" => "catalog/odezhda/#ELEMENT_CODE#/",
		"DISABLE_INIT_JS_IN_COMPONENT" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_COMPARE" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_FIELD2" => "id",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_ORDER2" => "desc",
		"ENLARGE_PRODUCT" => "STRICT",
		"FILTER_NAME" => "arrFilter",
		"HIDE_NOT_AVAILABLE" => "Y",
		"HIDE_NOT_AVAILABLE_OFFERS" => "N",
		"IBLOCK_ID" => "12",
		"IBLOCK_TYPE" => "shop",
		"INCLUDE_SUBSECTIONS" => "Y",
		"LABEL_PROP" => "",
		"LAZY_LOAD" => "N",
		"LINE_ELEMENT_COUNT" => "18",
		"LOAD_ON_SCROLL" => "N",
		"MESSAGE_404" => "",
		"MESS_BTN_ADD_TO_BASKET" => "В корзину",
		"MESS_BTN_BUY" => "Купить",
		"MESS_BTN_DETAIL" => "Подробнее",
		"MESS_BTN_LAZY_LOAD" => "Показать ещё",
		"MESS_BTN_SUBSCRIBE" => "Подписаться",
		"MESS_NOT_AVAILABLE" => "Нет в наличии",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"OFFERS_CART_PROPERTIES" => "",
		"OFFERS_FIELD_CODE" => array(
			0 => "NAME",
			1 => "",
		),
		"OFFERS_LIMIT" => "0",
		"OFFERS_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"OFFERS_SORT_FIELD" => "sort",
		"OFFERS_SORT_FIELD2" => "id",
		"OFFERS_SORT_ORDER" => "asc",
		"OFFERS_SORT_ORDER2" => "desc",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "0",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Товары",
		"PAGE_ELEMENT_COUNT" => "18",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"PRICE_CODE" => array(
			0 => "BASE",
		),
		"PRICE_VAT_INCLUDE" => "Y",
		"PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
		"PRODUCT_DISPLAY_MODE" => "N",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRODUCT_PROPERTIES" => "",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",
		"PRODUCT_SUBSCRIPTION" => "Y",
		"PROPERTY_CODE" => array(
			0 => "OLD_PRICE",
			1 => "",
		),
		"PROPERTY_CODE_MOBILE" => array(
			0 => "OLD_PRICE",
		),
		"RCM_PROD_ID" => $_REQUEST["PRODUCT_ID"],
		"RCM_TYPE" => "personal",
		"SECTION_CODE" => "",
		"SECTION_ID" => $_REQUEST["SECTION_ID"],
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"SECTION_URL" => "",
		"SECTION_USER_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"SEF_MODE" => "Y",
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SHOW_ALL_WO_SECTION" => "N",
		"SHOW_CLOSE_POPUP" => "N",
		"SHOW_DISCOUNT_PERCENT" => "N",
		"SHOW_FROM_SECTION" => "N",
		"SHOW_MAX_QUANTITY" => "N",
		"SHOW_OLD_PRICE" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"SHOW_SLIDER" => "Y",
		"SLIDER_INTERVAL" => "3000",
		"SLIDER_PROGRESS" => "N",
		"TEMPLATE_THEME" => "blue",
		"USE_ENHANCED_ECOMMERCE" => "N",
		"USE_MAIN_ELEMENT_SECTION" => "N",
		"USE_PRICE_COUNT" => "N",
		"USE_PRODUCT_QUANTITY" => "N",
		"COMPONENT_TEMPLATE" => "shop_main_section",
		"SEF_RULE" => "",
		"SECTION_CODE_PATH" => "",
		"CURRENCY_ID" => "RUB",
		"COUNT_ELEMENTS" => "N",
		"COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
		"TOP_DEPTH" => "2",
		"SECTION_FIELDS" => array(
			0 => "NAME",
			1 => "PICTURE",
			2 => "",
		),
		"VIEW_MODE" => "LINE",
		"SHOW_PARENT_NAME" => "Y"
	),
	false
); ?>


                <div class="categories__list"><a class="categories__item" href="#">
                        <div class="categories__item-image scale">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/112240.jpg" alt="112240">
                        </div>
                        <div class="categories__item-footer">
                            <div class="categories__item-name">сувениры</div>
                            <div class="categories__item-arrow">→</div>
                        </div>
                    </a><a class="categories__item" href="#">
                        <div class="categories__item-image scale">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/categories_image_02.png" alt="categories_image_02">
                        </div>
                        <div class="categories__item-footer">
                            <div class="categories__item-name">аксессуары</div>
                            <div class="categories__item-arrow">→</div>
                        </div>
                    </a></div>
            </div>
        </div>
        <div class="flex_container">
            <div class="swipe_content">
                <div class="shop__swiper-block">
                    <div class="shop__swiper">
                        <div class="shop__swiper-item">
                            <div class="shop__swiper-item-image scale">
                                <div class="shop__swiper-item-like">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/like.svg" alt="like">
                                    <img class="like-active hide" src="<?= SITE_TEMPLATE_PATH ?>/img/full_like.svg"
                                         alt="full_like">
                                </div>
                                <div class="shop__swiper-item-sale">sale</div>
                                <img src="<?= SITE_TEMPLATE_PATH ?>/img/swiper_image_01.png" alt="swiper_image_01">
                            </div>
                            <div class="shop__swiper-item-footer">
                                <div class="shop__swiper-item-txt">
                                    <div class="shop__swiper-item-name">Футболка клуба GO!</div>
                                    <div class="shop__swiper-item-price">2 500 ₽</div>
                                    <del
                                            class="shop__swiper-item-old-price">2 500 ₽
                                    </del>
                                </div>
                                <a class="shop__swiper-item-basket" href="#">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/basket.svg" alt="basket">
                                </a>
                            </div>
                        </div>
                        <div class="shop__swiper-item">
                            <div class="shop__swiper-item-image scale">
                                <div class="shop__swiper-item-like">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/like.svg" alt="like">
                                    <img class="like-active hide" src="<?= SITE_TEMPLATE_PATH ?>/img/full_like.svg"
                                         alt="full_like">
                                </div>
                                <div class="shop__swiper-item-hit">ХИТ</div>
                                <img src="<?= SITE_TEMPLATE_PATH ?>/img/swiper_image_02.png" alt="swiper_image_02">
                            </div>
                            <div class="shop__swiper-item-footer">
                                <div class="shop__swiper-item-txt">
                                    <div class="shop__swiper-item-name">Футболка клуба GO!</div>
                                    <div class="shop__swiper-item-price">2 500 ₽</div>
                                </div>
                                <a class="shop__swiper-item-basket" href="#">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/basket.svg" alt="basket">
                                </a>
                            </div>
                        </div>
                        <div class="shop__swiper-item">
                            <div class="shop__swiper-item-image scale">
                                <div class="shop__swiper-item-like">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/like.svg" alt="like">
                                    <img class="like-active hide" src="<?= SITE_TEMPLATE_PATH ?>/img/full_like.svg"
                                         alt="full_like">
                                </div>
                                <div class="shop__swiper-item-sale">sale</div>
                                <div class="shop__swiper-item-hit shop__swiper-item-hit-twice">ХИТ</div>
                                <img src="<?= SITE_TEMPLATE_PATH ?>/img/swiper_image_03.png" alt="swiper_image_03">
                            </div>
                            <div class="shop__swiper-item-footer">
                                <div class="shop__swiper-item-txt">
                                    <div class="shop__swiper-item-name">Футболка клуба GO!</div>
                                    <div class="shop__swiper-item-price">2 500 ₽</div>
                                </div>
                                <a class="shop__swiper-item-basket" href="#">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/basket.svg" alt="basket">
                                </a>
                            </div>
                        </div>
                        <div class="shop__swiper-item">
                            <div class="shop__swiper-item-image scale">
                                <div class="shop__swiper-item-like">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/like.svg" alt="like">
                                    <img class="like-active hide" src="<?= SITE_TEMPLATE_PATH ?>/img/full_like.svg"
                                         alt="full_like">
                                </div>
                                <img src="<?= SITE_TEMPLATE_PATH ?>/img/swiper_image_01.png" alt="swiper_image_01">
                            </div>
                            <div class="shop__swiper-item-footer">
                                <div class="shop__swiper-item-txt">
                                    <div class="shop__swiper-item-name">Футболка клуба GO!</div>
                                    <div class="shop__swiper-item-price">2 500 ₽</div>
                                </div>
                                <a class="shop__swiper-item-basket" href="#">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/basket.svg" alt="basket">
                                </a>
                            </div>
                        </div>
                        <div class="shop__swiper-item">
                            <div class="shop__swiper-item-image scale">
                                <div class="shop__swiper-item-like">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/like.svg" alt="like">
                                    <img class="like-active hide" src="<?= SITE_TEMPLATE_PATH ?>/img/full_like.svg"
                                         alt="full_like">
                                </div>
                                <img src="<?= SITE_TEMPLATE_PATH ?>/img/swiper_image_02.png" alt="swiper_image_02">
                            </div>
                            <div class="shop__swiper-item-footer">
                                <div class="shop__swiper-item-txt">
                                    <div class="shop__swiper-item-name">Футболка клуба GO!</div>
                                    <div class="shop__swiper-item-price">2 500 ₽</div>
                                </div>
                                <a class="shop__swiper-item-basket" href="#">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/basket.svg" alt="basket">
                                </a>
                            </div>
                        </div>
                        <div class="shop__swiper-item">
                            <div class="shop__swiper-item-image scale">
                                <div class="shop__swiper-item-like">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/like.svg" alt="like">
                                    <img class="like-active hide" src="<?= SITE_TEMPLATE_PATH ?>/img/full_like.svg"
                                         alt="full_like">
                                </div>
                                <img src="<?= SITE_TEMPLATE_PATH ?>/img/swiper_image_03.png" alt="swiper_image_03">
                            </div>
                            <div class="shop__swiper-item-footer">
                                <div class="shop__swiper-item-txt">
                                    <div class="shop__swiper-item-name">Футболка клуба GO!</div>
                                    <div class="shop__swiper-item-price">2 500 ₽</div>
                                </div>
                                <a class="shop__swiper-item-basket" href="#">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/basket.svg" alt="basket"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex_container">
            <div class="categories__list categories">
                <a class="categories__item" href="#">
                    <div class="categories__item-image scale">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/categories_image_03.png" alt="categories_image_03">
                    </div>
                    <div class="categories__item-footer">
                        <div class="categories__item-name">сувениры</div>
                        <div class="categories__item-arrow">→</div>
                    </div>
                </a>
                <a class="categories__item" href="#">
                    <div class="categories__item-image scale">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/categories_image_04.png" alt="categories_image_04">
                    </div>
                    <div class="categories__item-footer">
                        <div class="categories__item-name">аксессуары</div>
                        <div class="categories__item-arrow">→</div>
                    </div>
                </a>
            </div>
        </div>
        <div class="flex_container">
            <div class="swipe_content">
                <div class="shop__swiper-block">
                    <div class="shop__swiper">
                        <div class="shop__swiper-item">
                            <div class="shop__swiper-item-image scale">
                                <div class="shop__swiper-item-like">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/like.svg" alt="like">
                                    <img class="like-active hide" src="<?= SITE_TEMPLATE_PATH ?>/img/full_like.svg"
                                         alt="full_like">
                                </div>
                                <div class="shop__swiper-item-sale">sale</div>
                                <img src="<?= SITE_TEMPLATE_PATH ?>/img/swiper_image_01.png" alt="swiper_image_01">
                            </div>
                            <div class="shop__swiper-item-footer">
                                <div class="shop__swiper-item-txt">
                                    <div class="shop__swiper-item-name">Футболка клуба GO!</div>
                                    <div class="shop__swiper-item-price">2 500 ₽</div>
                                    <del class="shop__swiper-item-old-price">2 500 ₽</del>
                                </div>
                                <a class="shop__swiper-item-basket" href="#">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/basket.svg" alt="basket">
                                </a>
                            </div>
                        </div>
                        <div class="shop__swiper-item">
                            <div class="shop__swiper-item-image scale">
                                <div class="shop__swiper-item-like">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/like.svg" alt="like">
                                    <img class="like-active hide" src="<?= SITE_TEMPLATE_PATH ?>/img/full_like.svg"
                                         alt="full_like">
                                </div>
                                <div class="shop__swiper-item-hit">ХИТ</div>
                                <img src="<?= SITE_TEMPLATE_PATH ?>/img/swiper_image_02.png" alt="swiper_image_02">
                            </div>
                            <div class="shop__swiper-item-footer">
                                <div class="shop__swiper-item-txt">
                                    <div class="shop__swiper-item-name">Футболка клуба GO!</div>
                                    <div class="shop__swiper-item-price">2 500 ₽</div>
                                </div>
                                <a class="shop__swiper-item-basket" href="#">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/basket.svg" alt="basket">
                                </a>
                            </div>
                        </div>
                        <div class="shop__swiper-item">
                            <div class="shop__swiper-item-image scale">
                                <div class="shop__swiper-item-like">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/like.svg" alt="like">
                                    <img class="like-active hide" src="<?= SITE_TEMPLATE_PATH ?>/img/full_like.svg"
                                         alt="full_like">
                                </div>
                                <div class="shop__swiper-item-sale">sale</div>
                                <div class="shop__swiper-item-hit shop__swiper-item-hit-twice">ХИТ</div>
                                <img src="<?= SITE_TEMPLATE_PATH ?>/img/swiper_image_03.png" alt="swiper_image_03">
                            </div>
                            <div class="shop__swiper-item-footer">
                                <div class="shop__swiper-item-txt">
                                    <div class="shop__swiper-item-name">Футболка клуба GO!</div>
                                    <div class="shop__swiper-item-price">2 500 ₽</div>
                                </div>
                                <a class="shop__swiper-item-basket" href="#">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/basket.svg" alt="basket">
                                </a>
                            </div>
                        </div>
                        <div class="shop__swiper-item">
                            <div class="shop__swiper-item-image scale">
                                <div class="shop__swiper-item-like">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/like.svg" alt="like">
                                    <img class="like-active hide" src="<?= SITE_TEMPLATE_PATH ?>/img/full_like.svg"
                                         alt="full_like">
                                </div>
                                <img src="<?= SITE_TEMPLATE_PATH ?>/img/swiper_image_01.png" alt="swiper_image_01">
                            </div>
                            <div class="shop__swiper-item-footer">
                                <div class="shop__swiper-item-txt">
                                    <div class="shop__swiper-item-name">Футболка клуба GO!</div>
                                    <div class="shop__swiper-item-price">2 500 ₽</div>
                                </div>
                                <a class="shop__swiper-item-basket" href="#">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/basket.svg" alt="basket">
                                </a>
                            </div>
                        </div>
                        <div class="shop__swiper-item">
                            <div class="shop__swiper-item-image scale">
                                <div class="shop__swiper-item-like">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/like.svg" alt="like">
                                    <img class="like-active hide" src="<?= SITE_TEMPLATE_PATH ?>/img/full_like.svg"
                                         alt="full_like">
                                </div>
                                <img src="<?= SITE_TEMPLATE_PATH ?>/img/swiper_image_02.png" alt="swiper_image_02">
                            </div>
                            <div class="shop__swiper-item-footer">
                                <div class="shop__swiper-item-txt">
                                    <div class="shop__swiper-item-name">Футболка клуба GO!</div>
                                    <div class="shop__swiper-item-price">2 500 ₽</div>
                                </div>
                                <a class="shop__swiper-item-basket" href="#">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/basket.svg" alt="basket"></a>
                            </div>
                        </div>
                        <div class="shop__swiper-item">
                            <div class="shop__swiper-item-image scale">
                                <div class="shop__swiper-item-like">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/like.svg" alt="like">
                                    <img class="like-active hide" src="<?= SITE_TEMPLATE_PATH ?>/img/full_like.svg"
                                         alt="full_like">
                                </div>
                                <img src="<?= SITE_TEMPLATE_PATH ?>/img/swiper_image_03.png" alt="swiper_image_03">
                            </div>
                            <div class="shop__swiper-item-footer">
                                <div class="shop__swiper-item-txt">
                                    <div class="shop__swiper-item-name">Футболка клуба GO!</div>
                                    <div class="shop__swiper-item-price">2 500 ₽</div>
                                </div>
                                <a class="shop__swiper-item-basket" href="#">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/basket.svg" alt="basket">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>