<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Страница игрока");


 ?>
    <style>

    .back_image_orang {
        background: -webkit-gradient(linear, left top, left bottom, from(#000000), color-stop(143.87%, rgba(0, 0, 0, 0))), url(/local/templates/new_ru/img/back.png) repeat-x;
            background: linear-gradient(180deg, #000000 0%, rgba(0, 0, 0, 0) 143.87%), url(/local/templates/new_ru/img/back.png) repeat-x;
        mix-blend-mode: normal;
        width: 100%;
        height: 584px;
        transform: rotate(-180deg);
    }

    span.player_num_orang {
        position: relative;
        color: #d19ff9;
        -webkit-text-stroke: .16em #fff;
        -webkit-text-stroke-width: 10px;
        font-size: 60px;
        font-weight: 800
    }

    span.player_num_orang::before {
    content: attr(data-text);
        position: absolute;
        -webkit-text-stroke: .02em #d19ff9;
    -webkit-text-stroke-width: 0px;
        z-index: 2
    }

    span.player_num_orang::after {
    content: attr(data-text);
        position: absolute;
        -webkit-text-stroke: .02em #000;
    -webkit-text-stroke-width: 5px;
        right: 0;
        z-index: 1
    }

    .item_orang {
        width: 24%;
        justify-content: center;
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        background-color: #D19FF9;
        border-right: 2px solid #000;
        padding: 30px 0 18px 0;
    }

    .item_orang span {
        position: relative;
        color: #d19ff9;
        -webkit-text-stroke: .16em #fff;
        -webkit-text-stroke-width: 10px;
    }

    .item_orang span::before {
    content: attr(data-text);
        position: absolute;
        -webkit-text-stroke: .02em #d19ff9;
    -webkit-text-stroke-width: 0px;
        z-index: 2
    }

    .item_orang span::after {
    content: attr(data-text);
        position: absolute;
        -webkit-text-stroke: .02em #000;
    -webkit-text-stroke-width: 5px;
        right: 0;
        z-index: 1
    }
</style>

<?php

$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"team_page",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "team_page",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"NAME",1=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "2",
		"IBLOCK_TYPE" => "team",
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
		"PROPERTY_CODE" => array(0=>"ASSISTS",1=>"GOALS",2=>"DATE_OF_BIRTH",3=>"GAMES",4=>"QUALIFICATION",5=>"PLACE",6=>"DESCRIPTION",7=>"POSITION",8=>"HEIGHT",9=>"GRIP",10=>"CHAMPIONSHIP",11=>"PENALTY_MINUTES",12=>"BANNER",13=>"BULL",14=>"SLIDER",15=>"GAMER",16=>"ICON",17=>"ICON_T",),
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
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>