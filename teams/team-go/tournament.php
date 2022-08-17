
<div class="go-tournament">
    <div class="back-go-tournament__info">
        <div class="container">
            <div class="go-tournament__info">
                <div class="go-tournament__about">
                    <div class="go-tournament__about-title">
                        <p>Хоккейная команда</p>
                        <p>Команда</p>
                        <div class="go-tournament__team-name"><span data-text="GO" id="GO">GO</span></div>
                    </div>
                    <div class="go-tournament__about-txt"><?=$ar_header_fields["DETAIL_TEXT"];?></div>
                    <div class="go-tournament__progress invisible">
                        <div class="go-tournament__progress-stats">
                            <div class="go-tournament__progress-victories">
                                <div class="go-tournament__progress-title">Побед</div><span data-text="13"
                                                                                            id="victories-count">13</span>
                            </div>
                            <div class="go-tournament__progress-points">
                                <div class="go-tournament__progress-title">Очков</div><span data-text="7"
                                                                                            id="points-count">7</span>
                            </div>
                            <div class="go-tournament__progress-place">
                                <div class="go-tournament__progress-title">Место</div><span data-text="4"
                                                                                            id="place">4</span>
                            </div>
                        </div>
                    </div>
                    <?$arrFilter=array("PROPERTY_TEAM"=>6);?>
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
                <div class="go-tournament__progress">
                    <div class="go-tournament__progress-background" id="team-background-logo"></div>
                    <div class="go-tournament__progress-stats">
                        <div class="go-tournament__progress-victories">
                            <div class="go-tournament__progress-title">Побед</div><span data-text="13"
                                                                                        id="victories-count">13</span>
                        </div>
                        <div class="go-tournament__progress-points">
                            <div class="go-tournament__progress-title">Очков</div><span data-text="7"
                                                                                        id="points-count">7</span>
                        </div>
                        <div class="go-tournament__progress-place">
                            <div class="go-tournament__progress-title">Место</div><span data-text="4" id="place">4</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="back-go-tournament__info-nav">
        <div class="container">
            <div class="go-tournament__info-nav">
                <a href="/teams/team-go/" class="go-tournament__nav-item">
                        <p>Состав команды</p>
                        <p>Состав</p>
                </a>
                <div href="/teams/team-go/tournament/" class="go-tournament__nav-item">Турниры</div>
                <a class="go-tournament__nav-item" href="/teams/team-go/news/">Новости</a>
            </div>
        </div>
    </div>

    <div class="go-tournament__line-up">
        <div class="championship-course">
            <div class="championship-course__top">
                <div class="championship-course__title">Регулярный чемпионат</div>
                <a href="/teams/team-go/tournament/playoff/" class="championship-course__stage">Плей-офф</a>
                <div class="championship-course__select-block"><select class="championship-course__period">
                        <option>СЕЗОН 21/22</option>
                        <option>СЕЗОН 22/23</option>
                    </select></div>
                <div class="championship-course__select-block"><select class="championship-course__period">
                        <option>Регулярный чемпионат</option>
                        <option>Плей-офф</option>
                    </select></div>
            </div>
            <div class="championship-course__content">
			<?$arrFilter=array("PROPERTY_TEAM"=>6);?>
                    <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"regular_season", 
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
		"COMPONENT_TEMPLATE" => "regular_season",
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
		"IBLOCK_ID" => "24",
		"IBLOCK_TYPE" => "team",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
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
			0 => "POINTS",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "PROPERTY_POINTS",
		"SORT_BY2" => "NAME",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "DESC",
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
        </div>
        <div class="go-tournament__staff-block">
            <div class="go-tournament__title-block">
                <div class="go-tournament__title">Лучшие игроки</div>
                <div class="go-tournament__arrow">↖</div>
            </div>
            <div class="go-tournament__swiper-block">
                <div class="go-tournament__swiper">
                    <?
        	        $arSelect = ['ID', 'NAME', 'DETAIL_PAGE_URL', 'IBLOCK_ID', 'PREVIEW_PICTURE', 'PROPERTY_GAME', 'PROPERTY_GOLE', 'PROPERTY_ASSIST', 'PROPERTY_BEST', 'PROPERTY_NUMBER'];
                    $arFilter = [
                        'IBLOCK_ID'     => 18,
                        'PROPERTY_BEST_VALUE' => 'Да',
                    ];
                    $best_players = CIBlockElement::GetList([], $arFilter, false, false, $arSelect);
                    
                    while($best_player = $best_players->GetNext()){?>
                    <a class="go-tournament__staff-person" href="<?=$best_player['DETAIL_PAGE_URL']?>">
                        <div class="go-tournament__players-staff-person-background">
                            <div class="go-tournament__players-staff-person-image"><img
                                        src="<?=CFile::GetPath($best_player["PREVIEW_PICTURE"]);?>" alt="<?=$best_player["NAME"];?>"></div>
                        </div>
                        <div class="go-tournament__players-staff-person-progress">
                            <div class="go-tournament__players-staff-person-progress-stats">
                                <div class="go-tournament__players-staff-person-progress-title">Голы</div><span
                                        data-text="<?=$best_player["PROPERTY_GOLE_VALUE"];?>" id="goals"><?=$best_player["PROPERTY_GOLE_VALUE"];?></span>
                            </div>
                            <div class="go-tournament__players-staff-person-progress-stats">
                                <div class="go-tournament__players-staff-person-progress-title">Ассисты</div><span
                                        data-text="<?=$best_player["PROPERTY_ASSIST_VALUE"];?>" id="assists"><?=$best_player["PROPERTY_ASSIST_VALUE"];?></span>
                            </div>
                            <div class="go-tournament__players-staff-person-progress-stats">
                                <div class="go-tournament__players-staff-person-progress-title">Игры</div><span
                                        data-text="<?=$best_player["PROPERTY_GAME_VALUE"];?>" id="throws"><?=$best_player["PROPERTY_GAME_VALUE"];?></span>
                            </div>
                        </div>
                        <div class="go-tournament__players-staff-person-txt-block">
                            <div class="go-tournament__players-staff-person-name"><?=str_replace(' ', '<br>', $best_player["NAME"]);?></div>
                            <div class="go-tournament__players-staff-person-number"><span data-text="<?=$best_player["PROPERTY_NUMBER_VALUE"];?>"><?=$best_player["PROPERTY_NUMBER_VALUE"];?></span>
                            </div>
                        </div>
                    </a>
                     <?}?> 
                </div>
            </div>
            <div class="go-tournament__title-block">
                <div class="go-tournament__title">Матчи</div>
                <div class="go-tournament__arrow">↖</div>
            </div>
            <div class="go-tournament__swiper-block">
                <div class="go-tournament__swiper">
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