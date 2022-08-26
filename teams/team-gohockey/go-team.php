<?
$arrFilter=array("PROPERTY_TEAM"=>7);//ID Команды
$TEAM = $arParams['ADD_PROPERTY_TEAM'];
?>
<div class="go-team">
            <div class="blue-go-team__info">
                <div class="container">
                    <div class="go-team__info">
                        <div class="go-team__about">
                            <div class="go-team__about-title">
                                <p>Хоккейная команда</p>
                                <p>Команда</p>
                                <div class="go-team__team-name orange"><span data-text="Gohockey" id="GO">Gohockey</span></div>
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
                                <div class="next-match__block orange" id="next-match__block">
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
                            <div class="<?if($arResult["PROPERTIES"]["TEAM"]["VALUE"] == 6):?>go-team__progress-background<?else:?>go-team__progress-background orange<?endif;?>" id="team-background-logo"></div>
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
                        <div class="go-team__nav-item-orange">
                                <p>Состав команды</p>
                                <p>Состав</p>
                        </div>
                        <a href="/teams/team-gohockey/tournament/" class="go-team__nav-item">
                            Турниры
                        </a>
                        <a href="/teams/team-gohockey/news/" class="go-team__nav-item">
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
		"DETAIL_URL" => "/teams/team-gohockey/trainer/?ELEMENT_ID=#ELEMENT_ID#",
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
		"DETAIL_URL" => "/teams/team-gohockey/players/?ELEMENT_ID=#ELEMENT_ID#",
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
                    </div>
                </div>
            </div>
        </div>
        </div>