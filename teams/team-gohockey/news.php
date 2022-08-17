<?$APPLICATION->SetAdditionalCSS("/local/templates/new_ru/assets/HOCKEY/GoNews/main.91bc24e41b6003253085.css");?>

<div class="go-news">
    <div class="blue-go-news__info">
        <div class="container">
            <div class="go-news__info">
                <div class="go-news__about">
                    <div class="go-news__about-title">
                        <p>Хоккейная команда</p>
                        <p>Команда</p>
                        <div class="go-news__team-name"><span data-text="GO" id="GO">GO</span></div>
                    </div>
                    <div class="go-news__about-txt"><?=$ar_header_fields["DETAIL_TEXT"];?></div>
                    <div class="go-news__progress invisible">
                        <div class="go-news__progress-stats">
                            <div class="go-news__progress-victories">
                                <div class="go-news__progress-title"><?=$ar_header_values['TEAM_POSITION']['NAME']?></div><span data-text="<?=$ar_header_values['TEAM_POSITION']['VALUE']?>"
                                                                                    id="victories-count"><?=$ar_header_values['TEAM_POSITION']['VALUE']?></span>
                            </div>
                            <div class="go-news__progress-points">
                                <div class="go-news__progress-title"><?=$ar_header_values['TEAM_POINT']['NAME']?></div><span data-text="<?=$ar_header_values['TEAM_POINT']['VALUE']?>"
                                                                                    id="points-count"><?=$ar_header_values['TEAM_POINT']['VALUE']?></span>
                            </div>
                            <div class="go-news__progress-place">
                                <div class="go-news__progress-title"><?=$ar_header_values['TEAM_WIN']['NAME']?></div><span data-text="<?=$ar_header_values['TEAM_WIN']['VALUE']?>" id="place"><?=$ar_header_values['TEAM_WIN']['VALUE']?></span>
                            </div>
                        </div>
                    </div>
                    <?$arrFilter=array("PROPERTY_TEAM"=>7);?>
                    <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"header_team_results", 
	array(
		"ACTIVE_DATE_FORMAT" => "j F Y",
		"ADD_SECTIONS_CHAIN" => "N",
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
		"COMPONENT_TEMPLATE" => "header_team_results",
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
		"IBLOCK_ID" => "19",
		"IBLOCK_TYPE" => "team",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "2",
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
			0 => "PLACE",
			1 => "PLACE",
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
		"USE_FILTER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y"
	),
	false
);
?> 
                </div>
                
                <div class="go-news__progress">
                    <div class="go-news__progress-background" id="team-background-logo"></div>
                    <div class="go-news__progress-stats">
                         <div class="go-news__progress-victories">
                                <div class="go-news__progress-title"><?=$ar_header_values['TEAM_POSITION']['NAME']?></div><span data-text="<?=$ar_header_values['TEAM_POSITION']['VALUE']?>"
                                                                                    id="victories-count"><?=$ar_header_values['TEAM_POSITION']['VALUE']?></span>
                            </div>
                            <div class="go-news__progress-points">
                                <div class="go-news__progress-title"><?=$ar_header_values['TEAM_POINT']['NAME']?></div><span data-text="<?=$ar_header_values['TEAM_POINT']['VALUE']?>"
                                                                                    id="points-count"><?=$ar_header_values['TEAM_POINT']['VALUE']?></span>
                            </div>
                            <div class="go-news__progress-place">
                                <div class="go-news__progress-title"><?=$ar_header_values['TEAM_WIN']['NAME']?></div><span data-text="<?=$ar_header_values['TEAM_WIN']['VALUE']?>" id="place"><?=$ar_header_values['TEAM_WIN']['VALUE']?></span>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="back-go-news__info-nav">
        <div class="container">
            <div class="go-news__info-nav">
                <a href="/teams/team-gohockey/" class="go-news__nav-item">
                    <p>Состав команды</p>
                    <p>Состав</p>
                </a>
                <a href="/teams/team-gohockey/tournament/" class="go-news__nav-item">Турниры</a>
                <a class="go-news__nav-item" href="/teams/team-gohockey/news/">Новости</a>
            </div>
        </div>
    </div>

    <div class="go-news__content">
        <div class="championship-course">
            <div class="championship-course__top">
                <div class="championship-course__title">Новости команды</div>
            </div>
        </div>
        <?$arrFilter=array("PROPERTY_TEAM"=>7);?>
         <?$APPLICATION->IncludeComponent(
        	"bitrix:news.list",
        	"news_teams",
        	Array(
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
        		"FIELD_CODE" => array(0=>"DETAIL_PICTURE",1=>"DATE_CREATE",2=>"",),
        		"FILTER_NAME" => "",
        		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
        		"IBLOCK_ID" => "5",
        		"IBLOCK_TYPE" => "content",
        		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
        		"INCLUDE_SUBSECTIONS" => "Y",
        		"MESSAGE_404" => "",
        		"NEWS_COUNT" => "10",
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
        		"PROPERTY_CODE" => array(0=>"",1=>"PROP_0",2=>"",),
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
                "USE_FILTER" => "Y",
                "FILTER_NAME" => "arrFilter",
        	)
        );?>
        

        <div class="social-content-block">
            <div class="section__title-block">
                <div class="social-content-block__title">
                    Instagram
                </div>
                    <div class="section__arrow">↙</div>
            </div>
            <div class="social-content-block__content">
                <?$arrFilter=array("PROPERTY_TEAM"=>7, "SECTION_ID" => 22);?>
                <?$APPLICATION->IncludeComponent(
                	"bitrix:news.list",
                	"social_posts",
                	Array(
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
                		"FIELD_CODE" => array(0=>"DETAIL_PICTURE",1=>"DATE_CREATE",2=>"",),
                		"FILTER_NAME" => "",
                		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
                		"IBLOCK_ID" => "23",
                		"IBLOCK_TYPE" => "content",
                		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                		"INCLUDE_SUBSECTIONS" => "Y",
                		"MESSAGE_404" => "",
                		"NEWS_COUNT" => "10",
                		"PAGER_BASE_LINK_ENABLE" => "N",
                		"PAGER_DESC_NUMBERING" => "N",
                		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                		"PAGER_SHOW_ALL" => "N",
                		"PAGER_SHOW_ALWAYS" => "N",
                		"PAGER_TEMPLATE" => ".default",
                		"PAGER_TITLE" => "Новости",
                		"PARENT_SECTION" => "22",
                		"PARENT_SECTION_CODE" => "",
                		"PREVIEW_TRUNCATE_LEN" => "",
                		"PROPERTY_CODE" => array(0=>"",1=>"PROP_0",2=>"",),
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
                        "USE_FILTER" => "Y",
                        "FILTER_NAME" => "arrFilter",
                	)
                );?>
            </div>
        </div>
        <div class="social-content-block">
            <div class="section__title-block">
                <div class="social-content-block__title">
                    VK
                </div>
                    <div class="section__arrow">↙</div>
            </div>
            <div class="social-content-block__content">
                <?$arrFilter=array("PROPERTY_TEAM"=>7, "SECTION_ID" => 21);?>
                <?$APPLICATION->IncludeComponent(
                	"bitrix:news.list",
                	"social_posts",
                	Array(
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
                		"FIELD_CODE" => array(0=>"DETAIL_PICTURE",1=>"DATE_CREATE",2=>"",),
                		"FILTER_NAME" => "",
                		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
                		"IBLOCK_ID" => "23",
                		"IBLOCK_TYPE" => "content",
                		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                		"INCLUDE_SUBSECTIONS" => "Y",
                		"MESSAGE_404" => "",
                		"NEWS_COUNT" => "10",
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
                		"PROPERTY_CODE" => array(0=>"",1=>"PROP_0",2=>"",),
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
                        "USE_FILTER" => "Y",
                        "FILTER_NAME" => "arrFilter",
                	)
                );?>
            </div>
        </div>
    </div>
</div>