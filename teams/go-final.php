<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("GO-Final");
?><div class="go-final">
    <div class="go-final__info">
        <div class="go-final__about">
            <div class="go-final__about-title">
                <p>Хоккейная команда</p>
                <p>Команда</p>
                <div class="go-final__team-name"><span data-text="<?=$GLOBALS['SITE_SETTINGS']['go']['LOGO_TEXT']?>" id="GO"><?=$GLOBALS['SITE_SETTINGS']['go']['LOGO_TEXT']?></span></div>
            </div>
            <div class="go-final__about-txt">Несколько лет назад мы решили популяризировать любительский хоккей
                и создать престижный дивизион с шикарным трофее</div>
            <div class="go-final__progress invisible">
                <div class="go-final__progress-stats">
                    <div class="go-final__progress-victories">
                        <div class="go-final__progress-title">Побед</div><span data-text="13"
                            id="victories-count">13</span>
                    </div>
                    <div class="go-final__progress-points">
                        <div class="go-final__progress-title">Очков</div><span data-text="7"
                            id="points-count">7</span>
                    </div>
                    <div class="go-final__progress-place">
                        <div class="go-final__progress-title">Место</div><span data-text="4"
                            id="place">4</span>
                    </div>
                </div>
            </div>
            <div class="results">
                <div class="results__title">Достижения</div>
                <div class="results__block">
                    <div class="results__image"><img src="/local/templates/new_ru/img/cup.png" alt="violetCup"></div>
                    <div class="results__txt">
                        <div class="results__competitions">Чемпионат ЛЕТО-2021</div>
                        <div class="results__place">1 место</div>
                    </div>
                </div>
                <div class="results__block">
                    <div class="results__image"><img src="/local/templates/new_ru/img/cup.png" alt="violetCup"></div>
                    <div class="results__txt">
                        <div class="results__competitions">Чемпионат ЛЕТО-2021</div>
                        <div class="results__place">1 место</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="go-final__progress">
            <div class="go-final__progress-background" id="team-background-logo"></div>
            <div class="go-final__progress-stats">
                <div class="go-final__progress-victories">
                    <div class="go-final__progress-title">Побед</div><span data-text="13"
                        id="victories-count">13</span>
                </div>
                <div class="go-final__progress-points">
                    <div class="go-final__progress-title">Очков</div><span data-text="7"
                        id="points-count">7</span>
                </div>
                <div class="go-final__progress-place">
                    <div class="go-final__progress-title">Место</div><span data-text="4" id="place">4</span>
                </div>
            </div>
        </div>
    </div>
    <div class="go-final__info-nav">
        <div class="go-final__nav-item">
            <p>Состав команды</p>
            <p>Состав</p>
        </div>
        <div class="go-final__nav-item">Турниры</div>
        <div class="go-final__nav-item">Новости</div>
    </div>
    <div class="go-final__line-up">
        <div class="championship-course">
            <div class="championship-course__top">
                <div class="championship-course__stage">Регулярный чемпионат</div>
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
                                    <div class="match__first-team-name" id="GO-first"><?=$GLOBALS['SITE_SETTINGS']['go']['LOGO_TEXT']?></div>
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
                            <div class="match__button">
                                <div class="match__button-txt">Обзор матча</div>
                                <div class="match__translation airOff"><img src="/local/templates/new_ru/img/translation.png"
                                        alt="translation"></div>
                            </div>
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
                                    <div class="match__first-team-name" id="GO-first"><?=$GLOBALS['SITE_SETTINGS']['go']['LOGO_TEXT']?></div>
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
                            <div class="match__button">
                                <div class="match__button-txt">Обзор матча</div>
                                <div class="match__translation airOff"><img src="/local/templates/new_ru/img/translation.png"
                                        alt="translation"></div>
                            </div>
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
                                    <div class="match__first-team-name" id="GO-first"><?=$GLOBALS['SITE_SETTINGS']['go']['LOGO_TEXT']?></div>
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
                            <div class="match__button">
                                <div class="match__button-txt">Обзор матча</div>
                                <div class="match__translation"><img src="/local/templates/new_ru/img/translation.png"
                                        alt="translation"></div>
                            </div>
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
                                    <div class="match__first-team-name" id="GO-first"><?=$GLOBALS['SITE_SETTINGS']['go']['LOGO_TEXT']?></div>
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
                            <div class="match__button">
                                <div class="match__button-txt">Обзор матча</div>
                                <div class="match__translation airOff"><img src="/local/templates/new_ru/img/translation.png"
                                        alt="translation"></div>
                            </div>
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
                                    <div class="match__first-team-name" id="GO-first"><?=$GLOBALS['SITE_SETTINGS']['go']['LOGO_TEXT']?></div>
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
                            <div class="match__button">
                                <div class="match__button-txt">Обзор матча</div>
                                <div class="match__translation airOff"><img src="/local/templates/new_ru/img/translation.png"
                                        alt="translation"></div>
                            </div>
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
                                    <div class="match__first-team-name" id="GO-first"><?=$GLOBALS['SITE_SETTINGS']['go']['LOGO_TEXT']?></div>
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
                            <div class="match__button">
                                <div class="match__button-txt">Обзор матча</div>
                                <div class="match__translation airOff"><img src="/local/templates/new_ru/img/translation.png"
                                        alt="translation"></div>
                            </div>
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
                                    <div class="match__first-team-name" id="GO-first"><?=$GLOBALS['SITE_SETTINGS']['go']['LOGO_TEXT']?></div>
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
                            <div class="match__button">
                                <div class="match__button-txt">Обзор матча</div>
                                <div class="match__translation airOff"><img src="/local/templates/new_ru/img/translation.png"
                                        alt="translation"></div>
                            </div>
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
                                    <div class="match__first-team-name" id="GO-first"><?=$GLOBALS['SITE_SETTINGS']['go']['LOGO_TEXT']?></div>
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
                            <div class="match__button">
                                <div class="match__button-txt">Обзор матча</div>
                                <div class="match__translation airOff"><img src="/local/templates/new_ru/img/translation.png"
                                        alt="translation"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.white-border {
    border: 1px solid #fff !important
}

