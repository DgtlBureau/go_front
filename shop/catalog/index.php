<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Каталог магазина");


$asset = \Bitrix\Main\Page\Asset::getInstance();

$asset->addCss(SITE_TEMPLATE_PATH . '/assets/go_shop_build/ShopCatalog/main.css');
$asset->addJs(SITE_TEMPLATE_PATH . '/assets/go_shop_build/ShopCatalog/index.js');
$asset->addCss(SITE_TEMPLATE_PATH . '/assets/slider/slider-styles.css');
$asset->addJs(SITE_TEMPLATE_PATH . '/assets/slider/index.js');
$asset->addJs(SITE_TEMPLATE_PATH . '/assets/slider/slider_touch.js');

?>

<? $APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    array(
        "AREA_FILE_SHOW" => "file",
        "AREA_FILE_SUFFIX" => "inc",
        "EDIT_TEMPLATE" => "standard.php",
        "PATH" => "top_fav_and_basket.php"
    )
); ?>


    <main class="shop">

<?$APPLICATION->IncludeComponent(
	"bitrix:catalog",
	"catalog",
	array(
		"ACTION_VARIABLE" => "action",
		"ADD_ELEMENT_CHAIN" => "N",
		"ADD_PICT_PROP" => "MORE_PHOTO",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "Y",
		"AJAX_OPTION_HISTORY" => "Y",
		"AJAX_OPTION_JUMP" => "Y",
		"AJAX_OPTION_STYLE" => "Y",
		"BASKET_URL" => "/basket/",
		"BIG_DATA_RCM_TYPE" => "any_similar",
		"CACHE_FILTER" => "Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COMMON_ADD_TO_BASKET_ACTION" => "ADD",
		"COMMON_SHOW_CLOSE_POPUP" => "Y",
		"COMPATIBLE_MODE" => "Y",
		"CONVERT_CURRENCY" => "N",
		"DETAIL_ADD_DETAIL_TO_SLIDER" => "N",
		"DETAIL_ADD_TO_BASKET_ACTION" => array(
			0 => "ADD",
		),
		"DETAIL_ADD_TO_BASKET_ACTION_PRIMARY" => array(
		),
		"DETAIL_BACKGROUND_IMAGE" => "-",
		"DETAIL_BRAND_USE" => "N",
		"DETAIL_BROWSER_TITLE" => "-",
		"DETAIL_CHECK_SECTION_ID_VARIABLE" => "N",
		"DETAIL_DETAIL_PICTURE_MODE" => array(
			0 => "POPUP",
		),
		"DETAIL_DISPLAY_NAME" => "Y",
		"DETAIL_DISPLAY_PREVIEW_TEXT_MODE" => "E",
		"DETAIL_IMAGE_RESOLUTION" => "16by9",
		"DETAIL_MAIN_BLOCK_OFFERS_PROPERTY_CODE" => array(
		),
		"DETAIL_MAIN_BLOCK_PROPERTY_CODE" => "",
		"DETAIL_META_DESCRIPTION" => "-",
		"DETAIL_META_KEYWORDS" => "-",
		"DETAIL_OFFERS_FIELD_CODE" => array(
			0 => "NAME",
			1 => "",
		),
		"DETAIL_OFFERS_PROPERTY_CODE" => array(
			0 => "SIZE",
			1 => "",
		),
		"DETAIL_PRODUCT_INFO_BLOCK_ORDER" => "sku,props",
		"DETAIL_PRODUCT_PAY_BLOCK_ORDER" => "quantity,rating,price,priceRanges,quantityLimit,buttons",
		"DETAIL_PROPERTY_CODE" => array(
			0 => "ARTICLE",
			1 => "COLLECTION",
			2 => "HIT",
			3 => "SECTION",
			4 => "STRUCTURE",
			5 => "OLD_PRICE",
			6 => "PRODUCT",
			7 => "",
		),
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DETAIL_SET_VIEWED_IN_COMPONENT" => "N",
		"DETAIL_SHOW_MAX_QUANTITY" => "N",
		"DETAIL_SHOW_POPULAR" => "Y",
		"DETAIL_SHOW_SLIDER" => "N",
		"DETAIL_SHOW_VIEWED" => "Y",
		"DETAIL_SLIDER_INTERVAL" => "5000",
		"DETAIL_SLIDER_PROGRESS" => "N",
		"DETAIL_STRICT_SECTION_CHECK" => "Y",
		"DETAIL_USE_COMMENTS" => "N",
		"DETAIL_USE_VOTE_RATING" => "N",
		"DISABLE_INIT_JS_IN_COMPONENT" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_FIELD2" => "id",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_ORDER2" => "desc",
		"FILTER_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_HIDE_ON_MOBILE" => "Y",
		"FILTER_NAME" => "",
		"FILTER_OFFERS_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_OFFERS_PROPERTY_CODE" => array(
			0 => "SIZE",
			1 => "",
		),
		"FILTER_PRICE_CODE" => array(
			0 => "BASE",
		),
		"FILTER_PROPERTY_CODE" => array(
			0 => "COLLECTION",
			1 => "HIT",
			2 => "SECTION",
			3 => "OLD_PRICE",
			4 => "PRODUCT",
			5 => "",
		),
		"FILTER_VIEW_MODE" => "VERTICAL",
		"GIFTS_DETAIL_BLOCK_TITLE" => "Выберите один из подарков",
		"GIFTS_DETAIL_HIDE_BLOCK_TITLE" => "N",
		"GIFTS_DETAIL_PAGE_ELEMENT_COUNT" => "4",
		"GIFTS_DETAIL_TEXT_LABEL_GIFT" => "Подарок",
		"GIFTS_MAIN_PRODUCT_DETAIL_BLOCK_TITLE" => "Выберите один из товаров, чтобы получить подарок",
		"GIFTS_MAIN_PRODUCT_DETAIL_HIDE_BLOCK_TITLE" => "N",
		"GIFTS_MAIN_PRODUCT_DETAIL_PAGE_ELEMENT_COUNT" => "4",
		"GIFTS_MESS_BTN_BUY" => "Выбрать",
		"GIFTS_SECTION_LIST_BLOCK_TITLE" => "Подарки к товарам этого раздела",
		"GIFTS_SECTION_LIST_HIDE_BLOCK_TITLE" => "N",
		"GIFTS_SECTION_LIST_PAGE_ELEMENT_COUNT" => "4",
		"GIFTS_SECTION_LIST_TEXT_LABEL_GIFT" => "Подарок",
		"GIFTS_SHOW_DISCOUNT_PERCENT" => "Y",
		"GIFTS_SHOW_IMAGE" => "Y",
		"GIFTS_SHOW_NAME" => "Y",
		"GIFTS_SHOW_OLD_PRICE" => "Y",
		"HIDE_NOT_AVAILABLE" => "N",
		"HIDE_NOT_AVAILABLE_OFFERS" => "N",
		"IBLOCK_ID" => "12",
		"IBLOCK_TYPE" => "shop",
		"INCLUDE_SUBSECTIONS" => "Y",
		"INSTANT_RELOAD" => "Y",
		"LABEL_PROP" => array(
		),
		"LAZY_LOAD" => "Y",
		"LINE_ELEMENT_COUNT" => "3",
		"LINK_ELEMENTS_URL" => "link.php?PARENT_ELEMENT_ID=#ELEMENT_ID#",
		"LINK_IBLOCK_ID" => "",
		"LINK_IBLOCK_TYPE" => "",
		"LINK_PROPERTY_SID" => "",
		"LIST_BROWSER_TITLE" => "-",
		"LIST_ENLARGE_PRODUCT" => "STRICT",
		"LIST_META_DESCRIPTION" => "-",
		"LIST_META_KEYWORDS" => "-",
		"LIST_OFFERS_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"LIST_OFFERS_LIMIT" => "5",
		"LIST_OFFERS_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"LIST_PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
		"LIST_PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'4','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'4','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'4','BIG_DATA':false}]",
		"LIST_PROPERTY_CODE" => array(
			0 => "COLLECTION",
			1 => "HIT",
			2 => "SECTION",
			3 => "OLD_PRICE",
			4 => "PRODUCT",
			5 => "",
		),
		"LIST_PROPERTY_CODE_MOBILE" => array(
		),
		"LIST_SHOW_SLIDER" => "N",
		"LIST_SLIDER_INTERVAL" => "3000",
		"LIST_SLIDER_PROGRESS" => "N",
		"LOAD_ON_SCROLL" => "N",
		"MESSAGE_404" => "",
		"MESS_BTN_ADD_TO_BASKET" => "В корзину",
		"MESS_BTN_BUY" => "Купить",
		"MESS_BTN_COMPARE" => "Сравнение",
		"MESS_BTN_DETAIL" => "Подробнее",
		"MESS_BTN_LAZY_LOAD" => "Показать ещё",
		"MESS_BTN_SUBSCRIBE" => "Подписаться",
		"MESS_COMMENTS_TAB" => "Комментарии",
		"MESS_DESCRIPTION_TAB" => "Описание",
		"MESS_NOT_AVAILABLE" => "Нет в наличии",
		"MESS_PRICE_RANGES_TITLE" => "Цены",
		"MESS_PROPERTIES_TAB" => "Характеристики",
		"OFFERS_CART_PROPERTIES" => array(
			0 => "SIZE",
		),
		"OFFERS_SORT_FIELD" => "sort",
		"OFFERS_SORT_FIELD2" => "id",
		"OFFERS_SORT_ORDER" => "asc",
		"OFFERS_SORT_ORDER2" => "desc",
		"OFFER_ADD_PICT_PROP" => "-",
		"OFFER_TREE_PROPS" => array(
			0 => "SIZE",
		),
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Товары",
		"PAGE_ELEMENT_COUNT" => "24",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"PRICE_CODE" => array(
			0 => "BASE",
		),
		"PRICE_VAT_INCLUDE" => "Y",
		"PRICE_VAT_SHOW_VALUE" => "N",
		"PRODUCT_DISPLAY_MODE" => "Y",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRODUCT_PROPERTIES" => "",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"PRODUCT_SUBSCRIPTION" => "Y",
		"SEARCH_CHECK_DATES" => "Y",
		"SEARCH_NO_WORD_LOGIC" => "Y",
		"SEARCH_PAGE_RESULT_COUNT" => "50",
		"SEARCH_RESTART" => "N",
		"SEARCH_USE_LANGUAGE_GUESS" => "Y",
		"SEARCH_USE_SEARCH_RESULT_ORDER" => "N",
		"SECTIONS_SHOW_PARENT_NAME" => "N",
		"SECTIONS_VIEW_MODE" => "LIST",
		"SECTION_ADD_TO_BASKET_ACTION" => "ADD",
		"SECTION_BACKGROUND_IMAGE" => "-",
		"SECTION_COUNT_ELEMENTS" => "N",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"SECTION_TOP_DEPTH" => "2",
		"SEF_FOLDER" => "/shop/catalog/",
		"SEF_MODE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_STATUS_404" => "Y",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SHOW_DEACTIVATED" => "N",
		"SHOW_DISCOUNT_PERCENT" => "N",
		"SHOW_MAX_QUANTITY" => "N",
		"SHOW_OLD_PRICE" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"SHOW_SKU_DESCRIPTION" => "N",
		"SHOW_TOP_ELEMENTS" => "Y",
		"SIDEBAR_DETAIL_POSITION" => "right",
		"SIDEBAR_DETAIL_SHOW" => "N",
		"SIDEBAR_PATH" => "",
		"SIDEBAR_SECTION_POSITION" => "right",
		"SIDEBAR_SECTION_SHOW" => "N",
		"TEMPLATE_THEME" => "",
		"TOP_ADD_TO_BASKET_ACTION" => "ADD",
		"TOP_ELEMENT_COUNT" => "8",
		"TOP_ELEMENT_SORT_FIELD" => "sort",
		"TOP_ELEMENT_SORT_FIELD2" => "id",
		"TOP_ELEMENT_SORT_ORDER" => "asc",
		"TOP_ELEMENT_SORT_ORDER2" => "desc",
		"TOP_ENLARGE_PRODUCT" => "STRICT",
		"TOP_LINE_ELEMENT_COUNT" => "3",
		"TOP_OFFERS_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"TOP_OFFERS_LIMIT" => "5",
		"TOP_OFFERS_PROPERTY_CODE" => array(
			0 => "SIZE",
			1 => "",
		),
		"TOP_PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
		"TOP_PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false}]",
		"TOP_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"TOP_PROPERTY_CODE_MOBILE" => array(
		),
		"TOP_ROTATE_TIMER" => "30",
		"TOP_SHOW_SLIDER" => "Y",
		"TOP_SLIDER_INTERVAL" => "3000",
		"TOP_SLIDER_PROGRESS" => "N",
		"TOP_VIEW_MODE" => "SECTION",
		"USER_CONSENT" => "N",
		"USER_CONSENT_ID" => "0",
		"USER_CONSENT_IS_CHECKED" => "Y",
		"USER_CONSENT_IS_LOADED" => "N",
		"USE_ALSO_BUY" => "N",
		"USE_BIG_DATA" => "N",
		"USE_COMMON_SETTINGS_BASKET_POPUP" => "N",
		"USE_COMPARE" => "N",
		"USE_ELEMENT_COUNTER" => "Y",
		"USE_ENHANCED_ECOMMERCE" => "N",
		"USE_FILTER" => "Y",
		"USE_GIFTS_DETAIL" => "N",
		"USE_GIFTS_MAIN_PR_SECTION_LIST" => "N",
		"USE_GIFTS_SECTION" => "N",
		"USE_MAIN_ELEMENT_SECTION" => "Y",
		"USE_PRICE_COUNT" => "N",
		"USE_PRODUCT_QUANTITY" => "N",
		"USE_REVIEW" => "N",
		"USE_SALE_BESTSELLERS" => "N",
		"USE_STORE" => "N",
		"COMPONENT_TEMPLATE" => "catalog",
		"SEF_URL_TEMPLATES" => array(
			"sections" => "",
			"section" => "#SECTION_CODE#/",
			"element" => "#SECTION_CODE#/#ELEMENT_CODE#/",
			"compare" => "compare.php?action=#ACTION_CODE#",
			"smart_filter" => "#SECTION_ID#/filter/#SMART_FILTER_PATH#/apply/",
		),
		"VARIABLE_ALIASES" => array(
			"compare" => array(
				"ACTION_CODE" => "action",
			),
		)
	),
	false
);?>
    </main>


