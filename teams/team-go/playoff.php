<?
$PROPERTY_TEAM = 6;//ID Команды
?>
<div class="go-final">
    <div class="back-go-final__info">
        <div class="container">
            <div class="go-final__info">
                <div class="go-final__about">
                    <div class="go-final__about-title">
                        <p>Хоккейная команда</p>
                        <p>Команда</p>
                        <div class="go-final__team-name"><span data-text="GO" id="GO">GO</span></div>
                    </div>
                    <div class="go-final__about-txt"><?=$ar_header_fields["DETAIL_TEXT"];?></div>
                    <div class="go-final__progress invisible">
                        <div class="go-final__progress-stats">
                            <div class="go-final__progress-victories">
                                <div class="go-final__progress-title">Побед</div>
								<span data-text="<?=$ar_header_values["WINS"]["VALUE"]?>" id="victories-count"><?=$ar_header_values["WINS"]["VALUE"]?></span>
                            </div>
                            <div class="go-final__progress-points">
                                <div class="go-final__progress-title">Очков</div>
								<span data-text="<?=$ar_header_values["GLASSES"]["VALUE"]?>" id="points-count"><?=$ar_header_values["GLASSES"]["VALUE"]?></span>
                            </div>
                            <div class="go-final__progress-place">
                                <div class="go-final__progress-title">Место</div>
								<span data-text="<?=$ar_header_values["PLACE"]["VALUE"]?>" id="place"><?=$ar_header_values["PLACE"]["VALUE"]?></span>
                            </div>
                        </div>
                    </div>
					<?$arrFilter=array("PROPERTY_TEAM"=>$PROPERTY_TEAM);?>
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
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "1",
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
			1 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
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
                <div class="go-final__progress">
                    <div class="go-final__progress-background" id="team-background-logo"></div>
                    <div class="go-final__progress-stats">
                        <div class="go-final__progress-victories">
                            <div class="go-final__progress-title">Побед</div>
							<span data-text="<?=$ar_header_values["WINS"]["VALUE"]?>" id="victories-count"><?=$ar_header_values["WINS"]["VALUE"]?></span>
                        </div>
                        <div class="go-final__progress-points">
                            <div class="go-final__progress-title">Очков</div>
							<span data-text="<?=$ar_header_values["GLASSES"]["VALUE"]?>" id="points-count"><?=$ar_header_values["GLASSES"]["VALUE"]?></span>
                        </div>
                        <div class="go-final__progress-place">
                            <div class="go-final__progress-title">Место</div>
							<span data-text="<?=$ar_header_values["PLACE"]["VALUE"]?>" id="place"><?=$ar_header_values["PLACE"]["VALUE"]?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="back-go-final__info-nav">
        <div class="container">
            <div class="go-final__info-nav">
                <a href="/teams/team-go/" class="go-final__nav-item">
                        <p>Состав команды</p>
                        <p>Состав</p>
                </a>
                <a class="go-final__nav-item" href="/teams/team-go/tournament/">Турниры</a>
                <a class="go-final__nav-item" href="/teams/team-go/news/">Новости</a>
            </div>
        </div>
    </div>
    <div class="go-final__line-up">
        <div class="championship-course">
            <div class="championship-course__top">
                <a href="https://go-family.ru/teams/team-go/tournament/" class="championship-course__stage">Регулярный чемпионат</a>
                <div class="championship-course__title">Плей-офф</div>
                <div class="championship-course__select-block"><select class="championship-course__period">
                        <option>СЕЗОН 21/22</option>
                        <option>СЕЗОН 22/23</option>
                    </select></div>
                <div class="championship-course__select-block"><select class="championship-course__period">
                        <option>Плей-офф</option>
                        <option>Регулярный чемпионат</option>
                    </select></div>
            </div>
            <div class="go-final-bracket">
                <div class="go-final-bracket__stage">
                    <div class="go-final-bracket__txt active-stage">1/4</div>
                    <div class="go-final-bracket__separator-block">
                        <div class="go-final-bracket__separator white-border"></div>
                    </div>
                    <div class="go-final-bracket__txt active-stage">1/2</div>
                    <div class="go-final-bracket__separator-block">
                        <div class="go-final-bracket__separator white-border"></div>
                    </div>
                    <div class="go-final-bracket__txt active-stage">ФИНАЛ</div>
                    <div class="go-final-bracket__separator-block">
                        <div class="go-final-bracket__separator white-border"></div>
                    </div>
                    <div class="go-final-bracket__txt active-stage">1/2</div>
                    <div class="go-final-bracket__separator-block">
                        <div class="go-final-bracket__separator white-border"></div>
                    </div>
                    <div class="go-final-bracket__txt active-stage">1/4</div>
                </div>
                <div class="go-final-bracket__results-block">
                    <div class="go-final-bracket__results">
                        <div class="go-final-bracket__content">
                            <div class="go-final-bracket__quarter-result">
                                <div class="go-final-bracket__game">
                                    <div class="go-final-bracket__team">
                                        <div class="go-final-bracket__team-info">
                                            <div class="go-final-bracket__team-logo"><img
                                                        src="/local/templates/new_ru/img/bull.png" alt="bull"></div>
                                        </div>
                                        <div
                                                class="go-final-bracket__score go-final-bracket__score_winner borders">
                                            <div class="go-final-bracket__score-txt">4</div>
                                        </div>
                                        <div class="go-final-bracket__score borders">
                                            <div class="go-final-bracket__score-txt">-</div>
                                        </div>
                                    </div>
                                    <div class="go-final-bracket__team">
                                        <div class="go-final-bracket__team-info">
                                            <div class="go-final-bracket__team-logo"><img
                                                        src="/local/templates/new_ru/img/bull.png" alt="bull"></div>
                                        </div>
                                        <div class="go-final-bracket__score quarter borders">
                                            <div class="go-final-bracket__score-txt">4</div>
                                        </div>
                                        <div class="go-final-bracket__score borders">
                                            <div class="go-final-bracket__score-txt">-</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="go-final-bracket__game">
                                    <div class="go-final-bracket__team">
                                        <div class="go-final-bracket__team-info">
                                            <div class="go-final-bracket__team-logo"><img
                                                        src="/local/templates/new_ru/img/bull.png" alt="bull"></div>
                                        </div>
                                        <div
                                                class="go-final-bracket__score go-final-bracket__score_winner borders">
                                            <div class="go-final-bracket__score-txt">4</div>
                                        </div>
                                        <div class="go-final-bracket__score borders">
                                            <div class="go-final-bracket__score-txt">-</div>
                                        </div>
                                    </div>
                                    <div class="go-final-bracket__team">
                                        <div class="go-final-bracket__team-info">
                                            <div class="go-final-bracket__team-logo"><img
                                                        src="/local/templates/new_ru/img/bull.png" alt="bull"></div>
                                        </div>
                                        <div class="go-final-bracket__score quarter borders">
                                            <div class="go-final-bracket__score-txt">4</div>
                                        </div>
                                        <div class="go-final-bracket__score borders">
                                            <div class="go-final-bracket__score-txt">-</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="go-final-bracket__connecting-block">
                                <div class="go-final-bracket__connecting vertical-connecting"><img
                                            src="/local/templates/new_ru/img/vertLineCurved.png" alt="vertLine"></div>
                                <div class="go-final-bracket__connecting vertical-connecting"><img
                                            src="/local/templates/new_ru/img/vertLineCurved.png" alt="vertLine"></div>
                            </div>
                            <div class="go-final-bracket__connecting-block">
                                <div class="go-final-bracket__connecting gorizontal-connecting"><img
                                            src="/local/templates/new_ru/img/gorLine.png" alt="gorLine"></div>
                            </div>
                            <div class="go-final-bracket__quarter-result">
                                <div class="go-final-bracket__game semi-match-block">
                                    <div class="go-final-bracket__team">
                                        <div class="go-final-bracket__team-info">
                                            <div class="go-final-bracket__team-logo"><img
                                                        src="/local/templates/new_ru/img/bull.png" alt="bull"></div>
                                        </div>
                                        <div
                                                class="go-final-bracket__score three-game go-final-bracket__score_winner borders">
                                            <div class="go-final-bracket__score-txt">4</div>
                                        </div>
                                        <div class="go-final-bracket__score three-game borders">
                                            <div class="go-final-bracket__score-txt">2</div>
                                        </div>
                                        <div class="go-final-bracket__score three-game borders">
                                            <div class="go-final-bracket__score-txt">4</div>
                                        </div>
                                    </div>
                                    <div class="go-final-bracket__team">
                                        <div class="go-final-bracket__team-info">
                                            <div class="go-final-bracket__team-logo"><img
                                                        src="/local/templates/new_ru/img/bull.png" alt="bull"></div>
                                        </div>
                                        <div class="go-final-bracket__score three-game quarter borders">
                                            <div class="go-final-bracket__score-txt">4</div>
                                        </div>
                                        <div
                                                class="go-final-bracket__score three-game go-final-bracket__score_winner borders">
                                            <div class="go-final-bracket__score-txt">3</div>
                                        </div>
                                        <div
                                                class="go-final-bracket__score three-game go-final-bracket__score_winner borders">
                                            <div class="go-final-bracket__score-txt">5</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="go-final-bracket__connecting-block">
                                <div class="go-final-bracket__connecting gorizontal-connecting"><img
                                            src="/local/templates/new_ru/img/gorLine.png" alt="gorLine"></div>
                            </div>
                        </div>
                        <div class="go-final-bracket__final-game-block">
                            <div class="go-final-bracket__cup-block">
                                <div class="go-final-bracket__cup-image"><img
                                            src="/local/templates/new_ru/img/whiteCup.png" alt="whiteCup"></div>
                                <div class="go-final-bracket__cup-name">Кубок ЛХЛ-77</div>
                            </div>
                            <div class="go-final-bracket__final-teams-block">
                                <div class="go-final-bracket__final-teams">
                                    <div class="go-final-bracket__final-game-player">
                                        <div class="go-final-bracket__logo-block">
                                            <div class="go-final-bracket__logo"><img
                                                        src="/local/templates/new_ru/img/bull.png" alt="bull"></div>
                                        </div>
                                        <div
                                                class="go-final-bracket__final-score-block go-final-bracket__score_winner">
                                            <div class="go-final-bracket__score-txt">5</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="go-final-bracket__final-teams">
                                    <div class="go-final-bracket__final-game-player">
                                        <div class="go-final-bracket__logo-block">
                                            <div class="go-final-bracket__logo"><img
                                                        src="/local/templates/new_ru/img/bull.png" alt="bull"></div>
                                        </div>
                                        <div class="go-final-bracket__final-score-block">
                                            <div class="go-final-bracket__score-txt">3</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="go-final-bracket__final-teams-title">3 место</div>
                            <div class="go-final-bracket__final-teams-block">
                                <div class="go-final-bracket__final-teams">
                                    <div class="go-final-bracket__final-game-player">
                                        <div class="go-final-bracket__logo-block">
                                            <div class="go-final-bracket__logo"><img
                                                        src="/local/templates/new_ru/img/bull.png" alt="bull"></div>
                                        </div>
                                        <div
                                                class="go-final-bracket__final-score-block go-final-bracket__score_winner">
                                            <div class="go-final-bracket__score-txt">5</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="go-final-bracket__final-teams">
                                    <div class="go-final-bracket__final-game-player">
                                        <div class="go-final-bracket__logo-block">
                                            <div class="go-final-bracket__logo"><img
                                                        src="/local/templates/new_ru/img/bull.png" alt="bull"></div>
                                        </div>
                                        <div class="go-final-bracket__final-score-block">
                                            <div class="go-final-bracket__score-txt">3</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="go-final-bracket__content mirror">
                            <div class="go-final-bracket__quarter-result rotate">
                                <div class="go-final-bracket__game">
                                    <div class="go-final-bracket__team">
                                        <div
                                                class="go-final-bracket__score go-final-bracket__score_winner borders">
                                            <div class="go-final-bracket__score-txt">4</div>
                                        </div>
                                        <div class="go-final-bracket__score borders">
                                            <div class="go-final-bracket__score-txt">-</div>
                                        </div>
                                        <div class="go-final-bracket__team-info">
                                            <div class="go-final-bracket__team-logo"><img
                                                        src="/local/templates/new_ru/img/bull.png" alt="bull"></div>
                                        </div>
                                    </div>
                                    <div class="go-final-bracket__team">
                                        <div class="go-final-bracket__score quarter borders">
                                            <div class="go-final-bracket__score-txt">4</div>
                                        </div>
                                        <div class="go-final-bracket__score borders">
                                            <div class="go-final-bracket__score-txt">-</div>
                                        </div>
                                        <div class="go-final-bracket__team-info">
                                            <div class="go-final-bracket__team-logo"><img
                                                        src="/local/templates/new_ru/img/bull.png" alt="bull"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="go-final-bracket__game">
                                    <div class="go-final-bracket__team">
                                        <div
                                                class="go-final-bracket__score go-final-bracket__score_winner borders">
                                            <div class="go-final-bracket__score-txt">4</div>
                                        </div>
                                        <div class="go-final-bracket__score borders">
                                            <div class="go-final-bracket__score-txt">-</div>
                                        </div>
                                        <div class="go-final-bracket__team-info">
                                            <div class="go-final-bracket__team-logo"><img
                                                        src="/local/templates/new_ru/img/bull.png" alt="bull"></div>
                                        </div>
                                    </div>
                                    <div class="go-final-bracket__team">
                                        <div class="go-final-bracket__score quarter borders">
                                            <div class="go-final-bracket__score-txt">4</div>
                                        </div>
                                        <div class="go-final-bracket__score borders">
                                            <div class="go-final-bracket__score-txt">-</div>
                                        </div>
                                        <div class="go-final-bracket__team-info">
                                            <div class="go-final-bracket__team-logo"><img
                                                        src="/local/templates/new_ru/img/bull.png" alt="bull"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="go-final-bracket__connecting-block">
                                <div class="go-final-bracket__connecting vertical-connecting"><img
                                            src="/local/templates/new_ru/img/vertLineCurved.png" alt="vertLine"></div>
                                <div class="go-final-bracket__connecting vertical-connecting"><img
                                            src="/local/templates/new_ru/img/vertLineCurved.png" alt="vertLine"></div>
                            </div>
                            <div class="go-final-bracket__connecting-block">
                                <div class="go-final-bracket__connecting gorizontal-connecting"><img
                                            src="/local/templates/new_ru/img/gorLine.png" alt="gorLine"></div>
                            </div>
                            <div class="go-final-bracket__quarter-result rotate">
                                <div class="go-final-bracket__game semi-match-block">
                                    <div class="go-final-bracket__team">
                                        <div
                                                class="go-final-bracket__score three-game go-final-bracket__score_winner borders">
                                            <div class="go-final-bracket__score-txt">4</div>
                                        </div>
                                        <div class="go-final-bracket__score three-game borders">
                                            <div class="go-final-bracket__score-txt">2</div>
                                        </div>
                                        <div class="go-final-bracket__score three-game borders">
                                            <div class="go-final-bracket__score-txt">4</div>
                                        </div>
                                        <div class="go-final-bracket__team-info">
                                            <div class="go-final-bracket__team-logo"><img
                                                        src="/local/templates/new_ru/img/bull.png" alt="bull"></div>
                                        </div>
                                    </div>
                                    <div class="go-final-bracket__team">
                                        <div class="go-final-bracket__score three-game quarter borders">
                                            <div class="go-final-bracket__score-txt">4</div>
                                        </div>
                                        <div
                                                class="go-final-bracket__score three-game go-final-bracket__score_winner borders">
                                            <div class="go-final-bracket__score-txt">3</div>
                                        </div>
                                        <div
                                                class="go-final-bracket__score three-game go-final-bracket__score_winner borders">
                                            <div class="go-final-bracket__score-txt">5</div>
                                        </div>
                                        <div class="go-final-bracket__team-info">
                                            <div class="go-final-bracket__team-logo"><img
                                                        src="/local/templates/new_ru/img/bull.png" alt="bull"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="go-final-bracket__connecting-block">
                                <div class="go-final-bracket__connecting gorizontal-connecting"><img
                                            src="/local/templates/new_ru/img/gorLine.png" alt="gorLine"></div>
                            </div>
                        </div>
                    </div>
                    <div class="go-final-bracket__mobile-result">
                        <div class="go-final-bracket__stage-mobile">
                            <div class="go-final-bracket__current-stage">1/4</div>
                            <div class="go-final-bracket__quarter-result-block">
                                <div class="go-final-bracket__quarter-result">
                                    <div class="go-final-bracket__game">
                                        <div class="go-final-bracket__team">
                                            <div class="go-final-bracket__team-info">
                                                <div class="go-final-bracket__team-logo"><img
                                                            src="/local/templates/new_ru/img/bull.png" alt="bull"></div>
                                            </div>
                                            <div
                                                    class="go-final-bracket__score go-final-bracket__score_winner borders">
                                                <div class="go-final-bracket__score-txt">4</div>
                                            </div>
                                            <div class="go-final-bracket__score borders">
                                                <div class="go-final-bracket__score-txt">-</div>
                                            </div>
                                        </div>
                                        <div class="go-final-bracket__team">
                                            <div class="go-final-bracket__team-info">
                                                <div class="go-final-bracket__team-logo"><img
                                                            src="/local/templates/new_ru/img/bull.png" alt="bull"></div>
                                            </div>
                                            <div class="go-final-bracket__score quarter borders">
                                                <div class="go-final-bracket__score-txt">4</div>
                                            </div>
                                            <div class="go-final-bracket__score borders">
                                                <div class="go-final-bracket__score-txt">-</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="go-final-bracket__game">
                                        <div class="go-final-bracket__team">
                                            <div class="go-final-bracket__team-info">
                                                <div class="go-final-bracket__team-logo"><img
                                                            src="/local/templates/new_ru/img/bull.png" alt="bull"></div>
                                            </div>
                                            <div
                                                    class="go-final-bracket__score go-final-bracket__score_winner borders">
                                                <div class="go-final-bracket__score-txt">4</div>
                                            </div>
                                            <div class="go-final-bracket__score borders">
                                                <div class="go-final-bracket__score-txt">-</div>
                                            </div>
                                        </div>
                                        <div class="go-final-bracket__team">
                                            <div class="go-final-bracket__team-info">
                                                <div class="go-final-bracket__team-logo"><img
                                                            src="/local/templates/new_ru/img/bull.png" alt="bull"></div>
                                            </div>
                                            <div class="go-final-bracket__score quarter borders">
                                                <div class="go-final-bracket__score-txt">4</div>
                                            </div>
                                            <div class="go-final-bracket__score borders">
                                                <div class="go-final-bracket__score-txt">-</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="go-final-bracket__dividing-line"><img class="mobile-vert-line"
                                                                                  src="/local/templates/new_ru/img/vertLine.png" alt="Line"><img
                                            class="line1-ellipse ellipse" src="/local/templates/new_ru/img/ellipseMini.png"
                                            alt="EllipseMini"><img class="line2-ellipse ellipse"
                                                                   src="/local/templates/new_ru/img/ellipseMini.png" alt="EllipseMini"><img
                                            class="line3-ellipse ellipse" src="/local/templates/new_ru/img/ellipseMini.png"
                                            alt="EllipseMini"><img class="line4-ellipse ellipse"
                                                                   src="/local/templates/new_ru/img/ellipseMini.png" alt="EllipseMini"></div>
                                <div class="go-final-bracket__quarter-result snuggle-left">
                                    <div class="go-final-bracket__game">
                                        <div class="go-final-bracket__team">
                                            <div
                                                    class="go-final-bracket__score go-final-bracket__score_winner borders">
                                                <div class="go-final-bracket__score-txt">4</div>
                                            </div>
                                            <div class="go-final-bracket__score borders">
                                                <div class="go-final-bracket__score-txt">-</div>
                                            </div>
                                            <div class="go-final-bracket__team-info">
                                                <div class="go-final-bracket__team-logo"><img
                                                            src="/local/templates/new_ru/img/bull.png" alt="bull"></div>
                                            </div>
                                        </div>
                                        <div class="go-final-bracket__team">
                                            <div class="go-final-bracket__score quarter borders">
                                                <div class="go-final-bracket__score-txt">4</div>
                                            </div>
                                            <div class="go-final-bracket__score borders">
                                                <div class="go-final-bracket__score-txt">-</div>
                                            </div>
                                            <div class="go-final-bracket__team-info">
                                                <div class="go-final-bracket__team-logo"><img
                                                            src="/local/templates/new_ru/img/bull.png" alt="bull"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="go-final-bracket__game">
                                        <div class="go-final-bracket__team">
                                            <div
                                                    class="go-final-bracket__score go-final-bracket__score_winner borders">
                                                <div class="go-final-bracket__score-txt">4</div>
                                            </div>
                                            <div class="go-final-bracket__score borders">
                                                <div class="go-final-bracket__score-txt">-</div>
                                            </div>
                                            <div class="go-final-bracket__team-info">
                                                <div class="go-final-bracket__team-logo"><img
                                                            src="/local/templates/new_ru/img/bull.png" alt="bull"></div>
                                            </div>
                                        </div>
                                        <div class="go-final-bracket__team">
                                            <div class="go-final-bracket__score quarter borders">
                                                <div class="go-final-bracket__score-txt">4</div>
                                            </div>
                                            <div class="go-final-bracket__score borders">
                                                <div class="go-final-bracket__score-txt">-</div>
                                            </div>
                                            <div class="go-final-bracket__team-info">
                                                <div class="go-final-bracket__team-logo"><img
                                                            src="/local/templates/new_ru/img/bull.png" alt="bull"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="go-final-bracket__stage-mobile">
                            <div class="go-final-bracket__current-stage margin-top-10">1/2</div>
                            <div
                                    class="go-final-bracket__quarter-result-block go-final-bracket__quarter-result-block-semi">
                                <div class="go-final-bracket__quarter-result">
                                    <div class="go-final-bracket__game">
                                        <div class="go-final-bracket__team">
                                            <div class="go-final-bracket__team-info">
                                                <div class="go-final-bracket__team-logo"><img
                                                            src="/local/templates/new_ru/img/bull.png" alt="bull"></div>
                                            </div>
                                            <div
                                                    class="go-final-bracket__score three-game go-final-bracket__score_winner borders">
                                                <div class="go-final-bracket__score-txt">4</div>
                                            </div>
                                            <div class="go-final-bracket__score three-game borders">
                                                <div class="go-final-bracket__score-txt">1</div>
                                            </div>
                                            <div
                                                    class="go-final-bracket__score three-game go-final-bracket__score_winner borders">
                                                <div class="go-final-bracket__score-txt">6</div>
                                            </div>
                                        </div>
                                        <div class="go-final-bracket__team">
                                            <div class="go-final-bracket__team-info">
                                                <div class="go-final-bracket__team-logo"><img
                                                            src="/local/templates/new_ru/img/bull.png" alt="bull"></div>
                                            </div>
                                            <div class="go-final-bracket__score three-game quarter borders">
                                                <div class="go-final-bracket__score-txt">4</div>
                                            </div>
                                            <div
                                                    class="go-final-bracket__score three-game go-final-bracket__score_winner borders">
                                                <div class="go-final-bracket__score-txt">5</div>
                                            </div>
                                            <div class="go-final-bracket__score three-game borders">
                                                <div class="go-final-bracket__score-txt">3</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                        class="go-final-bracket__dividing-line go-final-bracket__dividing-line-short">
                                    <img class="mobile-vert-line" src="/local/templates/new_ru/img/vertLine.png"
                                         alt="Line"><img class="line1-ellipse ellipse"
                                                         src="/local/templates/new_ru/img/ellipseMini.png" alt="EllipseMini"><img
                                            class="line2-ellipse ellipse" src="/local/templates/new_ru/img/ellipseMini.png"
                                            alt="EllipseMini"><img class="line3-ellipse ellipse"
                                                                   src="/local/templates/new_ru/img/ellipseMini.png" alt="EllipseMini"><img
                                            class="line4-ellipse ellipse" src="/local/templates/new_ru/img/ellipseMini.png"
                                            alt="EllipseMini"></div>
                                <div class="go-final-bracket__quarter-result snuggle-left">
                                    <div class="go-final-bracket__game">
                                        <div class="go-final-bracket__team">
                                            <div
                                                    class="go-final-bracket__score three-game go-final-bracket__score_winner borders">
                                                <div class="go-final-bracket__score-txt">4</div>
                                            </div>
                                            <div class="go-final-bracket__score three-game borders">
                                                <div class="go-final-bracket__score-txt">24</div>
                                            </div>
                                            <div
                                                    class="go-final-bracket__score three-game go-final-bracket__score_winner borders">
                                                <div class="go-final-bracket__score-txt">10</div>
                                            </div>
                                            <div class="go-final-bracket__team-info">
                                                <div class="go-final-bracket__team-logo"><img
                                                            src="/local/templates/new_ru/img/bull.png" alt="bull"></div>
                                            </div>
                                        </div>
                                        <div class="go-final-bracket__team">
                                            <div class="go-final-bracket__score three-game quarter borders">
                                                <div class="go-final-bracket__score-txt">4</div>
                                            </div>
                                            <div
                                                    class="go-final-bracket__score three-game go-final-bracket__score_winner borders">
                                                <div class="go-final-bracket__score-txt">25</div>
                                            </div>
                                            <div class="go-final-bracket__score three-game borders">
                                                <div class="go-final-bracket__score-txt">3</div>
                                            </div>
                                            <div class="go-final-bracket__team-info">
                                                <div class="go-final-bracket__team-logo"><img
                                                            src="/local/templates/new_ru/img/bull.png" alt="bull"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="go-final-bracket__stage-mobile">
                            <div class="go-final-bracket__current-stage margin-top-10"
                                 style="color: rgba(255, 255, 255, 0.4);">ФИНАЛ</div>
                            <div class="go-final-bracket__cup-block">
                                <div class="go-final-bracket__cup-image"><img
                                            src="/local/templates/new_ru/img/whiteCup.png" alt="whiteCup"></div>
                                <div class="go-final-bracket__cup-name">Кубок ЛХЛ-77</div>
                            </div>
                            <div class="go-final-bracket__final-teams-block">
                                <div class="go-final-bracket__final-teams">
                                    <div class="go-final-bracket__final-game-player">
                                        <div class="go-final-bracket__logo-block">
                                            <div class="go-final-bracket__logo"><img
                                                        src="/local/templates/new_ru/img/bull.png" alt="bull"></div>
                                        </div>
                                        <div
                                                class="go-final-bracket__final-score-block go-final-bracket__score_winner">
                                            <div class="go-final-bracket__score-txt">5</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="go-final-bracket__final-teams">
                                    <div class="go-final-bracket__final-game-player">
                                        <div class="go-final-bracket__logo-block">
                                            <div class="go-final-bracket__logo"><img
                                                        src="/local/templates/new_ru/img/bull.png" alt="bull"></div>
                                        </div>
                                        <div class="go-final-bracket__final-score-block">
                                            <div class="go-final-bracket__score-txt">3</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="go-final-bracket__final-teams-title">3 место</div>
                            <div class="go-final-bracket__final-teams-block">
                                <div class="go-final-bracket__final-teams">
                                    <div class="go-final-bracket__final-game-player">
                                        <div class="go-final-bracket__logo-block">
                                            <div class="go-final-bracket__logo"><img
                                                        src="/local/templates/new_ru/img/bull.png" alt="bull"></div>
                                        </div>
                                        <div
                                                class="go-final-bracket__final-score-block go-final-bracket__score_winner">
                                            <div class="go-final-bracket__score-txt">5</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="go-final-bracket__final-teams">
                                    <div class="go-final-bracket__final-game-player">
                                        <div class="go-final-bracket__logo-block">
                                            <div class="go-final-bracket__logo"><img
                                                        src="/local/templates/new_ru/img/bull.png" alt="bull"></div>
                                        </div>
                                        <div class="go-final-bracket__final-score-block">
                                            <div class="go-final-bracket__score-txt">3</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="go-final__title-block">
                <div class="go-final__title">Матчи</div>
                <div class="go-final__arrow">↖</div>
            </div>
            <div class="go-final__swiper-block">
                <div class="go-final__swiper">
                    <div class="match">
                        <div class="match__block" id="next-match__block">
                            <div class="match__date-and-area">
                                <div class="match__date">10 сентября, 18:00</div>
                                <div class="match__area">Апиа арена</div>
                            </div>
                            <div class="match__versus">
                                <div class="match__first-team">
                                    <div class="match__first-team-logo"><img src="/local/templates/new_ru/img/bull.png"
                                                                             alt="bull"></div>
                                    <div class="match__first-team-name" id="GO-first">GO</div>
                                </div>
                                <div class="match__score">
                                    <div class="match__first-team-score">5</div>
                                    <div class="match__score-between">:</div>
                                    <div class="match__second-team-score">0</div>
                                </div>
                                <div class="match__second-team">
                                    <div class="match__second-team-logo"><img src="/local/templates/new_ru/img/blackDragon.png"
                                                                              alt="blackDragon"></div>
                                    <div class="match__second-team-name">Black<br>Dragon</div>
                                </div>
                            </div>
                            <a href="" class="match__button">
                                <div class="match__button-txt">Обзор матча</div>
                                <div class="match__translation"></div>
                            </a>
                        </div>
                    </div>
                    <div class="match">
                        <div class="match__block" id="next-match__block">
                            <div class="match__date-and-area">
                                <div class="match__date">10 сентября, 18:00</div>
                                <div class="match__area">Апиа арена</div>
                            </div>
                            <div class="match__versus">
                                <div class="match__first-team">
                                    <div class="match__first-team-logo"><img src="/local/templates/new_ru/img/bull.png"
                                                                             alt="bull"></div>
                                    <div class="match__first-team-name" id="GO-first">GO</div>
                                </div>
                                <div class="match__score">
                                    <div class="match__first-team-score">-</div>
                                    <div class="match__score-between">:</div>
                                    <div class="match__second-team-score">-</div>
                                </div>
                                <div class="match__second-team">
                                    <div class="match__second-team-logo"><img src="/local/templates/new_ru/img/blackDragon.png"
                                                                              alt="blackDragon"></div>
                                    <div class="match__second-team-name">Black<br>Dragon</div>
                                </div>
                            </div>
                            <a href="" class="match__button">
                                <div class="match__button-txt">Обзор матча</div>
                                <div class="match__translation"></div>
                            </a>
                        </div>
                    </div>
                    <div class="match">
                        <div class="match__block" id="next-match__block">
                            <div class="match__date-and-area">
                                <div class="match__date">10 сентября, 18:00</div>
                                <div class="match__area">Апиа арена</div>
                            </div>
                            <div class="match__versus">
                                <div class="match__first-team">
                                    <div class="match__first-team-logo"><img src="/local/templates/new_ru/img/bull.png"
                                                                             alt="bull"></div>
                                    <div class="match__first-team-name" id="GO-first">GO</div>
                                </div>
                                <div class="match__score">
                                    <div class="match__first-team-score">5</div>
                                    <div class="match__score-between">:</div>
                                    <div class="match__second-team-score">0</div>
                                </div>
                                <div class="match__second-team">
                                    <div class="match__second-team-logo"><img src="/local/templates/new_ru/img/blackDragon.png"
                                                                              alt="blackDragon"></div>
                                    <div class="match__second-team-name">Black<br>Dragon</div>
                                </div>
                            </div>
                            <a href="" class="match__button">
                                <div class="match__button-txt">Обзор матча</div>
                                <div class="match__translation"></div>
                            </a>
                        </div>
                    </div>
                    <div class="match">
                        <div class="match__block" id="next-match__block">
                            <div class="match__date-and-area">
                                <div class="match__date">10 сентября, 18:00</div>
                                <div class="match__area">Апиа арена</div>
                            </div>
                            <div class="match__versus">
                                <div class="match__first-team">
                                    <div class="match__first-team-logo"><img src="/local/templates/new_ru/img/bull.png"
                                                                             alt="bull"></div>
                                    <div class="match__first-team-name" id="GO-first">GO</div>
                                </div>
                                <div class="match__score">
                                    <div class="match__first-team-score">-</div>
                                    <div class="match__score-between">:</div>
                                    <div class="match__second-team-score">-</div>
                                </div>
                                <div class="match__second-team">
                                    <div class="match__second-team-logo"><img src="/local/templates/new_ru/img/blackDragon.png"
                                                                              alt="blackDragon"></div>
                                    <div class="match__second-team-name">Black<br>Dragon</div>
                                </div>
                            </div>
                            <a href="" class="match__button">
                                <div class="match__button-txt">Обзор матча</div>
                                <div class="match__translation"></div>
                            </a>
                        </div>
                    </div>
                    <div class="match">
                        <div class="match__block" id="next-match__block">
                            <div class="match__date-and-area">
                                <div class="match__date">10 сентября, 18:00</div>
                                <div class="match__area">Апиа арена</div>
                            </div>
                            <div class="match__versus">
                                <div class="match__first-team">
                                    <div class="match__first-team-logo"><img src="/local/templates/new_ru/img/bull.png"
                                                                             alt="bull"></div>
                                    <div class="match__first-team-name" id="GO-first">GO</div>
                                </div>
                                <div class="match__score">
                                    <div class="match__first-team-score">-</div>
                                    <div class="match__score-between">:</div>
                                    <div class="match__second-team-score">-</div>
                                </div>
                                <div class="match__second-team">
                                    <div class="match__second-team-logo"><img src="/local/templates/new_ru/img/blackDragon.png"
                                                                              alt="blackDragon"></div>
                                    <div class="match__second-team-name">Black<br>Dragon</div>
                                </div>
                            </div>
                            <a href="" class="match__button">
                                <div class="match__button-txt">Обзор матча</div>
                                <div class="match__translation"></div>
                            </a>
                        </div>
                    </div>
                    <div class="match">
                        <div class="match__block" id="next-match__block">
                            <div class="match__date-and-area">
                                <div class="match__date">10 сентября, 18:00</div>
                                <div class="match__area">Апиа арена</div>
                            </div>
                            <div class="match__versus">
                                <div class="match__first-team">
                                    <div class="match__first-team-logo"><img src="/local/templates/new_ru/img/bull.png"
                                                                             alt="bull"></div>
                                    <div class="match__first-team-name" id="GO-first">GO</div>
                                </div>
                                <div class="match__score">
                                    <div class="match__first-team-score">-</div>
                                    <div class="match__score-between">:</div>
                                    <div class="match__second-team-score">-</div>
                                </div>
                                <div class="match__second-team">
                                    <div class="match__second-team-logo"><img src="/local/templates/new_ru/img/blackDragon.png"
                                                                              alt="blackDragon"></div>
                                    <div class="match__second-team-name">Black<br>Dragon</div>
                                </div>
                            </div>
                            <a class="match__button">
                                <div class="match__button-txt">Обзор матча</div>
                                <div class="match__translation"></div>
                            </a>
                        </div>
                    </div>
                    <div class="match">
                        <div class="match__block" id="next-match__block">
                            <div class="match__date-and-area">
                                <div class="match__date">10 сентября, 18:00</div>
                                <div class="match__area">Апиа арена</div>
                            </div>
                            <div class="match__versus">
                                <div class="match__first-team">
                                    <div class="match__first-team-logo"><img src="/local/templates/new_ru/img/bull.png"
                                                                             alt="bull"></div>
                                    <div class="match__first-team-name" id="GO-first">GO</div>
                                </div>
                                <div class="match__score">
                                    <div class="match__first-team-score">-</div>
                                    <div class="match__score-between">:</div>
                                    <div class="match__second-team-score">-</div>
                                </div>
                                <div class="match__second-team">
                                    <div class="match__second-team-logo"><img src="/local/templates/new_ru/img/blackDragon.png"
                                                                              alt="blackDragon"></div>
                                    <div class="match__second-team-name">Black<br>Dragon</div>
                                </div>
                            </div>
                            <a href="" class="match__button">
                                <div class="match__button-txt">Обзор матча</div>
                                <div class="match__translation"></div>
                            </a>
                        </div>
                    </div>
                    <div class="match">
                        <div class="match__block" id="next-match__block">
                            <div class="match__date-and-area">
                                <div class="match__date">10 сентября, 18:00</div>
                                <div class="match__area">Апиа арена</div>
                            </div>
                            <div class="match__versus">
                                <div class="match__first-team">
                                    <div class="match__first-team-logo"><img src="/local/templates/new_ru/img/bull.png"
                                                                             alt="bull"></div>
                                    <div class="match__first-team-name" id="GO-first">GO</div>
                                </div>
                                <div class="match__score">
                                    <div class="match__first-team-score">-</div>
                                    <div class="match__score-between">:</div>
                                    <div class="match__second-team-score">-</div>
                                </div>
                                <div class="match__second-team">
                                    <div class="match__second-team-logo"><img src="/local/templates/new_ru/img/blackDragon.png"
                                                                              alt="blackDragon"></div>
                                    <div class="match__second-team-name">Black<br>Dragon</div>
                                </div>
                            </div>
                            <a href="" class="match__button">
                                <div class="match__button-txt">Обзор матча</div>
                                <div class="match__translation"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>