.go-final {
    width: 100%
}

.go-final__info {
    background: -webkit-gradient(linear, left top, left bottom, from(#000000), color-stop(143.87%, rgba(0, 0, 0, 0))), url(/local/templates/new_ru/img/back.png) repeat-x;
    background: linear-gradient(180deg, #000000 0%, rgba(0, 0, 0, 0) 143.87%), url(/local/templates/new_ru/img/back.png) repeat-x;
    background-size: cover;
    height: -webkit-fit-content;
    height: -moz-fit-content;
    height: fit-content;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    padding: 110px 40px 70px 40px;
    background-size: cover;
    -ms-flex-pack: distribute;
    justify-content: space-around
}

.go-final__team-name {
    width: 100%;
    max-width: 400px;
    margin-top: auto;
    position: relative;
    right: 50px
}

.go-final__about {
    max-width: 610px;
    margin-right: 10%;
    padding-top: 40px
}

.go-final__about-title {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    font-style: normal;
    font-weight: 800;
    font-size: 60px;
    line-height: 65px;
    letter-spacing: .02em;
    color: #fff;
    margin-bottom: 20px
}

.go-final__about-title p:first-child {
    display: contents
}

.go-final__about-title p:nth-child(2) {
    display: none
}

.go-final__about-title span {
    position: relative;
    color: #d19ff9;
    -webkit-text-stroke: .16em #fff;
    -webkit-text-stroke-width: 10px;
    font-size: 60px;
    font-weight: 800
}

.go-final__about-title span::before {
    content: attr(data-text);
    position: absolute;
    -webkit-text-stroke: .02em #d19ff9;
    -webkit-text-stroke-width: 0px;
    z-index: 2
}

.go-final__about-title span::after {
    content: attr(data-text);
    position: absolute;
    -webkit-text-stroke: .02em #000;
    -webkit-text-stroke-width: 6px;
    right: 0;
    z-index: 1
}

.go-final__about-txt {
    font-family: "Montserrat";
    font-style: normal;
    font-weight: 400;
    font-size: 16px;
    line-height: 20px;
    letter-spacing: .02em;
    color: rgba(255, 255, 255, .6);
    margin-bottom: 30px
}

.go-final__progress {
    min-width: 320px;
    width: 100%;
    max-width: 515px;
    padding-left: 10px
}

.go-final__progress-background {
    background-size: 278px;
    height: 278px;
    width: 100%;
    background-position-x: center
}

.go-final__progress-stats {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between
}

.go-final__progress-title {
    font-style: normal;
    font-weight: 400;
    font-size: 20px;
    line-height: 25px;
    text-align: center;
    text-transform: uppercase;
    color: #fff;
    margin-bottom: 20px
}

.go-final__progress-victories {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center
}

.go-final__progress-victories span {
    position: relative;
    color: #000;
    -webkit-text-stroke: .16em #000;
    -webkit-text-stroke-width: 24px;
    font-size: 46px;
    line-height: 42px;
    font-weight: 800
}

.go-final__progress-victories span::before {
    content: attr(data-text);
    position: absolute;
    -webkit-text-stroke: .02em #000;
    -webkit-text-stroke-width: 2px;
    z-index: 2
}

.go-final__progress-victories span::after {
    content: attr(data-text);
    position: absolute;
    -webkit-text-stroke: .02em #fff;
    -webkit-text-stroke-width: 10px;
    right: 0;
    z-index: 1
}

.go-final__progress-points {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center
}

.go-final__progress-points span {
    position: relative;
    color: #000;
    -webkit-text-stroke: .16em #000;
    -webkit-text-stroke-width: 24px;
    font-size: 46px;
    line-height: 42px;
    font-weight: 800
}

.go-final__progress-points span::before {
    content: attr(data-text);
    position: absolute;
    -webkit-text-stroke: .02em #000;
    -webkit-text-stroke-width: 2px;
    z-index: 2
}

.go-final__progress-points span::after {
    content: attr(data-text);
    position: absolute;
    -webkit-text-stroke: .02em #fff;
    -webkit-text-stroke-width: 10px;
    right: 0;
    z-index: 1
}

.go-final__progress-place {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center
}

.go-final__progress-place span {
    position: relative;
    color: #000;
    -webkit-text-stroke: .16em #000;
    -webkit-text-stroke-width: 24px;
    font-size: 46px;
    line-height: 42px;
    font-weight: 800
}

.go-final__progress-place span::before {
    content: attr(data-text);
    position: absolute;
    -webkit-text-stroke: .02em #000;
    -webkit-text-stroke-width: 2px;
    z-index: 2
}

.go-final__progress-place span::after {
    content: attr(data-text);
    position: absolute;
    -webkit-text-stroke: .02em #fff;
    -webkit-text-stroke-width: 10px;
    right: 0;
    z-index: 1
}

.results {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    max-width: 595px;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between
}

.results__title {
    display: none
}

.results__block {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    width: 50%
}

.results__image {
    margin-right: 15px;
    height: 34px;
    padding-top: 5px
}

.results__image img {
    height: 100%
}

.results__txt {
    font-weight: 400;
    font-size: 16px;
    line-height: 20px;
    letter-spacing: .02em;
    color: #fff
}

.results__place {
    line-height: 22px;
    font-weight: 600
}

.go-final__info-nav {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    width: 100%;
    margin-top: -5px
}

.go-final__nav-item {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    height: 80px;
    background: #141414;
    font-weight: 400;
    font-size: 20px;
    line-height: 28px;
    text-align: center;
    letter-spacing: .02em;
    text-transform: uppercase;
    color: rgba(255, 255, 255, .6);
    border-right: 1px solid #000;
    width: 66.3333333333%;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none
}

.go-final__nav-item:nth-child(2) {
    border-bottom: 4px solid #d19ff9;
    color: #fff;
    height: 76px;
    font-weight: 600
}

.go-final__nav-item p:nth-child(2) {
    display: none
}

.go-final__nav-item:last-child {
    border-right: none
}

.go-final__line-up {
    padding: 80px 40px;
    max-width: 1360px;
    margin: 0 auto
}

.go-final__block {
    width: 100%;
    margin-top: 80px
}

.go-final__title {
    padding-top: 10px
}

.go-final__title-block {
    max-width: 1360px;
    font-size: 42px;
    line-height: 52px;
    letter-spacing: .02em;
    color: #fff;
    margin-top: 80px;
    margin-bottom: 40px;
    font-weight: 600;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between
}

.go-final__arrow {
    font-weight: 800;
    font-size: 63px;
    line-height: 88px;
    letter-spacing: .02em;
    color: #fff;
    -webkit-transform: rotate(-90deg);
    transform: rotate(-90deg);
    width: -webkit-fit-content;
    width: -moz-fit-content;
    width: fit-content;
    height: -webkit-fit-content;
    height: -moz-fit-content;
    height: fit-content
}

.go-final-bracket {
    max-width: 1360px;
    background: #141414;
    padding-top: 40px
}

.go-final-bracket img {
    max-width: none
}

.go-final-bracket__stage {
    padding: 0 70px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
    margin-bottom: 70px
}

.go-final-bracket__txt {
    font-weight: 400;
    font-size: 16px;
    line-height: 22px;
    letter-spacing: .02em;
    text-transform: uppercase;
    color: rgba(255, 255, 255, .1)
}

.go-final-bracket .active-stage {
    color: #fff
}

.go-final-bracket__separator-block {
    width: 18%;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center
}

.go-final-bracket__separator {
    border: 1px solid rgba(255, 255, 255, .1);
    width: 100%
}

.go-final-bracket__results-block {
    height: 760px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex
}

.go-final-bracket__results {
    width: 100%;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    padding-bottom: 150px;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center
}

.go-final-bracket__content {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    max-height: 360px
}

.go-final-bracket__quarter-result {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    max-width: 205px;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: 10px;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center
}

.go-final-bracket__game {
    height: 162px;
    background: #000
}

.go-final-bracket__game:nth-child(2n) {
    margin-top: 40px
}

.go-final-bracket__team {
    width: 100%;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    border-bottom: 1px solid #141414
}

.go-final-bracket__team:nth-child(2n) {
    border-bottom: none
}

.go-final-bracket__team-info {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    width: 80px;
    height: 80px
}

.go-final-bracket__team-logo {
    min-width: 50px;
    width: 50px;
    height: 50px;
    margin: 8px
}

.go-final-bracket__team-logo img {
    width: 100%
}

.go-final-bracket__score {
    width: 60px;
    height: 80px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center
}

.go-final-bracket__score_winner {
    background: #d19ff9 !important
}

.go-final-bracket__score_winner .go-final-bracket__score-txt {
    color: #010101 !important
}

.go-final-bracket .borders {
    border-left: 1px solid #141414;
    border-right: 1px solid #141414
}

.go-final-bracket__score-txt {
    font-style: normal;
    font-weight: 400;
    font-size: 16px;
    line-height: 22px;
    text-align: center;
    letter-spacing: .02em;
    color: #fff
}

.go-final-bracket__connecting-block {
    width: -webkit-fit-content;
    width: -moz-fit-content;
    width: fit-content;
    height: auto;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    margin-right: 10px;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap
}

.go-final-bracket__final-game-block {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    height: 500px;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    width: -webkit-min-content;
    width: -moz-min-content;
    width: min-content
}

.go-final-bracket__cup-block {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    height: -webkit-fit-content;
    height: -moz-fit-content;
    height: fit-content;
    margin-bottom: 30px
}

.go-final-bracket__cup-image {
    width: 110px;
    margin-bottom: 10px;
    height: 110px
}

.go-final-bracket__cup-image img {
    width: 100%
}

.go-final-bracket__cup-name {
    text-align: center;
    font-style: normal;
    font-weight: 400;
    font-size: 28px;
    line-height: 39px;
    letter-spacing: .02em;
    color: #fff;
    white-space: nowrap;
    width: 100%
}

.go-final-bracket__final-teams-block {
    width: 205px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex
}

.go-final-bracket__final-teams {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    width: 105px;
}

.go-final-bracket__final-game-player {
    background: rgba(0, 0, 0, .8)
}

.go-final-bracket__final-game-player:last-child {
    border-left: 1px #141414 solid
}

.go-final-bracket__logo-block {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    width: 105px;
    height: 100px;
    border-bottom: 1px #141414 solid
}

.go-final-bracket__logo-block img {
    width: 100%
}

.go-final-bracket__logo {
    width: 90px;
    height: 90px
}

.go-final-bracket__final-score-block {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    height: 60px
}

.go-final-bracket__final-score-block .go-final-bracket__score-txt {
    font-weight: 800;
    font-size: 20px;
    line-height: 28px
}

.go-final-bracket__final-score {
    font-weight: 400;
    font-size: 20px;
    line-height: 28px;
    text-align: center;
    letter-spacing: .02em
}

.go-final-bracket__final-teams-title {
    font-size: 20px;
    line-height: 28px;
    font-weight: 600px;
    text-align: center;
    letter-spacing: .02em;
    margin: 40px auto 15px auto;
    height: -webkit-fit-content;
    height: -moz-fit-content;
    height: fit-content
}

.semi-match-block {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-top: 0 !important;
    margin-right: 10px
}

.championship-course {
    max-width: 1360px
}

.championship-course__top {
    margin-bottom: 40px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between
}

.championship-course__title {
    font-size: 42px;
    line-height: 52px;
    letter-spacing: .02em;
    font-weight: 600;
    margin-right: 12%
}

.championship-course__stage {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    font-weight: 400;
    font-size: 28px;
    line-height: 39px;
    letter-spacing: .02em;
    color: rgba(255, 255, 255, .4)
}

.championship-course__select-block {
    background: #141414
}

.championship-course__select-block:last-child {
    display: none
}

.championship-course__period {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    border: #141414;
    width: 192px;
    height: 60px;
    font-weight: 400;
    font-size: 16px;
    line-height: 22px;
    letter-spacing: .02em;
    text-transform: uppercase;
    color: #fff;
    padding: 0 20px;
    outline: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    background: url(/local/templates/new_ru/img/dropedArrow.png) no-repeat;
    background-position-x: calc(100% - 15px);
    background-position-y: center;
    -moz-user-select: none;
    -webkit-user-select: none;
    -ms-user-select: none;
    user-select: none
}

.championship-course__period option {
    background: #141414
}

.matches-block {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap
}

.matches-block::-webkit-scrollbar {
    width: 0
}

.match__block {
    background: #141414;
    padding: 30px 40px;
    margin-right: 20px
}

.match__date {
    font-weight: 400;
    font-size: 16px;
    line-height: 20px;
    text-align: center;
    letter-spacing: .02em;
    color: #fff
}

.match__area {
    font-weight: 400;
    font-size: 16px;
    line-height: 20px;
    text-align: center;
    letter-spacing: .02em;
    color: rgba(255, 255, 255, .4)
}

.match__versus {
    width: 100%;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
    margin-bottom: 20px;
    font-weight: 600;
    font-size: 14px;
    line-height: 20px;
    text-align: right;
    letter-spacing: .02em;
    color: #fff;
    -webkit-box-align: baseline;
    -ms-flex-align: baseline;
    align-items: baseline;
    margin-top: 25px
}

.match__first-team {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: end;
    -ms-flex-pack: end;
    justify-content: flex-end;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column
}

.match__first-team-logo {
    height: 53px
}

.match__first-team-logo img {
    height: 100%
}

.match__second-team-logo {
    height: 53px
}

.match__second-team-logo img {
    height: 100%
}

.match__score {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    width: 15%;
    -ms-flex-pack: distribute;
    justify-content: space-around;
    font-style: normal;
    font-weight: 800;
    font-size: 32px;
    line-height: 42px;
    text-align: center;
    letter-spacing: .02em;
    color: #fff
}

.match__second-team {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column
}

.match__second-team-name {
    text-align: center
}

.match__button {
    width: 100%;
    background-color: #fff;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    height: 48px;
    margin-top: 35px
}

.match__button-txt {
    color: #000;
    text-align: center;
    font-weight: 400;
    font-size: 16px;
    line-height: 20px;
    letter-spacing: .02em;
    padding-bottom: 6px
}

.match__translation {
    width: 19px;
    height: 19px;
    margin-left: 5px
}

.go-final-bracket__mobile-result {
    display: none
}

.go-final-bracket__result-mobile {
    display: none
}

.vertical-connecting {
    height: 100px
}

.vertical-connecting:nth-child(2n) {
    -webkit-transform: scale(1, -1);
    transform: scale(1, -1)
}

.vertical-connecting img {
    height: 95px
}

.gorizontal-connecting {
    width: 40px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center
}

.gorizontal-connecting img {
    width: 40px
}

.circle-connecting {
    width: 60px;
    height: 60px
}

.circle-connecting img {
    width: 100%
}

.circle-connecting:first-child {
    margin-bottom: 30px
}

.mirror {
    -webkit-transform: scale(-1, -1);
    transform: scale(-1, -1)
}

.rotate {
    -webkit-transform: rotate(180deg);
    transform: rotate(180deg)
}

.margin-off {
    margin: 0 !important
}

.direction-row {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row
}

.airOff {
    display: none
}

.margin-top-10 {
    margin-top: 10px !important
}

.three-game {
    width: 40px
}

.go-final__swiper-block {
    max-width: 1360px
}

.go-final__swiper {
    width: 100%
}

.go-final__swiper div img {
    width: 100%;
    height: 100%
}

.go-final__swiper .slick-prev,
.go-final__swiper .slick-next {
    z-index: 1 !important;
    width: 50px !important;
    height: 50px !important;
    background: #fff !important
}

.go-final__swiper .slick-next {
    right: -5px !important
}

.go-final__swiper .slick-prev {
    left: -25px !important
}

.go-final__swiper .slick-prev:before,
.go-final__swiper .slick-next:before {
    font-size: 28px !important;
    font-weight: 700 !important;
    line-height: 1 !important;
    opacity: 1 !important;
    color: #000 !important;
    -webkit-font-smoothing: antialiased !important;
    -moz-osx-font-smoothing: grayscale !important
}

.go-final__swiper .slick-list {
    position: relative !important;
    display: block !important;
    overflow: hidden !important;
    margin-right: 0 !important;
    margin-left: 0 !important;
    padding: 0 !important
}

.invisible {
    display: none
}

@media(max-width: 1439px) {
    .go-final-bracket__score {
        width: 30px;
        height: 50px
    }

    .go-final-bracket__quarter-result {
        max-width: 150px
    }

    .circle-connecting {
        width: 40px;
        height: 40px
    }

    .go-final-bracket__results-block {
        height: 850px;
        -webkit-box-align: start;
        -ms-flex-align: start;
        align-items: flex-start
    }

    .go-final-bracket__results {
        padding: 0 15px 50px 15px
    }

    .go-final-bracket__team-logo {
        min-width: 35px;
        width: 35px;
        height: 35px;
        margin: 4px
    }

    .go-final-bracket__team-info {
        width: 50px;
        height: 50px
    }

    .go-final-bracket__game {
        height: -webkit-fit-content;
        height: -moz-fit-content;
        height: fit-content
    }
}

@media(max-width: 1139px) {
    .go-final__about-title {
        -ms-flex-wrap: wrap;
        flex-wrap: wrap
    }

    .go-final__info {
        padding-bottom: 55px
    }

    .go-final__team-name {
        right: 0
    }
}

@media(max-width: 1140px) {
    .go-final-bracket {
        padding: 0
    }

    .go-final-bracket__stage {
        display: none
    }

    .go-final-bracket__results {
        display: none
    }

    .go-final-bracket__mobile-result {
        display: block;
        width: 100%;
        padding: 0 20px
    }

    .go-final-bracket__result-mobile {
        display: block
    }

    .go-final-bracket__stage-mobile {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: nowrap;
        flex-wrap: nowrap;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
        display: none
    }

    .go-final-bracket__quarter-result {
        height: -webkit-fit-content;
        height: -moz-fit-content;
        height: fit-content;
        max-width: -webkit-min-content;
        max-width: -moz-min-content;
        max-width: min-content;
        margin: 0;
        margin-left: auto
    }

    .go-final-bracket__stage-mobile {
        display: block;
        width: 100%
    }

    .go-final-bracket__score {
        height: 80px;
        width: 60px
    }

    .go-final-bracket__team-logo {
        min-width: 72px;
        width: 72px;
        height: 72px;
        margin: 8px
    }

    .go-final-bracket__team-info {
        width: 80px;
        height: 80px
    }

    .go-final-bracket__current-stage {
        font-size: 16px;
        line-height: 22px;
        letter-spacing: .02em;
        text-transform: uppercase;
        color: #fff;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        width: 100%;
        height: 30px;
        margin: 25px 0 20px 0
    }

    .go-final-bracket__results-block {
        height: -webkit-fit-content;
        height: -moz-fit-content;
        height: fit-content
    }

    .go-final-bracket__quarter-result-block {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center
    }

    .go-final-bracket__dividing-line {
        position: relative;
        height: 440px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        margin: 0 25px
    }

    .go-final-bracket__dividing-line-short {
        height: 230px
    }

    .ellipse {
        position: absolute;
        left: -2px
    }

    .line1-ellipse {
        top: 0
    }

    .line2-ellipse {
        top: 25%
    }

    .line3-ellipse {
        bottom: 25%
    }

    .line4-ellipse {
        bottom: 0
    }

    .mobile-vert-line {
        position: absolute;
        height: 100%;
        width: 1px
    }

    .mobile-semi-final-teams-block:first-child {
        margin-bottom: 30px
    }

    .background-none {
        background: none
    }

    .snuggle-left {
        margin-right: auto;
        margin-left: 0
    }

    .go-final-bracket__game {
        width: 100%
    }

    .go-final-bracket__final-teams-block {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        margin: 20px 0 36px 0;
        width: 100%
    }
}

@media(max-width: 1049px) {
    .results__block {
        width: 100%
    }

    .results__block:not(:last-child) {
        margin-bottom: 15px
    }
}

@media(max-width: 1000px) {
    .championship-course__stage {
        display: none
    }

    .championship-course__title {
        display: none
    }

    .championship-course__period {
        width: 305px
    }

    .championship-course__select-block:last-child {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex
    }

    .championship-course__table tr td:not(:nth-child(2)) {
        width: 60px
    }
}

@media(max-width: 940px) {
    .go-final__about {
        margin-right: 2%
    }

    .go-final__info {
        padding-left: 20px;
        padding-right: 20px
    }
}

@media(max-width: 815px) {
    .go-final-bracket__team-info {
        width: 55px;
        height: 80px
    }

    .go-final-bracket__quarter-result {
        max-width: 178px
    }

    .go-final-bracket__team-logo {
        min-width: 50px;
        width: 50px;
        height: 40px
    }
}

@media(max-width: 800px) {
    .go-final__about-title {
        min-width: 0
    }

    .go-final__progress {
        display: none;
        padding-left: 0;
        margin-bottom: 30px
    }

    .go-final__progress-stats {
        width: 100%
    }

    .go-final__info {
        padding-top: 0;
        padding-bottom: 20px
    }

    .invisible {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex
    }

    .go-final__about {
        margin-right: 0;
        max-width: 510px
    }

    .go-final__nav-item {
        font-size: 16px;
        line-height: 22px
    }

    .go-final__nav-item p:nth-child(1) {
        display: none
    }

    .go-final__nav-item p:nth-child(2) {
        display: block
    }

    .go-final__swiper button {
        display: none
    }

    .go-final__line-up {
        padding: 40px 20px
    }

    .go-final__arrow {
        -webkit-transform: rotate(-225deg);
        transform: rotate(-225deg)
    }
}

@media(max-width: 700px) {
    .championship-course__top {
        -ms-flex-wrap: wrap;
        flex-wrap: wrap
    }

    .championship-course__period {
        width: 100%
    }

    .championship-course__select-block {
        width: 335px
    }

    .championship-course__select-block:not(:last-child) {
        margin-bottom: 10px
    }

    .championship-course__table tr td:not(:nth-child(2)) {
        width: 50px
    }

    .go-final__swiper button {
        display: none !important
    }
}

@media(max-width: 500px) {
    .results {
        -ms-flex-wrap: wrap;
        flex-wrap: wrap
    }

    .go-final-bracket__mobile-result {
        padding: 0 5px
    }

    .go-final__team-name {
        max-width: -webkit-fit-content;
        max-width: -moz-fit-content;
        max-width: fit-content
    }

    .go-final-bracket__team-logo {
        min-width: 40px;
        width: 40px;
        margin: 0
    }

    .go-final__line-up {
        padding: 40px 20px
    }

    .go-final__about {
        max-width: 340px
    }

    .go-final__about-txt {
        margin-bottom: 20px
    }

    .go-final__about-title {
        height: 24px;
        font-size: 0;
        line-height: 0;
        margin-bottom: 12px
    }

    .go-final__about-title p:first-child {
        display: none
    }

    .go-final__about-title p:nth-child(2) {
        display: contents;
        font-size: 20px;
        line-height: 25px
    }

    .go-final__about-title span,
    .go-final__about-title span::before,
    .go-final__about-title span::after {
        font-size: 20px;
        line-height: 28px
    }

    .go-final__about-title span::before,
    .go-final__about-title span::after {
        top: 0
    }

    .go-final__about-title span {
        -webkit-text-stroke-width: 7px;
        margin-left: 10px
    }

    .go-final__progress {
        margin-bottom: 0
    }

    .go-final__progress-title {
        font-size: 12px;
        line-height: 17px
    }

    .go-final__progress-stats {
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
        width: 335px;
        margin-bottom: 20px
    }

    .go-final__progress-stats span,
    .go-final__progress-stats span::before,
    .go-final__progress-stats span::after {
        font-size: 24px;
        line-height: 32px
    }

    .go-final__progress-stats span {
        -webkit-text-stroke-width: 12px
    }

    .go-final__progress-stats span::after {
        -webkit-text-stroke-width: 5px
    }

    .go-final-bracket__cup-name {
        font-size: 16px;
        line-height: 22px
    }

    .go-final-bracket__cup-image {
        width: 40px;
        height: 40px
    }

    .three-game {
        width: 25px !important
    }

    .go-final-bracket__team-info {
        height: 52px;
        width: 52px
    }

    .go-final-bracket__score {
        width: 35px;
        height: 50px
    }

    .go-final-bracket__game {
        height: 103px
    }

    .go-final-bracket__quarter-result {
        max-width: -webkit-min-content;
        max-width: -moz-min-content;
        max-width: min-content
    }

    .go-final-bracket__dividing-line {
        height: 320px
    }

    .go-final-bracket__dividing-line-short {
        height: 200px
    }

    .max-height {
        height: 100%
    }
}
</style>
<script>

</script><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>