<?php

?>
<!--<div class="catalog__modal modal hide" id="search-modal">-->
<!--    <div class="modal__content">-->
<!--        <div class="catalog__title-block">-->
<!--            <div class="catalog__title">Поиск</div>-->
<!--            <div class="modal__close">-->
<!--                <div class="modal__close-stick"></div>-->
<!--                <div class="modal__close-stick"></div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <form class="catalog__serch-form">-->
<!--            <div class="input-block">-->
<!--                <input class="modal-search-input" type="search" placeholder="Поиск">-->
<!--                <div class="input-clear modal-search-input-clear">x</div>-->
<!--            </div>-->
<!--        </form>-->
<!--    </div>-->
<!--</div>-->
<!--<div class="catalog__modal modal hide" id="filters-modal">-->
<!--    <div class="modal__content">-->
<!--        <div class="catalog__title-block">-->
<!--            <div class="catalog__title">Фильтры</div>-->
<!--            <div class="modal__close">-->
<!--                <div class="modal__close-stick"></div>-->
<!--                <div class="modal__close-stick"></div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="catalog__filters-form filters-form_mobile">-->
<!--            <div class="catalog__filters_products">-->
<!--                <div class="catalog__filters_products-category">-->
<!--                    <div class="catalog__filters_subtitle">Товары</div>-->
<!--                    <div class="catalog__filters_checkbox">-->
<!--                        <input type="checkbox" name="all_mobile" id="all_mobile">-->
<!--                        <label for="all_mobile">Все</label>-->
<!--                    </div>-->
<!--                    <div class="catalog__filters_checkbox">-->
<!--                        <input type="checkbox" name="sweatshirts_mobile" id="sweatshirts_mobile">-->
<!--                        <label for="sweatshirts_mobile">Кофты</label>-->
<!--                    </div>-->
<!--                    <div class="catalog__filters_checkbox">-->
<!--                        <input type="checkbox" name="t-shirts_mobile" id="t-shirts_mobile">-->
<!--                        <label for="t-shirts_mobile">Футболки</label>-->
<!--                    </div>-->
<!--                    <div class="catalog__filters_checkbox">-->
<!--                        <input type="checkbox" name="hoodies_mobile" id="hoodies_mobile">-->
<!--                        <label for="hoodies_mobile">Толстовки</label>-->
<!--                    </div>-->
<!--                    <div class="catalog__filters_checkbox">-->
<!--                        <input type="checkbox" name="caps_mobile" id="caps_mobile">-->
<!--                        <label for="caps_mobile">Кепки</label>-->
<!--                    </div>-->
<!--                    <div class="catalog__filters_checkbox">-->
<!--                        <input type="checkbox" name="souvenirs_mobile" id="souvenirs_mobile">-->
<!--                        <label for="souvenirs_mobile">Сувениры</label>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="catalog__filters_products-category">-->
<!--                    <div class="catalog__filters_subtitle">Раздел</div>-->
<!--                    <div class="catalog__filters_checkbox">-->
<!--                        <input type="checkbox" name="male_mobile" id="male_mobile">-->
<!--                        <label for="male_mobile">Мужчины</label>-->
<!--                    </div>-->
<!--                    <div class="catalog__filters_checkbox">-->
<!--                        <input type="checkbox" name="female_mobile" id="female_mobile">-->
<!--                        <label for="female_mobile">Женщины</label>-->
<!--                    </div>-->
<!--                    <div class="catalog__filters_checkbox">-->
<!--                        <input type="checkbox" name="children_mobile" id="children_mobile">-->
<!--                        <label for="children_mobile">Дети</label>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="catalog__filters_products-category">-->
<!--                    <div class="catalog__filters_subtitle">Цена</div>-->
<!--                    <div class="catalog__filters_slider_values">-->
<!--                        <span class="slider-range_min_mobile">0</span>-->
<!--                        <span class="slider-range_max_mobile">0</span>-->
<!--                    </div>-->
<!--                    <div id="slider-range_mobile"></div>-->
<!--                </div>-->
<!--                <div class="catalog__filters_products-category">-->
<!--                    <div class="catalog__filters_subtitle">Коллекция</div>-->
<!--                    <div class="catalog__filters_checkbox">-->
<!--                        <input type="checkbox" name="collection_go_mobile" id="collection_go_mobile">-->
<!--                        <label for="collection_go_mobile">GO</label>-->
<!--                    </div>-->
<!--                    <div class="catalog__filters_checkbox">-->
<!--                        <input type="checkbox" name="collection_t-shirts_mobile" id="collection_t-shirts_mobile">-->
<!--                        <label for="collection_t-shirts_mobile">Футболки</label>-->
<!--                    </div>-->
<!--                    <div class="catalog__filters_checkbox">-->
<!--                        <input type="checkbox" name="collection_sweatshirts_mobile" id="collection_sweatshirts_mobile">-->
<!--                        <label for="collection_sweatshirts_mobile">Кофты</label>-->
<!--                    </div>-->
<!--                    <div class="catalog__filters_checkbox">-->
<!--                        <input type="checkbox" name="collection_summer_mobile" id="collection_summer_mobile">-->
<!--                        <label for="collection_summer_mobile">Летняя</label>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="action__btn">-->
<!--                <div class="modal__btn" id="modal-apply-btn-filters">-->
<!--                    <div class="modal__btn-txt">Применить</div>-->
<!--                </div>-->
<!--                <div class="modal__btn modal-reset-btn" id="modal-reset-btn-filters">-->
<!--                    <div class="modal__btn-txt">Сбросить</div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!--<div class="catalog__modal modal hide" id="gender-modal">-->
<!--    <div class="modal__content">-->
<!--        <div class="catalog__title-block">-->
<!--            <div class="catalog__title">Разделы</div>-->
<!--            <div class="modal__close">-->
<!--                <div class="modal__close-stick"></div>-->
<!--                <div class="modal__close-stick"></div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="modal__btn close-btn">-->
<!--            <div class="modal__btn-txt">Закрыть</div>-->
<!--        </div>-->
<!--        <div class="modal__btn hide" id="modal-apply-btn-gender">-->
<!--            <div class="modal__btn-txt">Применить</div>-->
<!--        </div>-->
<!--        <div class="modal__btn modal-reset-btn hide" id="modal-reset-btn-gender">-->
<!--            <div class="modal__btn-txt">Сбросить</div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!--<div class="catalog__modal modal hide" id="price-modal">-->
<!--    <div class="modal__content">-->
<!--        <div class="catalog__title-block">-->
<!--            <div class="catalog__title">Цена</div>-->
<!--            <div class="modal__close">-->
<!--                <div class="modal__close-stick"></div>-->
<!--                <div class="modal__close-stick"></div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="modal__btn close-btn">-->
<!--            <div class="modal__btn-txt">Закрыть</div>-->
<!--        </div>-->
<!--        <div class="modal__btn hide" id="modal-apply-btn-price">-->
<!--            <div class="modal__btn-txt">Применить</div>-->
<!--        </div>-->
<!--        <div class="modal__btn modal-reset-btn hide" id="modal-reset-btn-price">-->
<!--            <div class="modal__btn-txt">Сбросить</div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!--<div class="catalog__modal modal hide" id="collection-modal">-->
<!--    <div class="modal__content">-->
<!--        <div class="catalog__title-block">-->
<!--            <div class="catalog__title">Коллекции</div>-->
<!--            <div class="modal__close">-->
<!--                <div class="modal__close-stick"></div>-->
<!--                <div class="modal__close-stick"></div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="modal__btn close-btn">-->
<!--            <div class="modal__btn-txt">Закрыть</div>-->
<!--        </div>-->
<!--        <div class="modal__btn hide" id="modal-apply-btn-collection">-->
<!--            <div class="modal__btn-txt">Применить</div>-->
<!--        </div>-->
<!--        <div class="modal__btn modal-reset-btn hide" id="modal-reset-btn-collection">-->
<!--            <div class="modal__btn-txt">Сбросить</div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!--<div class="catalog__modal modal hide" id="category-modal">-->
<!--    <div class="modal__content">-->
<!--        <div class="catalog__title-block">-->
<!--            <div class="catalog__title">Товары</div>-->
<!--            <div class="modal__close">-->
<!--                <div class="modal__close-stick"></div>-->
<!--                <div class="modal__close-stick"></div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="modal__btn close-btn">-->
<!--            <div class="modal__btn-txt">Закрыть</div>-->
<!--        </div>-->
<!--        <div class="modal__btn hide" id="modal-apply-btn-category">-->
<!--            <div class="modal__btn-txt">Применить</div>-->
<!--        </div>-->
<!--        <div class="modal__btn modal-reset-btn hide" id="modal-reset-btn-category">-->
<!--            <div class="modal__btn-txt">Сбросить</div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!---->
<!--<main class="shop">-->
<!--    <div class="shop__catalog catalog">-->
<!--        <div class="catalog__filters">-->
<!--            <div class="catalog__title-block">-->
<!--                <div class="catalog__title">Фильтры</div>-->
<!--            </div>-->
<!--            <div class="catalog__filters-form">-->
<!--                <div class="catalog__filters_products">-->
<!--                    <div class="catalog__filters_products-category">-->
<!--                        <div class="catalog__filters_subtitle">Товары</div>-->
<!--                        <div class="catalog__filters_checkbox">-->
<!--                            <input type="checkbox" name="all" id="all">-->
<!--                            <label for="all">Все</label>-->
<!--                        </div>-->
<!--                        <div class="catalog__filters_checkbox">-->
<!--                            <input type="checkbox" name="sweatshirts" id="sweatshirts">-->
<!--                            <label for="sweatshirts">Кофты</label>-->
<!--                        </div>-->
<!--                        <div class="catalog__filters_checkbox">-->
<!--                            <input type="checkbox" name="t-shirts" id="t-shirts">-->
<!--                            <label for="t-shirts">Футболки</label>-->
<!--                        </div>-->
<!--                        <div class="catalog__filters_checkbox">-->
<!--                            <input type="checkbox" name="hoodies" id="hoodies">-->
<!--                            <label for="hoodies">Толстовки</label>-->
<!--                        </div>-->
<!--                        <div class="catalog__filters_checkbox">-->
<!--                            <input type="checkbox" name="caps" id="caps">-->
<!--                            <label for="caps">Кепки</label>-->
<!--                        </div>-->
<!--                        <div class="catalog__filters_checkbox">-->
<!--                            <input type="checkbox" name="souvenirs" id="souvenirs">-->
<!--                            <label for="souvenirs">Сувениры</label>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="catalog__filters_products-category">-->
<!--                        <div class="catalog__filters_subtitle">Раздел</div>-->
<!--                        <div class="catalog__filters_checkbox">-->
<!--                            <input type="checkbox" name="male" id="male">-->
<!--                            <label for="male">Мужчины</label>-->
<!--                        </div>-->
<!--                        <div class="catalog__filters_checkbox">-->
<!--                            <input type="checkbox" name="female" id="female">-->
<!--                            <label for="female">Женщины</label>-->
<!--                        </div>-->
<!--                        <div class="catalog__filters_checkbox">-->
<!--                            <input type="checkbox" name="children" id="children">-->
<!--                            <label for="children">Дети</label>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="catalog__filters_products-category">-->
<!--                        <div class="catalog__filters_subtitle">Цена</div>-->
<!--                        <div class="catalog__filters_slider_values">-->
<!--                            <span class="slider-range_min">0</span>-->
<!--                            <span class="slider-range_max">0</span>-->
<!--                        </div>-->
<!--                        <div id="slider-range"></div>-->
<!--                    </div>-->
<!--                    <div class="catalog__filters_products-category">-->
<!--                        <div class="catalog__filters_subtitle">Коллекция</div>-->
<!--                        <div class="catalog__filters_checkbox">-->
<!--                            <input type="checkbox" name="collection_go" id="collection_go">-->
<!--                            <label for="collection_go">GO</label>-->
<!--                        </div>-->
<!--                        <div class="catalog__filters_checkbox">-->
<!--                            <input type="checkbox" name="collection_t-shirts" id="collection_t-shirts">-->
<!--                            <label for="collection_t-shirts">Футболки</label>-->
<!--                        </div>-->
<!--                        <div class="catalog__filters_checkbox">-->
<!--                            <input type="checkbox" name="collection_sweatshirts" id="collection_sweatshirts">-->
<!--                            <label for="collection_sweatshirts">Кофты</label>-->
<!--                        </div>-->
<!--                        <div class="catalog__filters_checkbox">-->
<!--                            <input type="checkbox" name="collection_summer" id="collection_summer">-->
<!--                            <label for="collection_summer">Летняя</label>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="catalog__products products"><a class="go-back-bnt" href="#">-->
<!--                <div class="go-back-arrow">←</div>-->
<!--                <div class="go-back-txt">В магазин</div>-->
<!--            </a>-->
<!--            <div class="catalog__title-block">-->
<!--                <div class="catalog__title">Товары</div>-->
<!--                <div class="catalog__mobile-elements-block">-->
<!--                    <form class="catalog__serch-form">-->
<!--                        <div class="input-block">-->
<!--                            <input class="modal-search-input" type="search" placeholder="Поиск">-->
<!--                            <div class="input-clear modal-search-input-clear">x</div>-->
<!--                        </div>-->
<!--                    </form>-->
<!--                    <div class="catalog__serch-mobail">-->
<!--                        <img src="--><?//=SITE_TEMPLATE_PATH?><!--/img/serch-mobail.svg" alt="serch-mobail">-->
<!--                    </div>-->
<!--                    <div class="catalog__filters-mobail">-->
<!--                        <img src="--><?//=SITE_TEMPLATE_PATH?><!--/img/mobail-filters.svg" alt="mobail-filters">-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <ul class="catalog__filters-mobail-nav-list">-->
<!--                <li class="catalog__filters-mobail-item" id="gender-filter">-->
<!--                    Раздел-->
<!--                    <div class="catalog__filters-mobail-item-close hide">x</div>-->
<!--                </li>-->
<!--                <li class="catalog__filters-mobail-item" id="price-filter">-->
<!--                    Цена-->
<!--                    <div class="catalog__filters-mobail-item-close hide">x</div>-->
<!--                </li>-->
<!--                <li class="catalog__filters-mobail-item" id="collection-filter">-->
<!--                    Коллекции-->
<!--                    <div class="catalog__filters-mobail-item-close hide">x</div>-->
<!--                </li>-->
<!--                <li class="catalog__filters-mobail-item" id="category-filter">-->
<!--                    Толстовки-->
<!--                    <div class="catalog__filters-mobail-item-close hide">x</div>-->
<!--                </li>-->
<!--                <li class="catalog__filters-mobail-item" id="category-filter">-->
<!--                    Толстовки-->
<!--                    <div class="catalog__filters-mobail-item-close hide">x</div>-->
<!--                </li>-->
<!--                <li class="catalog__filters-mobail-item" id="category-filter">-->
<!--                    Толстовки-->
<!--                    <div class="catalog__filters-mobail-item-close hide">x</div>-->
<!--                </li>-->
<!--            </ul>-->
<!--            <div class="products__list"><a class="products__item" href="#">-->
<!--                    <div class="products__item-image scale">-->
<!--                        <div class="products__item-like">-->
<!--                            <img src="--><?//=SITE_TEMPLATE_PATH?><!--/img/like.svg" alt="like">-->
<!--                            <img class="like-active hide" src="--><?//=SITE_TEMPLATE_PATH?><!--/img/full_like.svg" alt="full_like">-->
<!--                        </div>-->
<!--                        <div class="products__item-sale">sale</div>-->
<!--                        <img src="--><?//=SITE_TEMPLATE_PATH?><!--/img/swiper_image_01.png" alt="swiper_image_01">-->
<!--                    </div>-->
<!--                    <div class="products__item-footer">-->
<!--                        <div class="products__item-txt">-->
<!--                            <div class="products__item-name">Футболка клуба GO!</div>-->
<!--                            <div class="products__item-price_block">-->
<!--                                <div class="products__item-price">2 500 ₽</div>-->
<!--                                <del class="products__item-old-price">2 500 ₽</del>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="products__item-basket">-->
<!--                            <img src="--><?//=SITE_TEMPLATE_PATH?><!--/img/basket.svg" alt="basket">-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </a><a class="products__item" href="#">-->
<!--                    <div class="products__item-image scale">-->
<!--                        <div class="products__item-like">-->
<!--                            <img src="--><?//=SITE_TEMPLATE_PATH?><!--/img/like.svg" alt="like">-->
<!--                            <img class="like-active hide" src="--><?//=SITE_TEMPLATE_PATH?><!--/img/full_like.svg" alt="full_like">-->
<!--                        </div>-->
<!--                        <div class="products__item-hit">ХИТ</div>-->
<!--                        <img src="--><?//=SITE_TEMPLATE_PATH?><!--/img/swiper_image_02.png" alt="swiper_image_02">-->
<!--                    </div>-->
<!--                    <div class="products__item-footer">-->
<!--                        <div class="products__item-txt">-->
<!--                            <div class="products__item-name">Футболка клуба GO!</div>-->
<!--                            <div class="products__item-price">2 500 ₽</div>-->
<!--                        </div>-->
<!--                        <div class="products__item-basket">-->
<!--                            <img src="--><?//=SITE_TEMPLATE_PATH?><!--/img/basket.svg" alt="basket">-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </a><a class="products__item" href="#">-->
<!--                    <div class="products__item-image scale">-->
<!--                        <div class="products__item-like">-->
<!--                            <img src="--><?//=SITE_TEMPLATE_PATH?><!--/img/like.svg" alt="like">-->
<!--                            <img class="like-active hide" src="--><?//=SITE_TEMPLATE_PATH?><!--/img/full_like.svg" alt="full_like">-->
<!--                        </div>-->
<!--                        <div class="products__item-sale">sale</div>-->
<!--                        <div class="products__item-hit products__item-hit-twice">ХИТ</div>-->
<!--                        <img src="--><?//=SITE_TEMPLATE_PATH?><!--/img/swiper_image_03.png" alt="swiper_image_03">-->
<!--                    </div>-->
<!--                    <div class="products__item-footer">-->
<!--                        <div class="products__item-txt">-->
<!--                            <div class="products__item-name">Футболка клуба GO!</div>-->
<!--                            <div class="products__item-price">2 500 ₽</div>-->
<!--                        </div>-->
<!--                        <div class="products__item-basket">-->
<!--                            <img src="--><?//=SITE_TEMPLATE_PATH?><!--/img/basket.svg" alt="basket">-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </a><a class="products__item" href="#">-->
<!--                    <div class="products__item-image scale">-->
<!--                        <div class="products__item-like">-->
<!--                            <img src="--><?//=SITE_TEMPLATE_PATH?><!--/img/like.svg" alt="like">-->
<!--                            <img class="like-active hide" src="--><?//=SITE_TEMPLATE_PATH?><!--/img/full_like.svg" alt="full_like">-->
<!--                        </div>-->
<!--                        <img src="--><?//=SITE_TEMPLATE_PATH?><!--/img/swiper_image_01.png" alt="swiper_image_01">-->
<!--                    </div>-->
<!--                    <div class="products__item-footer">-->
<!--                        <div class="products__item-txt">-->
<!--                            <div class="products__item-name">Футболка клуба GO!</div>-->
<!--                            <div class="products__item-price">2 500 ₽</div>-->
<!--                            <del class="products__item-old-price">2 500 ₽</del>-->
<!--                        </div>-->
<!--                        <div class="products__item-basket">-->
<!--                            <img src="--><?//=SITE_TEMPLATE_PATH?><!--/img/basket.svg" alt="basket">-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </a><a class="products__item" href="#">-->
<!--                    <div class="products__item-image scale">-->
<!--                        <div class="products__item-like">-->
<!--                            <img src="--><?//=SITE_TEMPLATE_PATH?><!--/img/like.svg" alt="like">-->
<!--                            <img class="like-active hide" src="--><?//=SITE_TEMPLATE_PATH?><!--/img/full_like.svg" alt="full_like">-->
<!--                        </div>-->
<!--                        <img src="--><?//=SITE_TEMPLATE_PATH?><!--/img/swiper_image_02.png" alt="swiper_image_02">-->
<!--                    </div>-->
<!--                    <div class="products__item-footer">-->
<!--                        <div class="products__item-txt">-->
<!--                            <div class="products__item-name">Футболка клуба GO!</div>-->
<!--                            <div class="products__item-price">2 500 ₽</div>-->
<!--                        </div>-->
<!--                        <div class="products__item-basket">-->
<!--                            <img src="--><?//=SITE_TEMPLATE_PATH?><!--/img/basket.svg" alt="basket">-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </a><a class="products__item" href="#">-->
<!--                    <div class="products__item-image scale">-->
<!--                        <div class="products__item-like">-->
<!--                            <img src="--><?//=SITE_TEMPLATE_PATH?><!--/img/like.svg" alt="like">-->
<!--                            <img class="like-active hide" src="--><?//=SITE_TEMPLATE_PATH?><!--/img/full_like.svg" alt="full_like">-->
<!--                        </div>-->
<!--                        <img src="--><?//=SITE_TEMPLATE_PATH?><!--/img/swiper_image_03.png" alt="swiper_image_03">-->
<!--                    </div>-->
<!--                    <div class="products__item-footer">-->
<!--                        <div class="products__item-txt">-->
<!--                            <div class="products__item-name">Футболка клуба GO!</div>-->
<!--                            <div class="products__item-price">2 500 ₽</div>-->
<!--                        </div>-->
<!--                        <div class="products__item-basket">-->
<!--                            <img src="--><?//=SITE_TEMPLATE_PATH?><!--/img/basket.svg" alt="basket">-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </a><a class="products__item" href="#">-->
<!--                    <div class="products__item-image scale">-->
<!--                        <div class="products__item-like">-->
<!--                            <img src="--><?//=SITE_TEMPLATE_PATH?><!--/img/like.svg" alt="like">-->
<!--                            <img class="like-active hide" src="--><?//=SITE_TEMPLATE_PATH?><!--/img/full_like.svg" alt="full_like">-->
<!--                        </div>-->
<!--                        <img src="--><?//=SITE_TEMPLATE_PATH?><!--/img/swiper_image_01.png" alt="swiper_image_01">-->
<!--                    </div>-->
<!--                    <div class="products__item-footer">-->
<!--                        <div class="products__item-txt">-->
<!--                            <div class="products__item-name">Футболка клуба GO!</div>-->
<!--                            <div class="products__item-price">2 500 ₽</div>-->
<!--                            <del class="products__item-old-price">2 500 ₽</del>-->
<!--                        </div>-->
<!--                        <div class="products__item-basket">-->
<!--                            <img src="--><?//=SITE_TEMPLATE_PATH?><!--/img/basket.svg" alt="basket">-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </a><a class="products__item" href="#">-->
<!--                    <div class="products__item-image scale">-->
<!--                        <div class="products__item-like">-->
<!--                            <img src="--><?//=SITE_TEMPLATE_PATH?><!--/img/like.svg" alt="like">-->
<!--                            <img class="like-active hide" src="--><?//=SITE_TEMPLATE_PATH?><!--/img/full_like.svg" alt="full_like">-->
<!--                        </div>-->
<!--                        <img src="--><?//=SITE_TEMPLATE_PATH?><!--/img/swiper_image_02.png" alt="swiper_image_02">-->
<!--                    </div>-->
<!--                    <div class="products__item-footer">-->
<!--                        <div class="products__item-txt">-->
<!--                            <div class="products__item-name">Футболка клуба GO!</div>-->
<!--                            <div class="products__item-price">2 500 ₽</div>-->
<!--                        </div>-->
<!--                        <div class="products__item-basket">-->
<!--                            <img src="--><?//=SITE_TEMPLATE_PATH?><!--/img/basket.svg" alt="basket">-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </a><a class="products__item" href="#">-->
<!--                    <div class="products__item-image scale">-->
<!--                        <div class="products__item-like">-->
<!--                            <img src="--><?//=SITE_TEMPLATE_PATH?><!--/img/like.svg" alt="like">-->
<!--                            <img class="like-active hide" src="--><?//=SITE_TEMPLATE_PATH?><!--/img/full_like.svg" alt="full_like">-->
<!--                        </div>-->
<!--                        <img src="--><?//=SITE_TEMPLATE_PATH?><!--/img/swiper_image_03.png" alt="swiper_image_03">-->
<!--                    </div>-->
<!--                    <div class="products__item-footer">-->
<!--                        <div class="products__item-txt">-->
<!--                            <div class="products__item-name">Футболка клуба GO!</div>-->
<!--                            <div class="products__item-price">2 500 ₽</div>-->
<!--                        </div>-->
<!--                        <div class="products__item-basket">-->
<!--                            <img src="--><?//=SITE_TEMPLATE_PATH?><!--/img/basket.svg" alt="basket">-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </a></div>-->
<!--        </div>-->
<!--    </div>-->
<!--</main>-->

<?

?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>