<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("GO");
?>
    <section id="main">
    <div id="myVideoDiv" class="overlay">
        <video autoplay="" muted="" width="100%" height="auto" loop="" id="myVideo">
            <source src="<span id=" title="Код PHP: &lt;?=SITE_TEMPLATE_PATH?&gt;"
                    class="bxhtmled-surrogate"><?= SITE_TEMPLATE_PATH ?><span class="bxhtmled-surrogate-inner"><span
                        class="bxhtmled-right-side-item-icon"></span><span class="bxhtmled-comp-lable" unselectable="on"
                                                                           spellcheck="false">Код PHP</span></span>/img/background_video.mp4"
            type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'&gt;
            <source src="<span id=" title="Код PHP: &lt;?=SITE_TEMPLATE_PATH?&gt;"
                    class="bxhtmled-surrogate"><?= SITE_TEMPLATE_PATH ?><span class="bxhtmled-surrogate-inner"><span
                        class="bxhtmled-right-side-item-icon"></span><span class="bxhtmled-comp-lable" unselectable="on"
                                                                           spellcheck="false">Код PHP</span></span>/img/video_bg.ogv"
            type='video/ogg; codecs="theora, vorbis"'&gt;
            <source src="<span id=" title="Код PHP: &lt;?=SITE_TEMPLATE_PATH?&gt;"
                    class="bxhtmled-surrogate"><?= SITE_TEMPLATE_PATH ?><span class="bxhtmled-surrogate-inner"><span
                        class="bxhtmled-right-side-item-icon"></span><span class="bxhtmled-comp-lable" unselectable="on"
                                                                           spellcheck="false">Код PHP</span></span>/img/video_bg.webm"
            type='video/webm; codecs="vp8, vorbis"'&gt;
        </video>
    </div>
    <div class="main_wrapper">
    </div>
    <div class="main_container_wrapper">
        <div class="main_container_wrapper_2">
            <div class="container">
                <div class="main-container">
                    <h1 class="main-container__heading">
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            array(
                                "AREA_FILE_SHOW" => "file",
                                "PATH" => SITE_TEMPLATE_PATH . '/includes/main/main_title.php'
                            )
                        ); ?> </h1>
                    <p class="main-container__parag">
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            array(
                                "AREA_FILE_SHOW" => "file",
                                "PATH" => SITE_TEMPLATE_PATH . '/includes/main/main_description.php'
                            )
                        ); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    </section>
    <section id="about">
        <div class="container">
            <div class="about_pattern">
            </div>
            <div class="page-container">
                <div class="section">
                    <div class="section__title-block">
                        <div class="section__title">
                            <? $APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                array(
                                    "AREA_FILE_SHOW" => "file",
                                    "PATH" => SITE_TEMPLATE_PATH . '/includes/about/about_title.php'
                                )
                            ); ?>
                        </div>
                        <div class="section__arrow">
                            ↙
                        </div>
                    </div>
                    <div class="about-us__subtitle">
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            array(
                                "AREA_FILE_SHOW" => "file",
                                "PATH" => SITE_TEMPLATE_PATH . '/includes/main/main_description.php'
                            )
                        ); ?>
                    </div>
                    <div class="about-us__content">
                        <div class="about-us__swiper-block">
                            <div class="about-us__switcher">
                                <div class="about-us__switcher-previous">
                                    ←
                                </div>
                                <div class="about-us__switcher-dots">
                                    <div class="about-us__switcher-dot about-us__switcher-dot--active">
                                    </div>
                                    <div class="about-us__switcher-dot">
                                    </div>
                                    <div class="about-us__switcher-dot">
                                    </div>
                                </div>
                                <div class="about-us__switcher-next">
                                    →
                                </div>
                            </div>
                            <div class="about-us__swiper">
                                <? $APPLICATION->IncludeComponent(
                                    "bitrix:news.list",
                                    "about",
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
                                        "COMPONENT_TEMPLATE" => "about",
                                        "DETAIL_URL" => "",
                                        "DISPLAY_BOTTOM_PAGER" => "Y",
                                        "DISPLAY_TOP_PAGER" => "N",
                                        "FIELD_CODE" => array(0 => "NAME", 1 => "PREVIEW_TEXT", 2 => "PREVIEW_PICTURE", 3 => "DATE_ACTIVE_FROM", 4 => "",),
                                        "FILTER_NAME" => "",
                                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                                        "IBLOCK_ID" => "1",
                                        "IBLOCK_TYPE" => "content",
                                        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                                        "INCLUDE_SUBSECTIONS" => "Y",
                                        "MESSAGE_404" => "",
                                        "NEWS_COUNT" => "999",
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
                                        "PROPERTY_CODE" => array(0 => "", 1 => "PROP_0", 2 => "PHOTO_TEAM", 3 => "",),
                                        "SET_BROWSER_TITLE" => "N",
                                        "SET_LAST_MODIFIED" => "N",
                                        "SET_META_DESCRIPTION" => "Y",
                                        "SET_META_KEYWORDS" => "Y",
                                        "SET_STATUS_404" => "N",
                                        "SET_TITLE" => "N",
                                        "SHOW_404" => "N",
                                        "SORT_BY1" => "SORT",
                                        "SORT_BY2" => "SORT",
                                        "SORT_ORDER1" => "ASC",
                                        "SORT_ORDER2" => "ASC",
                                        "STRICT_SECTION_CHECK" => "N"
                                    )
                                ); ?>
                            </div>
                        </div>
                        <div class="about-us__info">
                            <div class="about-us__info-item">
                                <div class="about-us__info-item-txt-block">
                                    <span class="about-us__info-item-title" data-text="100">100</span>
                                    <div class="about-us__info-item-txt">
                                        Спортсменов
                                    </div>
                                </div>
                            </div>
                            <div class="about-us__info-item">
                                <div class="about-us__info-item-txt-block">
                                    <span class="about-us__info-item-title" data-text="20">20</span>
                                    <div class="about-us__info-item-txt">
                                        Проектов
                                    </div>
                                </div>
                            </div>
                            <div class="about-us__info-item">
                                <div class="about-us__info-item-txt-block">
                                    <span class="about-us__info-item-title" data-text="10">10</span>
                                    <div class="about-us__info-item-txt">
                                        Мероприятий
                                    </div>
                                </div>
                            </div>
                            <div class="about-us__info-item about-us__info-item-social">
                                <?
                                $res = CIBlockElement::GetList(array("ID" => "DESC"), array("IBLOCK_ID" => 8));
                                while ($ob = $res->GetNextElement()) {
                                    $arProps = $ob->GetProperties();
                                    $arFields = $ob->GetFields();
                                    ?>
                                    <a class="about-us__info-social-block"
                                       href="<?= $arProps['SOCIAL_LINK']['VALUE'] ?>"
                                       id="<?= $arFields['CODE'] ?>-block">
                                        <div class="about-us__info-social-image">
                                            <img alt="<?= $arFields['NAME'] ?>"
                                                 src="<?= CFile::GetPath($arProps['IMG']['VALUE']) ?>">
                                        </div>
                                    </a>
                                <? } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="team">
        <div class="container">
            <div class="page-container">
                <div class="team_title_arrow">
                    <div class="section__title">
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            array(
                                "AREA_FILE_SHOW" => "file",
                                "PATH" => SITE_TEMPLATE_PATH . '/includes/team/team_title.php'
                            )
                        ); ?>
                    </div>
                    <div class="section__arrow">
                        ↙
                    </div>
                </div>
               
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:news.list",
                        "team",
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
                            "COMPONENT_TEMPLATE" => "team",
                            "DETAIL_URL" => "",
                            "DISPLAY_BOTTOM_PAGER" => "Y",
                            "DISPLAY_TOP_PAGER" => "N",
                            "FIELD_CODE" => array(0 => "NAME", 1 => "PREVIEW_TEXT", 2 => "PREVIEW_PICTURE", 3 => "DATE_ACTIVE_FROM", 4 => "",),
                            "FILTER_NAME" => "",
                            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                            "IBLOCK_ID" => "4",
                            "IBLOCK_TYPE" => "team",
                            "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                            "INCLUDE_SUBSECTIONS" => "Y",
                            "MESSAGE_404" => "",
                            "NEWS_COUNT" => "999",
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
                            "PROPERTY_CODE" => array(0 => "", 1 => "PROP_0", 2 => "PHOTO_TEAM", 3 => "", 4 => "",),
                            "SET_BROWSER_TITLE" => "N",
                            "SET_LAST_MODIFIED" => "N",
                            "SET_META_DESCRIPTION" => "Y",
                            "SET_META_KEYWORDS" => "Y",
                            "SET_STATUS_404" => "N",
                            "SET_TITLE" => "N",
                            "SHOW_404" => "N",
                            "SORT_BY1" => "SORT",
                            "SORT_BY2" => "SORT",
                            "SORT_ORDER1" => "ASC",
                            "SORT_ORDER2" => "ASC",
                            "STRICT_SECTION_CHECK" => "N"
                        )
                    ); ?>
               
            </div>
        </div>
    </section>
