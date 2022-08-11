<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Страница игрока");


 ?>

<style>
    .gohockey-victory__players-staff-person-number span {
        position: relative;
        color: #020553;
        -webkit-text-stroke: .16em #020553;
        -webkit-text-stroke-width: 10px;
        font-size: 38px;
        line-height: 38px;
        font-weight: 800
    }

    .gohockey-victory__players-staff-person-number span::before {
        content: attr(data-text);
        position: absolute;
        -webkit-text-stroke: .02em #020553;
        -webkit-text-stroke-width: 1px;
        z-index: 2
    }

    .gohockey-victory__players-staff-person-number span::after {
        content: attr(data-text);
        position: absolute;
        -webkit-text-stroke: .02em #ff4c01;
        -webkit-text-stroke-width: 4px;
        right: 0;
        z-index: 1
    }
</style>

<?$APPLICATION->IncludeComponent(
    "bitrix:news",
    "team_page_gohockey",
    array(
        "ADD_ELEMENT_CHAIN" => "N",
        "ADD_SECTIONS_CHAIN" => "Y",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "BROWSER_TITLE" => "-",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "CHECK_DATES" => "Y",
        "DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
        "DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
        "DETAIL_DISPLAY_TOP_PAGER" => "N",
        "DETAIL_FIELD_CODE" => array(
            0 => "",
            1 => "",
        ),
        "DETAIL_PAGER_SHOW_ALL" => "Y",
        "DETAIL_PAGER_TEMPLATE" => "",
        "DETAIL_PAGER_TITLE" => "Страница",
        "PROPERTY_CODE" => array(0=>"ASSISTS",1=>"GOALS",2=>"DATE_OF_BIRTH",3=>"GAMES",4=>"QUALIFICATION",5=>"PLACE",6=>"DESCRIPTION",7=>"POSITION",8=>"HEIGHT",9=>"GRIP",10=>"CHAMPIONSHIP",11=>"PENALTY_MINUTES",12=>"BANNER",13=>"BULL",14=>"GALARY",15=>"GAMER",16=>"ICON",17=>"ICON_T",),
        "DETAIL_PROPERTY_CODE" => array(0=>"ASSISTS",1=>"GOALS",2=>"DATE_OF_BIRTH",3=>"GAMES",4=>"QUALIFICATION",5=>"PLACE",6=>"DESCRIPTION",7=>"POSITION",8=>"HEIGHT",9=>"GRIP",10=>"CHAMPIONSHIP",11=>"PENALTY_MINUTES",12=>"BANNER",13=>"BULL",14=>"GALARY",15=>"GAMER",16=>"ICON",17=>"ICON_T",),
        "DETAIL_SET_CANONICAL_URL" => "N",
        "DISPLAY_BOTTOM_PAGER" => "Y",
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "HIDE_LINK_WHEN_NO_DETAIL" => "Y",
        "IBLOCK_ID" => "18",
        "IBLOCK_TYPE" => "team",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
        "LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
        "LIST_FIELD_CODE" => array(
            0 => "",
            1 => "",
        ),
        "LIST_PROPERTY_CODE" => array(
            0 => "NUMBER",
            1 => "",
        ),
        "MESSAGE_404" => "",
        "META_DESCRIPTION" => "-",
        "META_KEYWORDS" => "-",
        "NEWS_COUNT" => "20",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => "arrows",
        "PAGER_TITLE" => "Новости",
        "PREVIEW_TRUNCATE_LEN" => "",
        "SEF_FOLDER" => "/team-page-gohockey/",
        "SEF_MODE" => "Y",
        "SET_LAST_MODIFIED" => "N",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "Y",
        "SHOW_404" => "N",
        "SORT_BY1" => "ACTIVE_FROM",
        "SORT_BY2" => "SORT",
        "SORT_ORDER1" => "DESC",
        "SORT_ORDER2" => "ASC",
        "STRICT_SECTION_CHECK" => "N",
        "USE_CATEGORIES" => "N",
        "USE_FILTER" => "N",
        "USE_PERMISSIONS" => "N",
        "USE_RATING" => "N",
        "USE_REVIEW" => "N",
        "USE_RSS" => "N",
        "USE_SEARCH" => "N",
        "USE_SHARE" => "N",
        "COMPONENT_TEMPLATE" => "team_page_gohockey",
        "SEF_URL_TEMPLATES" => array(
            "news" => "",
            "section" => "",
            "detail" => "#ELEMENT_CODE#/",
        ),
        "ELEMENT_CODE" => $_REQUEST["ELEMENT_CODE"]
    ),
    false
);?>



<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>