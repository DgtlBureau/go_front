<?
$PROPERTY_TEAM = 7;//ID Команды
$GAMERS = 18;//Игроки
$SEZONS = 20;//Сезоны
$REG_SEASON = 25;//ID рег. чемпионата
?>
<div class="go-tournament">
    <div class="back-go-tournament__info">
        <div class="container">
            <div class="go-tournament__info">
                <div class="go-tournament__about">
                    <div class="go-tournament__about-title">
                        <p>Хоккейная команда</p>
                        <p>Команда</p>
                        <div class="go-tournament__team-name orange"><span data-text="Gohockey" id="GO">Gohockey</span></div>
                    </div>
                    <div class="go-tournament__about-txt"><?=$ar_header_fields["DETAIL_TEXT"];?></div>
                   <div class="go-tournament__progress invisible">
						<div class="go-tournament__progress-stats">
							<div class="go-tournament__progress-victories">
								<div class="go-tournament__progress-title">Побед</div>
								<span data-text="<?=$ar_header_values["WINS"]["VALUE"]?>" id="victories-count"><?=$ar_header_values["WINS"]["VALUE"]?></span>
							</div>
                            <div class="go-tournament__progress-points">
								<div class="go-tournament__progress-title">Очков</div>
								<span data-text="<?=$ar_header_values["GLASSES"]["VALUE"]?>"  id="points-count"><?=$ar_header_values["GLASSES"]["VALUE"]?></span>
                            </div>
                            <div class="go-tournament__progress-place">
                            <div class="go-tournament__progress-title">Место</div>
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
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "N",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "N"
	),
	false
);
                    ?> 
                </div>
               <div class="go-tournament__progress">
                    <div class="go-tournament__progress-background" id="team-background-logo"></div>
                    <div class="go-tournament__progress-stats">
                        <div class="go-tournament__progress-victories">
                            <div class="go-tournament__progress-title">Побед</div>
							<span data-text="<?=$ar_header_values["WINS"]["VALUE"]?>" id="victories-count"><?=$ar_header_values["WINS"]["VALUE"]?></span>
                        </div>
                        <div class="go-tournament__progress-points">
                            <div class="go-tournament__progress-title">Очков</div>
							<span data-text="<?=$ar_header_values["GLASSES"]["VALUE"]?>" id="points-count"><?=$ar_header_values["GLASSES"]["VALUE"]?></span>
                        </div>
                        <div class="go-tournament__progress-place">
                            <div class="go-tournament__progress-title">Место</div><span data-text="<?=$ar_header_values["PLACE"]["VALUE"]?>" id="place"><?=$ar_header_values["PLACE"]["VALUE"]?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="back-go-tournament__info-nav">
        <div class="container">
            <div class="go-tournament__info-nav">
                <a href="/teams/team-gohockey/" class="go-tournament__nav-item">
                        <p>Состав команды</p>
                        <p>Состав</p>
                </a>
                <div href="/teams/team-gohockey/tournament/" class="go-tournament__nav-item">Турниры</div>
                <a class="go-tournament__nav-item" href="/teams/team-gohockey/news/">Новости</a>
            </div>
        </div>
    </div>

    <div class="go-tournament__line-up">
        <div class="championship-course">
            <div class="championship-course__top">
                <div class="championship-course__title">Регулярный чемпионат</div>
                <a href="/teams/team-gohockey/tournament/playoff/" class="championship-course__stage">Плей-офф</a>
                <div class="championship-course__select-block">
					<? //Выбор сезона получаем данные из инфоблока
        	        $arSelect = ['ID', 'NAME'];
                    $arFilter = [
                        'IBLOCK_ID'     => $SEZONS,
                        'ACTIVE'		=> 'Y',
                    ];
                    $sezons = CIBlockElement::GetList([], $arFilter, false, false, $arSelect);
					?>
					<select class="championship-course__period">
						 <?while($sezon = $sezons->GetNext()){?>
							<option value="<?=$sezon["ID"]?>"><?=$sezon["NAME"]?></option>
						 <?}?>
					</select>
				</div>
                <div class="championship-course__select-block">
					<select class="championship-course__period">
                        <option>Регулярный чемпионат</option>
                        <option>Плей-офф</option>
                    </select>
				</div>
            </div>
            <div class="championship-course__content">
			<?
			$SEZONSELECT = 68; // сюда записываем полученный ID из option
			$SezonFilter=array("PROPERTY_SEZON"=>$SEZONSELECT);?>
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
		"FILTER_NAME" => "SezonFilter",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => $REG_SEASON,
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
        	        $arSelect = ['ID', 'NAME', 'DETAIL_PAGE_URL', 'IBLOCK_ID', 'PREVIEW_PICTURE', 'PROPERTY_GAME', 'PROPERTY_GOLE', 'PROPERTY_ASSIST', 'PROPERTY_BEST', 'PROPERTY_NUMBER', 'PROPERTY_TEAM'];
                    $arFilter = [
                        'IBLOCK_ID'     => $GAMERS,
                        'PROPERTY_BEST_VALUE' => 'Да',
						'PROPERTY_TEAM' => $PROPERTY_TEAM,
						
                    ];
                    $best_players = CIBlockElement::GetList([], $arFilter, false, false, $arSelect);
                    
                    while($best_player = $best_players->GetNext()){?>
                    <a class="go-tournament__staff-person" href="<?=$best_player['DETAIL_PAGE_URL']?>">
                        <div class="go-tournament__players-staff-person-background_blue">
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
                            <div class="go-tournament__players-staff-person-number_orange"><span data-text="<?=$best_player["PROPERTY_NUMBER_VALUE"];?>"><?=$best_player["PROPERTY_NUMBER_VALUE"];?></span>
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
				<?
				$GLOBALS['math_turnit'] = array("PROPERTY_TEAM"=>$PROPERTY_TEAM);
				$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"match_turnir", 
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
		"COMPONENT_TEMPLATE" => "match_turnir",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_TEXT",
			2 => "PREVIEW_PICTURE",
			3 => "DATE_ACTIVE_FROM",
			4 => "",
		),
		"FILTER_NAME" => 'math_turnit',
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
		"PAGER_TITLE" => "",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "MATCH_DATE",
			1 => "BTN_MATCH",
			2 => "MATCH_PLACE",
			3 => "TITLE_TEAM_1",
			4 => "TITLE_TEAM_2",
			5 => "COUNT_TEAM_1",
			6 => "COUNT_TEAM_2",
			7 => "PROP_0",
			8 => "PHOTO_TEAM",
			9 => "",
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
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	),
	false
);?>
        </div>
    </div>
</div>