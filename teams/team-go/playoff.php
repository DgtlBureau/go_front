<?
$PROPERTY_TEAM = 6;//ID Команды
$SEZONS = 20;//Сезоны
$REG_SEASON = 24;//ID рег. чемпионата
?>
<div class="go-team">
    <div class="back-go-final__info">
        <div class="container">
            <div class="go-final__info">
                <div class="go-final__about">
                    <div class="go-final__about-title">
                        <p>Хоккейная команда</p>
                        <p>Команда</p>
                        <div class="go-team__team-name"><span data-text="<?=$GLOBALS['SITE_SETTINGS']['go']['LOGO_TEXT']?>" id="GO"><?=$GLOBALS['SITE_SETTINGS']['go']['LOGO_TEXT']?></span></div>
                    </div>
                    <div class="go-final__about-txt"><?= $ar_header_fields["DETAIL_TEXT"]; ?></div>
                    <div class="go-final__progress invisible">
                        <div class="go-final__progress-stats">
                            <div class="go-final__progress-victories">
                                <div class="go-final__progress-title">Побед</div>
                                <span data-text="<?= $ar_header_values["WINS"]["VALUE"] ?>"
                                      id="victories-count"><?= $ar_header_values["WINS"]["VALUE"] ?></span>
                            </div>
                            <div class="go-final__progress-points">
                                <div class="go-final__progress-title">Очков</div>
                                <span data-text="<?= $ar_header_values["GLASSES"]["VALUE"] ?>"
                                      id="points-count"><?= $ar_header_values["GLASSES"]["VALUE"] ?></span>
                            </div>
                            <div class="go-final__progress-place">
                                <div class="go-final__progress-title">Место</div>
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
                <div class="go-final__progress">
                    <div class="go-final__progress-background" id="team-background-logo"></div>
                    <div class="go-final__progress-stats">
                        <div class="go-final__progress-victories">
                            <div class="go-final__progress-title">Побед</div>
                            <span data-text="<?= $ar_header_values["WINS"]["VALUE"] ?>"
                                  id="victories-count"><?= $ar_header_values["WINS"]["VALUE"] ?></span>
                        </div>
                        <div class="go-final__progress-points">
                            <div class="go-final__progress-title">Очков</div>
                            <span data-text="<?= $ar_header_values["GLASSES"]["VALUE"] ?>"
                                  id="points-count"><?= $ar_header_values["GLASSES"]["VALUE"] ?></span>
                        </div>
                        <div class="go-final__progress-place">
                            <div class="go-final__progress-title">Место</div>
                            <span data-text="<?= $ar_header_values["PLACE"]["VALUE"] ?>"
                                  id="place"><?= $ar_header_values["PLACE"]["VALUE"] ?></span>
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
                <div class="go-final__nav-item" href="/teams/team-go/tournament/">Турниры</div>
                <a class="go-final__nav-item" href="/teams/team-go/news/">Новости</a>
            </div>
        </div>
    </div>
    <div class="go-final__line-up">
        <div class="championship-course">
            <div class="championship-course__top">
                <a href="https://go-family.ru/teams/team-go/tournament/" class="championship-course__stage">Регулярный
                    чемпионат</a>
                <div class="championship-course__title">Плей-офф</div>
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
                        <option VALUE="/teams/team-go/tournament/playoff/">Плей-офф</option>
                        <option VALUE="/teams/team-go/tournament/">Регулярный чемпионат</option>
					</select>
				</div>
            </div>
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
                "COMPONENT_TEMPLATE" => "playoff",
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
                "IBLOCK_ID" => "27",
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
                    0 => "",
                    1 => "POINTS",
                    2 => "",
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
            );
            ?>
            <div id="playoff-wrapper">
                <!--  ajax рендоринт компонента -->
            </div>

            <div class="go-final__title-block">
                <div class="go-final__title">Матчи</div>
                <div class="go-final__arrow">↖</div>
            </div>
            <?
            $GLOBALS['math_turnit'] = array("PROPERTY_TEAM" => $PROPERTY_TEAM);
            $APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "match_turnir",
                array(
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "ADD_SECTIONS_CHAIN" => "N",
                    "PROPERTY_TEAM" => $PROPERTY_TEAM,//ID команды
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
            ); ?>
        </div>
    </div>
</div>

<script>
    $('#championship-course__period').on('change', function () {
        loadPlayoff(this);
    });
    loadPlayoff(BX('championship-course__period'));
    function loadPlayoff(element) {
        let $selected = $(element).find(':selected');
        let params = <?= json_encode($arParams) ?>;


        BX.ajax.runComponentAction('custom:section.detail', 'reload', {
            mode: 'class',
            data: {
                'params': params, // передаю параметры для компонента
                'filter': {'PROPERTY_SEAZON': $selected.val()}
            },
            dataType: 'html',
        }).then(
            BX.delegate(function (response) {
                let processed = BX.processHTML(response.data.html, false); // парсим HTML
                let parent = BX("playoff-wrapper");

                BX.adjust(parent, {html: processed.HTML}); // вставляем очищенный HTML
                BX.ajax.processScripts(processed.SCRIPT);  //выполняем  скрипты
            }, this),
            BX.delegate(function (response) {
                alert(response.errors[0].message);
            }, this)
        );
    }
</script>

<style>
    .go-final-bracket__score_winner {
        background: <?=$GLOBALS['SITE_SETTINGS']['go']['COLOR_MAIN']?> !important;
    }
</style>