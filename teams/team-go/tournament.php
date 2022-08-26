<?
$PROPERTY_TEAM = 6;//ID Команды
$GAMERS = 18;//Игроки
$SEZONS = 20;//Сезоны
$REG_SEASON = 24;//ID рег. чемпионата
?>
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
                    <div class="go-tournament__about-txt"><?= $ar_header_fields["DETAIL_TEXT"]; ?></div>
                    <div class="go-tournament__progress invisible">
                        <div class="go-tournament__progress-stats">
                            <div class="go-tournament__progress-victories">
                                <div class="go-tournament__progress-title">Побед</div>
                                <span data-text="<?= $ar_header_values["WINS"]["VALUE"] ?>"
                                      id="victories-count"><?= $ar_header_values["WINS"]["VALUE"] ?></span>
                            </div>
                            <div class="go-tournament__progress-points">
                                <div class="go-tournament__progress-title">Очков</div>
                                <span data-text="<?= $ar_header_values["GLASSES"]["VALUE"] ?>"
                                      id="points-count"><?= $ar_header_values["GLASSES"]["VALUE"] ?></span>
                            </div>
                            <div class="go-tournament__progress-place">
                                <div class="go-tournament__progress-title">Место</div>
                                <span data-text="<?= $ar_header_values["PLACE"]["VALUE"] ?>"
                                      id="place"><?= $ar_header_values["PLACE"]["VALUE"] ?></span>
                            </div>
                        </div>
                    </div>
                    <? $arrFilter = array("PROPERTY_TEAM" => $PROPERTY_TEAM); ?>
                    <? $APPLICATION->IncludeComponent(
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
                <div class="go-tournament__progress">
                    <div class="go-tournament__progress-background" id="team-background-logo"></div>
                    <div class="go-tournament__progress-stats">
                        <div class="go-tournament__progress-victories">
                            <div class="go-tournament__progress-title">Побед</div>
                            <span data-text="<?= $ar_header_values["WINS"]["VALUE"] ?>"
                                  id="victories-count"><?= $ar_header_values["WINS"]["VALUE"] ?></span>
                        </div>
                        <div class="go-tournament__progress-points">
                            <div class="go-tournament__progress-title">Очков</div>
                            <span data-text="<?= $ar_header_values["GLASSES"]["VALUE"] ?>"
                                  id="points-count"><?= $ar_header_values["GLASSES"]["VALUE"] ?></span>
                        </div>
                        <div class="go-tournament__progress-place">
                            <div class="go-tournament__progress-title">Место</div>
                            <span data-text="<?= $ar_header_values["PLACE"]["VALUE"] ?>"
                                  id="place"><?= $ar_header_values["PLACE"]["VALUE"] ?></span>
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
                <div class="championship-course__select-block">
                    <? //Выбор сезона получаем данные из инфоблока
                    $iterator = \Bitrix\Iblock\ElementTable::query()
                        ->setFilter(['IBLOCK.CODE' => 'seasons', 'ACTIVE' => 'Y'])
                        ->setSelect(['ID', 'NAME'])
                        ->setOrder(['SORT' => 'desc'])
                        ->exec();
                    ?>
                    <select class="championship-course__period" id="championship-course__period">
                        <? while ($sezon = $iterator->fetch()) { ?>
                            <option value="<?= $sezon["ID"] ?>"><?= $sezon["NAME"] ?></option>
                            <?
                        } ?>
                    </select>
                </div>
                <div class="championship-course__select-block">
                    <select class="championship-course__period" onchange="window.location.href=this.options[this.selectedIndex].value">
                        <option VALUE="/teams/team-go/tournament/">Регулярный чемпионат</option>
                        <option VALUE="/teams/team-go/tournament/playoff/">Плей-офф</option>
                    </select>
                </div>
            </div>
            <div class="championship-course__content" id="championship-course__content">
                <?
                $arParams = array(
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
                    "SORT_FIELD1" => "PROPERTY_POINTS",
                    "SORT_FIELD2" => "NAME",
                    "SORT_ORDER1" => "DESC",
                    "SORT_ORDER2" => "DESC",
                    "STRICT_SECTION_CHECK" => "N",
                    "USE_FILTER" => "Y",
                    "DISPLAY_DATE" => "Y",
                    "DISPLAY_NAME" => "Y",
                    "DISPLAY_PICTURE" => "Y",
                    "DISPLAY_PREVIEW_TEXT" => "Y"
                );
                ?>
                <div id="regular_season-wrapper">
                    <!--  ajax рендоринт компонента -->
                    <?
                    //                    $APPLICATION->IncludeComponent(
                    //                        "custom:section.detail",
                    //                        "regular_season",
                    //                        $arParams,
                    //                        false
                    //                    );
                    ?>
                </div>
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
                        'IBLOCK_ID' => $GAMERS,
                        'PROPERTY_BEST_VALUE' => 'Да',
                        'PROPERTY_TEAM' => $PROPERTY_TEAM,

                    ];
                    $best_players = CIBlockElement::GetList([], $arFilter, false, false, $arSelect);

                    while ($best_player = $best_players->GetNext()) {
                        $best_player['DETAIL_PAGE_URL'] = '/teams/team-go/players/?ELEMENT_ID='.$best_player['ID'];
                        ?>
                        <a class="go-tournament__staff-person" href="<?= $best_player['DETAIL_PAGE_URL'] ?>">
                            <div class="go-tournament__players-staff-person-background">
                                <div class="go-tournament__players-staff-person-image"><img
                                            src="<?= CFile::GetPath($best_player["PREVIEW_PICTURE"]); ?>"
                                            alt="<?= $best_player["NAME"]; ?>"></div>
                            </div>
                            <div class="go-tournament__players-staff-person-progress">
                                <div class="go-tournament__players-staff-person-progress-stats">
                                    <div class="go-tournament__players-staff-person-progress-title">Голы</div>
                                    <span
                                            data-text="<?= $best_player["PROPERTY_GOLE_VALUE"]; ?>"
                                            id="goals"><?= $best_player["PROPERTY_GOLE_VALUE"]; ?></span>
                                </div>
                                <div class="go-tournament__players-staff-person-progress-stats">
                                    <div class="go-tournament__players-staff-person-progress-title">Ассисты</div>
                                    <span
                                            data-text="<?= $best_player["PROPERTY_ASSIST_VALUE"]; ?>"
                                            id="assists"><?= $best_player["PROPERTY_ASSIST_VALUE"]; ?></span>
                                </div>
                                <div class="go-tournament__players-staff-person-progress-stats">
                                    <div class="go-tournament__players-staff-person-progress-title">Игры</div>
                                    <span
                                            data-text="<?= $best_player["PROPERTY_GAME_VALUE"]; ?>"
                                            id="throws"><?= $best_player["PROPERTY_GAME_VALUE"]; ?></span>
                                </div>
                            </div>
                            <div class="go-tournament__players-staff-person-txt-block">
                                <div class="go-tournament__players-staff-person-name"><?= str_replace(' ', '<br>', $best_player["NAME"]); ?></div>
                                <div class="go-tournament__players-staff-person-number"><span
                                            data-text="<?= $best_player["PROPERTY_NUMBER_VALUE"]; ?>"><?= $best_player["PROPERTY_NUMBER_VALUE"]; ?></span>
                                </div>
                            </div>
                        </a>
                    <? } ?>
                </div>
            </div>
            <div class="go-tournament__title-block">
                <div class="go-tournament__title">Матчи</div>
                <div class="go-tournament__arrow">↖</div>
            </div>
            <?
            $GLOBALS['math_turnit'] = array("PROPERTY_TEAM" => $PROPERTY_TEAM);
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
		"FILTER_NAME" => "math_turnit",
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
			0 => "BTN_MATCH",
			1 => "MATCH_PLACE",
			2 => "TITLE_TEAM_1",
			3 => "TITLE_TEAM_2",
			4 => "COUNT_TEAM_1",
			5 => "COUNT_TEAM_2",
			6 => "MATCH_DATE",
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
</div>


<script>
    $('#championship-course__period').on('change', function () {
        loadRegularSeason(this);
    });

    loadRegularSeason(BX('championship-course__period'));

    function loadRegularSeason(element) {
        let $selected = $(element).find(':selected');
        let params = <?= json_encode($arParams) ?>;

        BX.ajax.runComponentAction('custom:section.detail', 'reload', {
            mode: 'class',
            data: {
                'params': params, // передаю параметры для компонента
                'filter': {'PROPERTY_SEZON': $selected.val()}
            },
            dataType: 'html',
        }).then(
            BX.delegate(function (response) {
                let processed = BX.processHTML(response.data.html, false); // парсим HTML
                let parent = BX("regular_season-wrapper");

                BX.adjust(parent, {html: processed.HTML}); // вставляем очищенный HTML
                BX.ajax.processScripts(processed.SCRIPT);  //выполняем  скрипты
            }, this),
            BX.delegate(function (response) {
                alert(response.errors[0].message);
            }, this)
        );
    }
</script>