<div class="go-news">
    <div class="go-news__info">
        <div class="go-news__about">
            <div class="go-news__about-title">
                <p>Хоккейная команда</p>
                <p>Команда</p>
                <div class="go-news__team-name"><span data-text="Gohockey" id="Gohockey">Gohockey</span></div>
            </div>
            <div class="go-news__about-txt">Несколько лет назад мы решили популяризировать любительский хоккей и
                создать престижный дивизион с шикарным трофее</div>
            <div class="go-news__progress invisible">
                <div class="go-news__progress-stats">
                    <div class="go-news__progress-victories">
                        <div class="go-news__progress-title">Побед</div><span data-text="13"
                                                                              id="victories-count">13</span>
                    </div>
                    <div class="go-news__progress-points">
                        <div class="go-news__progress-title">Очков</div><span data-text="7"
                                                                              id="points-count">7</span>
                    </div>
                    <div class="go-news__progress-place">
                        <div class="go-news__progress-title">Место</div><span data-text="4" id="place">4</span>
                    </div>
                </div>
            </div>
            <div class="results">
                <div class="results__title">Достижения</div>
                <div class="results__block">
                    <div class="results__image"><img src="/local/templates/new_ru/img/cupOrange.png" alt="resultImage"></div>
                    <div class="results__txt">
                        <div class="results__competitions">Чемпионат ЛЕТО-2021</div>
                        <div class="results__place">1 место</div>
                    </div>
                </div>
                <div class="results__block">
                    <div class="results__image"><img src="/local/templates/new_ru/img/cupOrange.png" alt="resultImage"></div>
                    <div class="results__txt">
                        <div class="results__competitions">Чемпионат ЛЕТО-2021</div>
                        <div class="results__place">1 место</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="go-news__progress">
            <div class="go-news__progress-background" id="team-background-logo"></div>
            <div class="go-news__progress-stats">
                <div class="go-news__progress-victories">
                    <div class="go-news__progress-title">Побед</div><span data-text="13" id="victories-count">13</span>
                </div>
                <div class="go-news__progress-points">
                    <div class="go-news__progress-title">Очков</div><span data-text="7" id="points-count">7</span>
                </div>
                <div class="go-news__progress-place">
                    <div class="go-news__progress-title">Место</div><span data-text="4" id="place">4</span>
                </div>
            </div>
        </div>
    </div>
    <div class="go-news__info-nav">
        <div class="go-news__nav-item">
            <a href="/teams/team-gohockey/" class="go-news__nav-item">
                <p>Состав команды</p>
                <p>Состав</p>
            </a>
        </div>
        <div class="go-news__nav-item">
            <a href="/teams/team-gohockey/tournament/">Турниры</a>
        </div>
        <div class="go-news__nav-item">
            <a href="/teams/team-gohockey/news/">Новости</a>
        </div>
    </div>
    <div class="go-news__content">
        <div class="championship-course">
            <div class="championship-course__top">
                <div class="championship-course__title">Новости команды</div>
                <div class="championship-course__select-block"><select class="championship-course__period">
                        <option>ВСЕ РУБРИКИ</option>
                        <option>Чемпионат</option>
                    </select></div>
            </div>
        </div>
        <div class="go-news__news-items">

            <?$APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "news_go",
                array(
                    "ACTIVE_DATE_FORMAT" => "j F Y",
                    "ADD_SECTIONS_CHAIN" => "Y",
                    "AJAX_MODE" => "N",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "CACHE_FILTER" => "N",
                    "CACHE_GROUPS" => "N",
                    "CACHE_TIME" => "36000000",
                    "CACHE_TYPE" => "A",
                    "CHECK_DATES" => "Y",
                    "COMPONENT_TEMPLATE" => "news",
                    "DETAIL_URL" => "",
                    "DISPLAY_BOTTOM_PAGER" => "N",
                    "DISPLAY_TOP_PAGER" => "N",
                    "FIELD_CODE" => array(
                        0 => "DETAIL_PICTURE",
                        1 => "DATE_CREATE",
                        2 => "",
                    ),
                    "FILTER_NAME" => "",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                    "IBLOCK_ID" => "5",
                    "IBLOCK_TYPE" => "content",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                    "INCLUDE_SUBSECTIONS" => "Y",
                    "MESSAGE_404" => "",
                    "NEWS_COUNT" => "40",
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
                    "PROPERTY_CODE" => array(
                        0 => "",
                        1 => "PROP_0",
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
                    "STRICT_SECTION_CHECK" => "N"
                ),
                false
            );?>

            <div class="go-news__btn-block">
                <div class="go-news__btn">Все новости</div>
            </div>
        </div>
        <div class="social-content-block">
            <div class="section__title-block">
                <div class="section__title social-content-block__title" style="font-size: 42px; line-height: 52px; letter-spacing: .02em; font-weight: 600; ">
                    Instagram
                </div>
                <div class="section__arrow">↙</div>
            </div>
            <div class="social-content-block__content"><a class="social-content-block__item" href=""><img
                        src="/local/templates/new_ru/img/soc-item1.png" alt="soc-item"></a><a
                    class="social-content-block__item" href=""><img src="/local/templates/new_ru/img/soc-item1.png"
                                                                    alt="soc-item"></a><a class="social-content-block__item" href=""><img
                        src="/local/templates/new_ru/img/soc-item1.png" alt="soc-item"></a><a
                    class="social-content-block__item" href=""><img src="/local/templates/new_ru/img/soc-item1.png"
                                                                    alt="soc-item"></a></div>
        </div>
        <div class="social-content-block">
            <div class="section__title-block">
                <div class="section__title social-content-block__title" style="font-size: 42px; line-height: 52px; letter-spacing: .02em; font-weight: 600; ">
                    VK
                </div>
                <div class="section__arrow">↙</div>
            </div>
            <div class="social-content-block__content"><a class="social-content-block__item" href=""><img
                        src="/local/templates/new_ru/img/soc-item1.png" alt="soc-item"></a><a
                    class="social-content-block__item" href=""><img src="/local/templates/new_ru/img/soc-item1.png"
                                                                    alt="soc-item"></a><a class="social-content-block__item" href=""><img
                        src="/local/templates/new_ru/img/soc-item1.png" alt="soc-item"></a><a
                    class="social-content-block__item" href=""><img src="/local/templates/new_ru/img/soc-item1.png"
                                                                    alt="soc-item"></a></div>
        </div>
    </div>
</div>