<?php
?>
    <section id="match">
        <div class="container">
            <div class="block-with-matchs">
                <div class="block-with-matchs__title-block">
                    <div class="block-with-matchs__title">
                        Матчи
                    </div>
                </div>
                <div class="block-with-matchs__swiper-block">
                        <? $APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"main_match", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
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
		"COMPONENT_TEMPLATE" => "main_match",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_TEXT",
			2 => "PREVIEW_PICTURE",
			3 => "DATE_ACTIVE_FROM",
			4 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "3",
		"IBLOCK_TYPE" => "team",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "999",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "0",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "MATCHDATE",
			1 => "DIVISION",
			2 => "BTN_MATCH",
			3 => "MATCH_PLACE",
			4 => "TITLE_TEAM_1",
			5 => "TITLE_TEAM_2",
			6 => "TRANSLATION",
			7 => "COUNT_TEAM_1",
			8 => "COUNT_TEAM_2",
			9 => "PUCK_1",
			10 => "PUCK_2",
			11 => "PUCK_3",
			12 => "ETAP",
			13 => "PROP_0",
			14 => "PHOTO_TEAM",
			15 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "PROPERTY_MATCHDATE",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	),
	false
); ?>
            </div>  
        </div>
    </section>
    <section id="match" style="display:none;">
        <div class="page-container">
            <h2 class="section-title">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => SITE_TEMPLATE_PATH . '/includes/match/match_title.php'
                    )
                ); ?> </h2>
            <div class="match">
                <div class="go-final__swiper-block">
                    <div class="go-final__swiper">
                        <!-- <div class="swiper-carousel__4item">
                               <div class="swiper-wrapper"> --> <? $APPLICATION->IncludeComponent(
                            "bitrix:news.list",
                            "match",
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
                                "COMPONENT_TEMPLATE" => "match",
                                "DETAIL_URL" => "",
                                "DISPLAY_BOTTOM_PAGER" => "Y",
                                "DISPLAY_TOP_PAGER" => "N",
                                "FIELD_CODE" => array(0 => "NAME", 1 => "PREVIEW_TEXT", 2 => "PREVIEW_PICTURE", 3 => "DATE_ACTIVE_FROM", 4 => "",),
                                "FILTER_NAME" => "",
                                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                                "IBLOCK_ID" => "3",
                                "IBLOCK_TYPE" => "team",
                                "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                                "INCLUDE_SUBSECTIONS" => "Y",
                                "MESSAGE_404" => "",
                                "NEWS_COUNT" => "999",
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
                                "PROPERTY_CODE" => array(0 => "", 1 => "PROP_0", 2 => "LOGO_1", 3 => "LOGO_2",),
                                "SET_BROWSER_TITLE" => "N",
                                "SET_LAST_MODIFIED" => "N",
                                "SET_META_DESCRIPTION" => "Y",
                                "SET_META_KEYWORDS" => "Y",
                                "SET_STATUS_404" => "N",
                                "SET_TITLE" => "N",
                                "SHOW_404" => "N",
                                "SORT_BY1" => "SORT",
                                "SORT_BY2" => "SORT",
                                "SORT_ORDER1" => "ASC",
                                "SORT_ORDER2" => "ASC",
                                "STRICT_SECTION_CHECK" => "N"
                            )
                        ); ?>
                    </div>
                    <!-- <div class="swiper-nav match">
                                   <div class="swiper-button-next">
                                       →
                                   </div>
                               </div>
                           </div> -->
                </div>
            </div>
        </div>
    </section>
    <section id="shop">
        <div class="container">
            <div class="page-container">
                <div class="section__title-block">
                    <div class="section__title">
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            array(
                                "AREA_FILE_SHOW" => "file",
                                "PATH" => SITE_TEMPLATE_PATH . '/includes/shop/shop_title.php'
                            )
                        ); ?>
                    </div>
                    <div class="section__arrow">
                        ↙
                    </div>
                </div>
                <? $APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "shop",
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
                        "COMPONENT_TEMPLATE" => "shop",
                        "DETAIL_URL" => "",
                        "DISPLAY_BOTTOM_PAGER" => "Y",
                        "DISPLAY_TOP_PAGER" => "N",
                        "FIELD_CODE" => array(0 => "NAME", 1 => "PREVIEW_TEXT", 2 => "PREVIEW_PICTURE", 3 => "DATE_ACTIVE_FROM", 4 => "",),
                        "FILTER_NAME" => "",
                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                        "IBLOCK_ID" => "6",
                        "IBLOCK_TYPE" => "content",
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                        "INCLUDE_SUBSECTIONS" => "Y",
                        "MESSAGE_404" => "",
                        "NEWS_COUNT" => "1",
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
                        "PROPERTY_CODE" => array(0 => "", 1 => "PROP_0", 2 => "FIRST_IMG", 3 => "SECOND_IMG", 4 => "THIRD_IMG",),
                        "SET_BROWSER_TITLE" => "N",
                        "SET_LAST_MODIFIED" => "N",
                        "SET_META_DESCRIPTION" => "Y",
                        "SET_META_KEYWORDS" => "Y",
                        "SET_STATUS_404" => "N",
                        "SET_TITLE" => "N",
                        "SHOW_404" => "N",
                        "SORT_BY1" => "SORT",
                        "SORT_BY2" => "SORT",
                        "SORT_ORDER1" => "ASC",
                        "SORT_ORDER2" => "ASC",
                        "STRICT_SECTION_CHECK" => "N"
                    )
                ); ?>
            </div>
        </div>
    </section>
    <section id="news">
    <div class="container">
        <h2 class="section-title news">
            <? $APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                array(
                    "AREA_FILE_SHOW" => "file",
                    "PATH" => SITE_TEMPLATE_PATH . '/includes/news/news_title.php'
                )
            ); ?> </h2>
        <? $arrFilter = array("PROPERTY_MAIN_CHECK_VALUE" => "Да"); ?>
        <? $APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"news", 
	array(
		"ACTIVE_DATE_FORMAT" => "j F Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "N",
		"CACHE_TIME" => "0",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "news",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "DETAIL_PICTURE",
			1 => "DATE_CREATE",
			2 => "",
		),
		"FILTER_NAME" => "arrFilter",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "5",
		"IBLOCK_TYPE" => "content",
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
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "PROP_0",
			2 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"USE_FILTER" => "Y"
	),
	false
); ?>
        <div class="swiper-nav news">
            <div class="swiper-button-next">
                →
            </div>
        </div>
    </div>
    </section><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>