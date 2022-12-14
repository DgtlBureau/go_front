<?
$arrFilter=array("PROPERTY_TEAM"=>6);//ID Команды
?>

<div class="go-team">
            <div class="back-go-team__info">
                <div class="container">
                    <div class="go-team__info">
                        <div class="go-team__about">
                            <div class="go-team__about-title">
                                <p>Хоккейная команда</p>
                                <p>Команда</p>
                                <div class="go-team__team-name"><span data-text="<?=$GLOBALS['SITE_SETTINGS']['go']['LOGO_TEXT']?>" id="GO"><?=$GLOBALS['SITE_SETTINGS']['go']['LOGO_TEXT']?></span></div>
                            </div>
                            <div class="go-team__about-txt">
								<?=$ar_header_fields["~PREVIEW_TEXT"];?>
							</div>
                            <div class="go-team__progress invisible">
                                <div class="go-team__progress-stats">
                                    <div class="go-team__progress-victories">
                                        <div class="go-team__progress-title">Побед</div>
										<span data-text="<?=$ar_header_values["WINS"]["VALUE"]?>" id="victories-count"><?=$ar_header_values["WINS"]["VALUE"]?></span>
                                    </div>
                                    <div class="go-team__progress-points">
                                        <div class="go-team__progress-title">Очков</div>
										<span data-text="<?=$ar_header_values["GLASSES"]["VALUE"]?>"  id="points-count"><?=$ar_header_values["GLASSES"]["VALUE"]?></span>
                                    </div>
                                    <div class="go-team__progress-place">
                                        <div class="go-team__progress-title">Место</div>
										<span data-text="<?=$ar_header_values["PLACE"]["VALUE"]?>" id="place"><?=$ar_header_values["PLACE"]["VALUE"]?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="next-match">
                                <div class="next-match__title">Ближайший матч</div>
                                <div class="next-match__block" id="next-match__block">
                                    <div class="next-match__date-and-area">
                                        <div class="next-match__date">
										<?if($mach_header_values["MATCHDATE"]["VALUE"]):?>
											<?echo FormatDate("d F H:i", MakeTimeStamp($mach_header_values["MATCHDATE"]["VALUE"]));?>
										<?endif?>
										</div>
                                        <div class="next-match__area"><?=$mach_header_values["MATCH_PLACE"]["VALUE"]?></div>
                                    </div>
                                    <div class="next-match__versus">
                                        <div class="next-match__first-team">
                                            <div class="next-match__first-team-name" id="GO-first"><?=$mach_header_values["TITLE_TEAM_1"]["VALUE"]?></div>
                                            <div class="next-match__first-team-logo">
											<img src="<?=CFile::GetPath($mach_header_values["LOGO_1"]["VALUE"]);?>" alt="<?=$mach_header_values["TITLE_TEAM_1"]["VALUE"]?>"></div>
                                            <div class="next-match__first-team-name" id="GO-second"><?=$mach_header_values["TITLE_TEAM_1"]["VALUE"]?></div>
                                        </div>
                                        <div class="next-match__score">
                                            <div class="next-match__first-team-score"><?=$mach_header_values["COUNT_TEAM_1"]["VALUE"]?></div>
                                            <div class="next-match__score-between">:</div>
                                            <div class="next-match__second-team-score"><?=$mach_header_values["COUNT_TEAM_2"]["VALUE"]?></div>
                                        </div>
                                        <div class="next-match__second-team">
                                            <div class="next-match__second-team-logo">
											<img src="<?=CFile::GetPath($mach_header_values["LOGO_2"]["VALUE"]);?>" alt="<?=$mach_header_values["TITLE_TEAM_2"]["VALUE"]?>"></div>
                                            <div class="next-match__second-team-name"><?=$mach_header_values["TITLE_TEAM_2"]["VALUE"]?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="go-team__progress">
                            <div class="go-team__progress-background" id="team-background-logo"></div>
                            <div class="go-team__progress-stats">
                                <div class="go-team__progress-victories">
                                    <div class="go-team__progress-title">Побед</div>
									<span data-text="<?=$ar_header_values["WINS"]["VALUE"]?>" id="victories-count"><?=$ar_header_values["WINS"]["VALUE"]?></span>
                                </div>
                                <div class="go-team__progress-points">
                                    <div class="go-team__progress-title">Очков</div>
									<span data-text="<?=$ar_header_values["GLASSES"]["VALUE"]?>" id="points-count"><?=$ar_header_values["GLASSES"]["VALUE"]?></span>
                                </div>
                                <div class="go-team__progress-place">
                                    <div class="go-team__progress-title">Место</div>
									<span data-text="<?=$ar_header_values["PLACE"]["VALUE"]?>" id="place"><?=$ar_header_values["PLACE"]["VALUE"]?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="back-go-team__nav-item">
                <div class="container">
                    <div class="go-team__info-nav">
                        <div class="go-team__nav-item go">
                                <p>Состав команды</p>
                                <p>Состав</p>
                        </div>
                        <a href="/teams/team-go/tournament/" class="go-team__nav-item">
                            Турниры
                        </a>
                        <a href="/teams/team-go/news/" class="go-team__nav-item">
                            Новости
                        </a>
                    </div>
                </div>
            </div>

            

            <div class="container">
            <div class="go-team__line-up">
                <div class="go-team__staff-block">
                   <? $APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"treners_list",
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
		"COMPONENT_TEMPLATE" => "treners_list",
		"DETAIL_URL" => "/teams/team-go/trainer/?ELEMENT_ID=#ELEMENT_ID#",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "DETAIL_PICTURE",
			1 => "DATE_CREATE",
			2 => "",
		),
		"FILTER_NAME" => "arrFilter",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "17",
		"IBLOCK_TYPE" => "team",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "100",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "0",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Игроки",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "PLACE",
			2 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ID",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"USE_FILTER" => "Y",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "N",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "N"
	),
	false
);
                    ?>
                </div>
                <div class="go-team__staff-block">
                    <div class="go-team__staff-title">Игроки</div>
					<? $APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"players_list",
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
		"COMPONENT_TEMPLATE" => "players_list",
		"DETAIL_URL" => "/teams/team-go/players/?ELEMENT_ID=#ELEMENT_ID#",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "DETAIL_PICTURE",
			1 => "DATE_CREATE",
			2 => "",
		),
		"FILTER_NAME" => "arrFilter",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "18",
		"IBLOCK_TYPE" => "team",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "100",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "0",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Игроки",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "PLACE",
			2 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ID",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"USE_FILTER" => "Y",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "N",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "N"
	),
	false
);
                    ?>
                    <?
					/*
					$APPLICATION->IncludeComponent(
                        "bitrix:news",
                        "team_page",
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
                            "DETAIL_PROPERTY_CODE" => array(
                                0 => "ASSIST",
                                1 => "GOLE",
                                2 => "DATE",
                                3 => "DOS",
                                4 => "GAME",
                                5 => "INST",
                                6 => "QUALIFICATION",
                                7 => "NUMBER",
                                8 => "POSITION",
                                9 => "HEIGHT",
                                10 => "KHVAT",
                                11 => "SHTRAF",
                                12 => "GALARY",
                            ),
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
                            "SEF_FOLDER" => "/team-page/",
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
                            "USE_PERMISSIONS" => "N",
                            "USE_RATING" => "N",
                            "USE_REVIEW" => "N",
                            "USE_RSS" => "N",
                            "USE_SEARCH" => "N",
                            "USE_SHARE" => "N",
                            "COMPONENT_TEMPLATE" => "trener_page_gohockey",
                            "USE_FILTER" => "Y",
                            "FILTER_NAME" => "arrFilter",
                            "SEF_URL_TEMPLATES" => array(
                                "news" => "",
                                "section" => "",
                                "detail" => "#ELEMENT_CODE#/",
                            )
                        ),
                        false
                    );*/?>
                    </div>
                </div>
            </div>
        </div>
        </div>