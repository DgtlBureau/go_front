<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("GO-Quarter-Final");
?><div class="gohockey-quarter-final">
    <div class="gohockey-quarter-final__info">
        <div class="gohockey-quarter-final__about">
            <div class="gohockey-quarter-final__about-title">
                <p>Хоккейная команда</p>
                <p>Команда</p>
                <div class="gohockey-quarter-final__team-name"><span data-text="<?=$GLOBALS['SITE_SETTINGS']['go']['LOGO_TEXT']?>" id="GO"><?=$GLOBALS['SITE_SETTINGS']['go']['LOGO_TEXT']?></span></div>
            </div>
            <div class="gohockey-quarter-final__about-txt">Несколько лет назад мы решили популяризировать
                любительский хоккей и создать престижный дивизион с шикарным трофее</div>
            <div class="gohockey-quarter-final__progress invisible">
                <div class="gohockey-quarter-final__progress-stats">
                    <div class="gohockey-quarter-final__progress-victories">
                        <div class="gohockey-quarter-final__progress-title">Побед</div><span data-text="13"
                            id="victories-count">13</span>
                    </div>
                    <div class="gohockey-quarter-final__progress-points">
                        <div class="gohockey-quarter-final__progress-title">Очков</div><span data-text="7"
                            id="points-count">7</span>
                    </div>
                    <div class="gohockey-quarter-final__progress-place">
                        <div class="gohockey-quarter-final__progress-title">Место</div><span data-text="4"
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
        <div class="gohockey-quarter-final__progress">
            <div class="gohockey-quarter-final__progress-background" id="team-background-logo"></div>
            <div class="gohockey-quarter-final__progress-stats">
                <div class="gohockey-quarter-final__progress-victories">
                    <div class="gohockey-quarter-final__progress-title">Побед</div><span data-text="13"
                        id="victories-count">13</span>
                </div>
                <div class="gohockey-quarter-final__progress-points">
                    <div class="gohockey-quarter-final__progress-title">Очков</div><span data-text="7"
                        id="points-count">7</span>
                </div>
                <div class="gohockey-quarter-final__progress-place">
                    <div class="gohockey-quarter-final__progress-title">Место</div><span data-text="4"
                        id="place">4</span>
                </div>
            </div>
        </div>
    </div>
    <div class="gohockey-quarter-final__info-nav">
        <div class="gohockey-quarter-final__nav-item">
            <p>Состав команды</p>
            <p>Состав</p>
        </div>
        <div class="gohockey-quarter-final__nav-item">Турниры</div>
        <div class="gohockey-quarter-final__nav-item">Новости</div>
    </div>
    <div class="gohockey-quarter-final__line-up">
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
            <div class="gohockey-quarter-final-bracket">
                <div class="gohockey-quarter-final-bracket__stage">
                    <div class="gohockey-quarter-final-bracket__txt active-stage">1/4</div>
                    <div class="gohockey-quarter-final-bracket__separator-block">
                        <div class="gohockey-quarter-final-bracket__separator"></div>
                    </div>
                    <div class="gohockey-quarter-final-bracket__txt">1/2</div>
                    <div class="gohockey-quarter-final-bracket__separator-block">
                        <div class="gohockey-quarter-final-bracket__separator"></div>
                    </div>
                    <div class="gohockey-quarter-final-bracket__txt">ФИНАЛ</div>
                    <div class="gohockey-quarter-final-bracket__separator-block">
                        <div class="gohockey-quarter-final-bracket__separator"></div>
                    </div>
                    <div class="gohockey-quarter-final-bracket__txt">1/2</div>
                    <div class="gohockey-quarter-final-bracket__separator-block">
                        <div class="gohockey-quarter-final-bracket__separator"></div>
                    </div>
                    <div class="gohockey-quarter-final-bracket__txt active-stage">1/4</div>
                </div>
                <div class="gohockey-quarter-final-bracket__results-block">
                    <div class="gohockey-quarter-final-bracket__results">
                        <div class="gohockey-quarter-final-bracket__content">
                            <div class="gohockey-quarter-final-bracket__quarter-result">
                                <div class="gohockey-quarter-final-bracket__game">
                                    <div class="gohockey-quarter-final-bracket__team">
                                        <div class="gohockey-quarter-final-bracket__team-info">
                                            <div class="gohockey-quarter-final-bracket__team-name">ГЛИЧИ - ЭТО
                                                КРУТО!!!</div>
                                            <div class="gohockey-quarter-final-bracket__team-logo"><img
                                                    src="/local/templates/new_ru/img/bull.png" alt="bull"></div>
                                        </div>
                                        <div
                                            class="gohockey-quarter-final-bracket__score gohockey-quarter-final-bracket__score_winner borders">
                                            <div class="gohockey-quarter-final-bracket__score-txt">4</div>
                                        </div>
                                        <div class="gohockey-quarter-final-bracket__score borders">
                                            <div class="gohockey-quarter-final-bracket__score-txt">-</div>
                                        </div>
                                    </div>
                                    <div class="gohockey-quarter-final-bracket__team">
                                        <div class="gohockey-quarter-final-bracket__team-info">
                                            <div class="gohockey-quarter-final-bracket__team-name">GO Dasha</div>
                                            <div class="gohockey-quarter-final-bracket__team-logo"><img
                                                    src="/local/templates/new_ru/img/bull.png" alt="bull"></div>
                                        </div>
                                        <div class="gohockey-quarter-final-bracket__score quarter borders">
                                            <div class="gohockey-quarter-final-bracket__score-txt">4</div>
                                        </div>
                                        <div class="gohockey-quarter-final-bracket__score borders">
                                            <div class="gohockey-quarter-final-bracket__score-txt">-</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gohockey-quarter-final-bracket__game">
                                    <div class="gohockey-quarter-final-bracket__team">
                                        <div class="gohockey-quarter-final-bracket__team-info">
                                            <div class="gohockey-quarter-final-bracket__team-name">GO GLITCH</div>
                                            <div class="gohockey-quarter-final-bracket__team-logo"><img
                                                    src="/local/templates/new_ru/img/bull.png" alt="bull"></div>
                                        </div>
                                        <div
                                            class="gohockey-quarter-final-bracket__score gohockey-quarter-final-bracket__score_winner borders">
                                            <div class="gohockey-quarter-final-bracket__score-txt">4</div>
                                        </div>
                                        <div class="gohockey-quarter-final-bracket__score borders">
                                            <div class="gohockey-quarter-final-bracket__score-txt">-</div>
                                        </div>
                                    </div>
                                    <div class="gohockey-quarter-final-bracket__team">
                                        <div class="gohockey-quarter-final-bracket__team-info">
                                            <div class="gohockey-quarter-final-bracket__team-name">GO GO GO</div>
                                            <div class="gohockey-quarter-final-bracket__team-logo"><img
                                                    src="/local/templates/new_ru/img/bull.png" alt="bull"></div>
                                        </div>
                                        <div class="gohockey-quarter-final-bracket__score quarter borders">
                                            <div class="gohockey-quarter-final-bracket__score-txt">4</div>
                                        </div>
                                        <div class="gohockey-quarter-final-bracket__score borders">
                                            <div class="gohockey-quarter-final-bracket__score-txt">-</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gohockey-quarter-final-bracket__connecting-block">
                                <div class="gohockey-quarter-final-bracket__connecting vertical-connecting"><img
                                        src="/local/templates/new_ru/img/vertLineCurved.png" alt="vertLine"></div>
                                <div class="gohockey-quarter-final-bracket__connecting vertical-connecting"><img
                                        src="/local/templates/new_ru/img/vertLineCurved.png" alt="vertLine"></div>
                            </div>
                            <div class="gohockey-quarter-final-bracket__connecting-block">
                                <div class="gohockey-quarter-final-bracket__connecting gorizontal-connecting"><img
                                        src="/local/templates/new_ru/img/gorLine.png" alt="gorLine"></div>
                            </div>
                            <div class="gohockey-quarter-final-bracket__connecting-block">
                                <div class="gohockey-quarter-final-bracket__connecting circle-connecting"><img
                                        src="/local/templates/new_ru/img/ellipse.png" alt="Ellipse"></div>
                                <div class="gohockey-quarter-final-bracket__connecting circle-connecting"><img
                                        src="/local/templates/new_ru/img/ellipse.png" alt="Ellipse"></div>
                            </div>
                            <div class="gohockey-quarter-final-bracket__connecting-block">
                                <div class="gohockey-quarter-final-bracket__connecting gorizontal-connecting"><img
                                        src="/local/templates/new_ru/img/gorLine.png" alt="gorLine"></div>
                            </div>
                        </div>
                        <div class="gohockey-quarter-final-bracket__final-game-block">
                            <div class="gohockey-quarter-final-bracket__cup-block">
                                <div class="gohockey-quarter-final-bracket__cup-image"><img
                                        src="/local/templates/new_ru/img/whiteCup.png" alt="whiteCup"></div>
                                <div class="gohockey-quarter-final-bracket__cup-name">Кубок ЛХЛ-77</div>
                            </div>
                            <div class="gohockey-quarter-final-bracket__final-teams-block">
                                <div class="gohockey-quarter-final-bracket__final-teams">
                                    <div class="gohockey-quarter-final-bracket__final-circle"><img
                                            src="/local/templates/new_ru/img/ellipseBlack.png" alt="EllipseBlack"></div>
                                    <div class="gohockey-quarter-final-bracket__final-circle"><img
                                            src="/local/templates/new_ru/img/ellipseBlack.png" alt="EllipseBlack"></div>
                                </div>
                            </div>
                        </div>
                        <div class="gohockey-quarter-final-bracket__content mirror">
                            <div class="gohockey-quarter-final-bracket__quarter-result rotate">
                                <div class="gohockey-quarter-final-bracket__game">
                                    <div class="gohockey-quarter-final-bracket__team">
                                        <div
                                            class="gohockey-quarter-final-bracket__score gohockey-quarter-final-bracket__score_winner borders">
                                            <div class="gohockey-quarter-final-bracket__score-txt">4</div>
                                        </div>
                                        <div class="gohockey-quarter-final-bracket__score borders">
                                            <div class="gohockey-quarter-final-bracket__score-txt">-</div>
                                        </div>
                                        <div class="gohockey-quarter-final-bracket__team-info flex-start">
                                            <div class="gohockey-quarter-final-bracket__team-logo"><img
                                                    src="/local/templates/new_ru/img/bull.png" alt="bull"></div>
                                            <div class="gohockey-quarter-final-bracket__team-name txt-left"><?=$GLOBALS['SITE_SETTINGS']['go']['LOGO_TEXT']?></div>
                                        </div>
                                    </div>
                                    <div class="gohockey-quarter-final-bracket__team">
                                        <div class="gohockey-quarter-final-bracket__score quarter borders">
                                            <div class="gohockey-quarter-final-bracket__score-txt">4</div>
                                        </div>
                                        <div class="gohockey-quarter-final-bracket__score borders">
                                            <div class="gohockey-quarter-final-bracket__score-txt">-</div>
                                        </div>
                                        <div class="gohockey-quarter-final-bracket__team-info flex-start">
                                            <div class="gohockey-quarter-final-bracket__team-logo"><img
                                                    src="/local/templates/new_ru/img/bull.png" alt="bull"></div>
                                            <div class="gohockey-quarter-final-bracket__team-name txt-left"><?=$GLOBALS['SITE_SETTINGS']['go']['LOGO_TEXT']?></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gohockey-quarter-final-bracket__game">
                                    <div class="gohockey-quarter-final-bracket__team">
                                        <div
                                            class="gohockey-quarter-final-bracket__score gohockey-quarter-final-bracket__score_winner borders">
                                            <div class="gohockey-quarter-final-bracket__score-txt">4</div>
                                        </div>
                                        <div class="gohockey-quarter-final-bracket__score borders">
                                            <div class="gohockey-quarter-final-bracket__score-txt">-</div>
                                        </div>
                                        <div class="gohockey-quarter-final-bracket__team-info flex-start">
                                            <div class="gohockey-quarter-final-bracket__team-logo"><img
                                                    src="/local/templates/new_ru/img/bull.png" alt="bull"></div>
                                            <div class="gohockey-quarter-final-bracket__team-name txt-left"><?=$GLOBALS['SITE_SETTINGS']['go']['LOGO_TEXT']?></div>
                                        </div>
                                    </div>
                                    <div class="gohockey-quarter-final-bracket__team">
                                        <div class="gohockey-quarter-final-bracket__score quarter borders">
                                            <div class="gohockey-quarter-final-bracket__score-txt">4</div>
                                        </div>
                                        <div class="gohockey-quarter-final-bracket__score borders">
                                            <div class="gohockey-quarter-final-bracket__score-txt">-</div>
                                        </div>
                                        <div class="gohockey-quarter-final-bracket__team-info flex-start">
                                            <div class="gohockey-quarter-final-bracket__team-logo"><img
                                                    src="/local/templates/new_ru/img/bull.png" alt="bull"></div>
                                            <div class="gohockey-quarter-final-bracket__team-name txt-left"><?=$GLOBALS['SITE_SETTINGS']['go']['LOGO_TEXT']?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gohockey-quarter-final-bracket__connecting-block">
                                <div class="gohockey-quarter-final-bracket__connecting vertical-connecting"><img
                                        src="/local/templates/new_ru/img/vertLineCurved.png" alt="vertLine"></div>
                                <div class="gohockey-quarter-final-bracket__connecting vertical-connecting"><img
                                        src="/local/templates/new_ru/img/vertLineCurved.png" alt="vertLine"></div>
                            </div>
                            <div class="gohockey-quarter-final-bracket__connecting-block">
                                <div class="gohockey-quarter-final-bracket__connecting gorizontal-connecting"><img
                                        src="/local/templates/new_ru/img/gorLine.png" alt="gorLine"></div>
                            </div>
                            <div class="gohockey-quarter-final-bracket__connecting-block">
                                <div class="gohockey-quarter-final-bracket__connecting circle-connecting"><img
                                        src="/local/templates/new_ru/img/ellipse.png" alt="Ellipse"></div>
                                <div class="gohockey-quarter-final-bracket__connecting circle-connecting"><img
                                        src="/local/templates/new_ru/img/ellipse.png" alt="Ellipse"></div>
                            </div>
                            <div class="gohockey-quarter-final-bracket__connecting-block">
                                <div class="gohockey-quarter-final-bracket__connecting gorizontal-connecting"><img
                                        src="/local/templates/new_ru/img/gorLine.png" alt="gorLine"></div>
                            </div>
                        </div>
                    </div>
                    <div class="gohockey-quarter-final-bracket__mobile-result">
                        <div class="gohockey-quarter-final-bracket__stage-mobile">
                            <div class="gohockey-quarter-final-bracket__current-stage">1/4</div>
                            <div class="gohockey-quarter-final-bracket__quarter-result-block">
                                <div class="gohockey-quarter-final-bracket__quarter-result">
                                    <div class="gohockey-quarter-final-bracket__game">
                                        <div class="gohockey-quarter-final-bracket__team">
                                            <div class="gohockey-quarter-final-bracket__team-info">
                                                <div class="gohockey-quarter-final-bracket__team-name">ГЛИЧИ - ЭТО
                                                    КРУТО!!!</div>
                                                <div class="gohockey-quarter-final-bracket__team-logo"><img
                                                        src="/local/templates/new_ru/img/bull.png" alt="bull"></div>
                                            </div>
                                            <div
                                                class="gohockey-quarter-final-bracket__score gohockey-quarter-final-bracket__score_winner borders">
                                                <div class="gohockey-quarter-final-bracket__score-txt">4</div>
                                            </div>
                                            <div class="gohockey-quarter-final-bracket__score borders">
                                                <div class="gohockey-quarter-final-bracket__score-txt">-</div>
                                            </div>
                                        </div>
                                        <div class="gohockey-quarter-final-bracket__team">
                                            <div class="gohockey-quarter-final-bracket__team-info">
                                                <div class="gohockey-quarter-final-bracket__team-name">GO Dasha
                                                </div>
                                                <div class="gohockey-quarter-final-bracket__team-logo"><img
                                                        src="/local/templates/new_ru/img/bull.png" alt="bull"></div>
                                            </div>
                                            <div class="gohockey-quarter-final-bracket__score quarter borders">
                                                <div class="gohockey-quarter-final-bracket__score-txt">4</div>
                                            </div>
                                            <div class="gohockey-quarter-final-bracket__score borders">
                                                <div class="gohockey-quarter-final-bracket__score-txt">-</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gohockey-quarter-final-bracket__game">
                                        <div class="gohockey-quarter-final-bracket__team">
                                            <div class="gohockey-quarter-final-bracket__team-info">
                                                <div class="gohockey-quarter-final-bracket__team-name">GO GLITCH
                                                </div>
                                                <div class="gohockey-quarter-final-bracket__team-logo"><img
                                                        src="/local/templates/new_ru/img/bull.png" alt="bull"></div>
                                            </div>
                                            <div
                                                class="gohockey-quarter-final-bracket__score gohockey-quarter-final-bracket__score_winner borders">
                                                <div class="gohockey-quarter-final-bracket__score-txt">4</div>
                                            </div>
                                            <div class="gohockey-quarter-final-bracket__score borders">
                                                <div class="gohockey-quarter-final-bracket__score-txt">-</div>
                                            </div>
                                        </div>
                                        <div class="gohockey-quarter-final-bracket__team">
                                            <div class="gohockey-quarter-final-bracket__team-info">
                                                <div class="gohockey-quarter-final-bracket__team-name">GO GO GO
                                                </div>
                                                <div class="gohockey-quarter-final-bracket__team-logo"><img
                                                        src="/local/templates/new_ru/img/bull.png" alt="bull"></div>
                                            </div>
                                            <div class="gohockey-quarter-final-bracket__score quarter borders">
                                                <div class="gohockey-quarter-final-bracket__score-txt">4</div>
                                            </div>
                                            <div class="gohockey-quarter-final-bracket__score borders">
                                                <div class="gohockey-quarter-final-bracket__score-txt">-</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gohockey-quarter-final-bracket__dividing-line"><img
                                        class="mobile-vert-line" src="/local/templates/new_ru/img/vertLine.png"
                                        alt="Line"><img class="line1-ellipse ellipse"
                                        src="/local/templates/new_ru/img/ellipseMini.png" alt="EllipseMini"><img
                                        class="line2-ellipse ellipse" src="/local/templates/new_ru/img/ellipseMini.png"
                                        alt="EllipseMini"><img class="line3-ellipse ellipse"
                                        src="/local/templates/new_ru/img/ellipseMini.png" alt="EllipseMini"><img
                                        class="line4-ellipse ellipse" src="/local/templates/new_ru/img/ellipseMini.png"
                                        alt="EllipseMini"></div>
                                <div class="gohockey-quarter-final-bracket__quarter-result snuggle-left">
                                    <div class="gohockey-quarter-final-bracket__game">
                                        <div class="gohockey-quarter-final-bracket__team">
                                            <div
                                                class="gohockey-quarter-final-bracket__score gohockey-quarter-final-bracket__score_winner borders">
                                                <div class="gohockey-quarter-final-bracket__score-txt">4</div>
                                            </div>
                                            <div class="gohockey-quarter-final-bracket__score borders">
                                                <div class="gohockey-quarter-final-bracket__score-txt">-</div>
                                            </div>
                                            <div class="gohockey-quarter-final-bracket__team-info flex-start">
                                                <div class="gohockey-quarter-final-bracket__team-logo"><img
                                                        src="/local/templates/new_ru/img/bull.png" alt="bull"></div>
                                                <div class="gohockey-quarter-final-bracket__team-name txt-left">GO
                                                    Diego</div>
                                            </div>
                                        </div>
                                        <div class="gohockey-quarter-final-bracket__team">
                                            <div class="gohockey-quarter-final-bracket__score quarter borders">
                                                <div class="gohockey-quarter-final-bracket__score-txt">4</div>
                                            </div>
                                            <div class="gohockey-quarter-final-bracket__score borders">
                                                <div class="gohockey-quarter-final-bracket__score-txt">-</div>
                                            </div>
                                            <div class="gohockey-quarter-final-bracket__team-info flex-start">
                                                <div class="gohockey-quarter-final-bracket__team-logo"><img
                                                        src="/local/templates/new_ru/img/bull.png" alt="bull"></div>
                                                <div class="gohockey-quarter-final-bracket__team-name txt-left">GO
                                                    Dasha</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gohockey-quarter-final-bracket__game">
                                        <div class="gohockey-quarter-final-bracket__team">
                                            <div
                                                class="gohockey-quarter-final-bracket__score gohockey-quarter-final-bracket__score_winner borders">
                                                <div class="gohockey-quarter-final-bracket__score-txt">4</div>
                                            </div>
                                            <div class="gohockey-quarter-final-bracket__score borders">
                                                <div class="gohockey-quarter-final-bracket__score-txt">-</div>
                                            </div>
                                            <div class="gohockey-quarter-final-bracket__team-info flex-start">
                                                <div class="gohockey-quarter-final-bracket__team-logo"><img
                                                        src="/local/templates/new_ru/img/bull.png" alt="bull"></div>
                                                <div class="gohockey-quarter-final-bracket__team-name txt-left">GO
                                                    GLITCH</div>
                                            </div>
                                        </div>
                                        <div class="gohockey-quarter-final-bracket__team">
                                            <div class="gohockey-quarter-final-bracket__score quarter borders">
                                                <div class="gohockey-quarter-final-bracket__score-txt">4</div>
                                            </div>
                                            <div class="gohockey-quarter-final-bracket__score borders">
                                                <div class="gohockey-quarter-final-bracket__score-txt">-</div>
                                            </div>
                                            <div class="gohockey-quarter-final-bracket__team-info flex-start">
                                                <div class="gohockey-quarter-final-bracket__team-logo"><img
                                                        src="/local/templates/new_ru/img/bull.png" alt="bull"></div>
                                                <div class="gohockey-quarter-final-bracket__team-name txt-left">Я
                                                    ЛЮБЛЮ ГЛИЧ ЭФФЕКТЫ!!!</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="gohockey-quarter-final-bracket__stage-mobile">
                            <div class="gohockey-quarter-final-bracket__current-stage margin-top-10">1/2</div>
                            <div
                                class="gohockey-quarter-final-bracket__quarter-result-block gohockey-quarter-final-bracket__quarter-result-block-semi">
                                <div class="gohockey-quarter-final-bracket__quarter-result">
                                    <div class="gohockey-quarter-final-bracket__game background-none max-height">
                                        <div class="mobile-semi-final-teams-block"><img
                                                class="mobile-semi-final-teams"
                                                src="/local/templates/new_ru/img/ellipse.png" alt="Ellipse"></div>
                                        <div class="mobile-semi-final-teams-block"><img
                                                class="mobile-semi-final-teams"
                                                src="/local/templates/new_ru/img/ellipse.png" alt="Ellipse"></div>
                                    </div>
                                </div>
                                <div
                                    class="gohockey-quarter-final-bracket__dividing-line gohockey-quarter-final-bracket__dividing-line-short">
                                    <img class="mobile-vert-line" src="/local/templates/new_ru/img/vertLine.png"
                                        alt="Line"><img class="line1-ellipse ellipse"
                                        src="/local/templates/new_ru/img/ellipseMini.png" alt="EllipseMini"><img
                                        class="line2-ellipse ellipse" src="/local/templates/new_ru/img/ellipseMini.png"
                                        alt="EllipseMini"><img class="line3-ellipse ellipse"
                                        src="/local/templates/new_ru/img/ellipseMini.png" alt="EllipseMini"><img
                                        class="line4-ellipse ellipse" src="/local/templates/new_ru/img/ellipseMini.png"
                                        alt="EllipseMini"></div>
                                <div class="gohockey-quarter-final-bracket__quarter-result snuggle-left">
                                    <div class="gohockey-quarter-final-bracket__game background-none max-height">
                                        <div class="mobile-semi-final-teams-block"><img
                                                class="mobile-semi-final-teams"
                                                src="/local/templates/new_ru/img/ellipse.png" alt="Ellipse"></div>
                                        <div class="mobile-semi-final-teams-block"><img
                                                class="mobile-semi-final-teams"
                                                src="/local/templates/new_ru/img/ellipse.png" alt="Ellipse"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="gohockey-quarter-final-bracket__stage-mobile">
                            <div class="gohockey-quarter-final-bracket__current-stage margin-top-10"
                                style="color: rgba(255, 255, 255, 0.4);">ФИНАЛ</div>
                            <div class="gohockey-quarter-final-bracket__cup-block">
                                <div class="gohockey-quarter-final-bracket__cup-image"><img
                                        src="/local/templates/new_ru/img/whiteCup.png" alt="whiteCup"></div>
                                <div class="gohockey-quarter-final-bracket__cup-name">Кубок ЛХЛ-77</div>
                            </div>
                            <div class="gohockey-quarter-final-bracket__final-teams-block">
                                <div class="gohockey-quarter-final-bracket__final-teams">
                                    <div class="gohockey-quarter-final-bracket__final-circle"><img
                                            src="/local/templates/new_ru/img/ellipseBlack.png" alt="EllipseBlack"></div>
                                    <div class="gohockey-quarter-final-bracket__final-circle"><img
                                            src="/local/templates/new_ru/img/ellipseBlack.png" alt="EllipseBlack"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gohockey-quarter-final__title-block">
                <div class="gohockey-quarter-final__title">Матчи</div>
                <div class="gohockey-quarter-final__arrow">↖</div>
            </div>
            <div class="gohockey-quarter-final__swiper-block">
                <div class="gohockey-quarter-final__swiper">
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
.gohockey-quarter-final {
    width: 100%
}

.gohockey-quarter-final__info {
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

.gohockey-quarter-final__team-name {
    width: 100%;
    max-width: 400px;
    margin-top: auto;
    position: relative;
    right: 50px
}

.gohockey-quarter-final__about {
    max-width: 610px;
    margin-right: 10%;
    padding-top: 40px
}

.gohockey-quarter-final__about-title {
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

.gohockey-quarter-final__about-title p:first-child {
    display: contents
}

.gohockey-quarter-final__about-title p:nth-child(2) {
    display: none
}

.gohockey-quarter-final__about-title span {
    position: relative;
    color: #d19ff9;
    -webkit-text-stroke: .16em #fff;
    -webkit-text-stroke-width: 10px;
    font-size: 60px;
    font-weight: 800
}

.gohockey-quarter-final__about-title span::before {
    content: attr(data-text);
    position: absolute;
    -webkit-text-stroke: .02em #d19ff9;
    -webkit-text-stroke-width: 0px;
    z-index: 2
}

.gohockey-quarter-final__about-title span::after {
    content: attr(data-text);
    position: absolute;
    -webkit-text-stroke: .02em #000;
    -webkit-text-stroke-width: 6px;
    right: 0;
    z-index: 1
}

.gohockey-quarter-final__about-txt {
    font-family: "Montserrat";
    font-style: normal;
    font-weight: 400;
    font-size: 16px;
    line-height: 20px;
    letter-spacing: .02em;
    color: rgba(255, 255, 255, .6);
    margin-bottom: 30px
}

.gohockey-quarter-final__progress {
    min-width: 320px;
    width: 100%;
    max-width: 515px;
    padding-left: 10px
}

.gohockey-quarter-final__progress-background {
    background: url(/local/templates/new_ru/img/bull.png) no-repeat;
    background-size: 278px;
    height: 278px;
    width: 100%;
    background-position-x: center
}

.gohockey-quarter-final__progress-stats {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between
}

.gohockey-quarter-final__progress-title {
    font-style: normal;
    font-weight: 400;
    font-size: 20px;
    line-height: 25px;
    text-align: center;
    text-transform: uppercase;
    color: #fff;
    margin-bottom: 20px
}

.gohockey-quarter-final__progress-victories {
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

.gohockey-quarter-final__progress-victories span {
    position: relative;
    color: #000;
    -webkit-text-stroke: .16em #000;
    -webkit-text-stroke-width: 24px;
    font-size: 46px;
    line-height: 42px;
    font-weight: 800
}

.gohockey-quarter-final__progress-victories span::before {
    content: attr(data-text);
    position: absolute;
    -webkit-text-stroke: .02em #000;
    -webkit-text-stroke-width: 2px;
    z-index: 2
}

.gohockey-quarter-final__progress-victories span::after {
    content: attr(data-text);
    position: absolute;
    -webkit-text-stroke: .02em #fff;
    -webkit-text-stroke-width: 10px;
    right: 0;
    z-index: 1
}

.gohockey-quarter-final__progress-points {
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

.gohockey-quarter-final__progress-points span {
    position: relative;
    color: #000;
    -webkit-text-stroke: .16em #000;
    -webkit-text-stroke-width: 24px;
    font-size: 46px;
    line-height: 42px;
    font-weight: 800
}

.gohockey-quarter-final__progress-points span::before {
    content: attr(data-text);
    position: absolute;
    -webkit-text-stroke: .02em #000;
    -webkit-text-stroke-width: 2px;
    z-index: 2
}

.gohockey-quarter-final__progress-points span::after {
    content: attr(data-text);
    position: absolute;
    -webkit-text-stroke: .02em #fff;
    -webkit-text-stroke-width: 10px;
    right: 0;
    z-index: 1
}

.gohockey-quarter-final__progress-place {
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

.gohockey-quarter-final__progress-place span {
    position: relative;
    color: #000;
    -webkit-text-stroke: .16em #000;
    -webkit-text-stroke-width: 24px;
    font-size: 46px;
    line-height: 42px;
    font-weight: 800
}

.gohockey-quarter-final__progress-place span::before {
    content: attr(data-text);
    position: absolute;
    -webkit-text-stroke: .02em #000;
    -webkit-text-stroke-width: 2px;
    z-index: 2
}

.gohockey-quarter-final__progress-place span::after {
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

.gohockey-quarter-final__info-nav {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    width: 100%;
    margin-top: -5px
}

.gohockey-quarter-final__nav-item {
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

.gohockey-quarter-final__nav-item:nth-child(2) {
    border-bottom: 4px solid #d19ff9;
    color: #fff;
    height: 76px;
    font-weight: 600
}

.gohockey-quarter-final__nav-item p:nth-child(2) {
    display: none
}

.gohockey-quarter-final__nav-item:last-child {
    border-right: none
}

.gohockey-quarter-final__line-up {
    padding: 80px 40px;
    max-width: 1360px;
    margin: 0 auto
}

.gohockey-quarter-final__block {
    width: 100%;
    margin-top: 80px
}

.gohockey-quarter-final__title {
    padding-top: 10px
}

.gohockey-quarter-final__title-block {
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

.gohockey-quarter-final__arrow {
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

.gohockey-quarter-final-bracket {
    max-width: 1360px;
    background: #141414;
    padding-top: 40px
}

.gohockey-quarter-final-bracket img {
    max-width: none
}

.gohockey-quarter-final-bracket__stage {
    padding: 0 70px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between
}

.gohockey-quarter-final-bracket__txt {
    font-weight: 400;
    font-size: 16px;
    line-height: 22px;
    letter-spacing: .02em;
    text-transform: uppercase;
    color: rgba(255, 255, 255, .1)
}

.gohockey-quarter-final-bracket .active-stage {
    color: #fff
}

.gohockey-quarter-final-bracket__separator-block {
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

.gohockey-quarter-final-bracket__separator {
    border: 1px solid rgba(255, 255, 255, .1);
    width: 100%
}

.gohockey-quarter-final-bracket__results-block {
    height: 760px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex
}

.gohockey-quarter-final-bracket__results {
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

.gohockey-quarter-final-bracket__content {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    max-height: 360px
}

.gohockey-quarter-final-bracket__quarter-result {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    max-width: 322px;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: 10px
}

.gohockey-quarter-final-bracket__game {
    height: 160px;
    background: #000;
    width: 322px
}

.gohockey-quarter-final-bracket__game:nth-child(2n) {
    margin-top: 40px
}

.gohockey-quarter-final-bracket__team {
    width: 100%;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    border-bottom: 1px solid #141414
}

.gohockey-quarter-final-bracket__team:nth-child(2n) {
    border-bottom: none
}

.gohockey-quarter-final-bracket__team-info {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: end;
    -ms-flex-pack: end;
    justify-content: flex-end;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    width: 200px
}

.gohockey-quarter-final-bracket__team-name {
    font-style: normal;
    font-weight: 400;
    font-size: 14px;
    line-height: 25px;
    text-align: right;
    color: #fff
}

.gohockey-quarter-final-bracket__team-logo {
    min-width: 36px;
    width: 36px;
    height: 36px;
    margin: 8px
}

.gohockey-quarter-final-bracket__team-logo img {
    height: 100%
}

.gohockey-quarter-final-bracket__score {
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

.gohockey-quarter-final-bracket__score_winner {
    background: #d19ff9 !important;
    border: 1px solid #d19ff9 !important;
    color: #010101 !important
}

.gohockey-quarter-final-bracket .borders {
    border-left: 1px solid #141414;
    border-right: 1px solid #141414
}

.gohockey-quarter-final-bracket__score-txt {
    font-style: normal;
    font-weight: 400;
    font-size: 16px;
    line-height: 22px;
    text-align: center;
    letter-spacing: .02em;
    color: #fff
}

.gohockey-quarter-final-bracket__connecting-block {
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

.gohockey-quarter-final-bracket__final-game-block {
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

.gohockey-quarter-final-bracket__cup-block {
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
    height: fit-content
}

.gohockey-quarter-final-bracket__cup-image {
    width: 110px;
    margin-bottom: 10px;
    height: 110px
}

.gohockey-quarter-final-bracket__cup-image img {
    width: 100%
}

.gohockey-quarter-final-bracket__cup-name {
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

.gohockey-quarter-final-bracket__final-teams {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    width: 210px;
    height: 90px;
    background: #d19ff9;
    -ms-flex-pack: distribute;
    justify-content: space-around;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center
}

.gohockey-quarter-final-bracket__final-teams-block {
    height: 50%;
    margin-bottom: -10px
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

.gohockey-quarter-final-bracket__mobile-result {
    display: none
}

.gohockey-quarter-final-bracket__result-mobile {
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

.flex-start {
    -webkit-box-pack: start;
    -ms-flex-pack: start;
    justify-content: flex-start
}

.margin-top-10 {
    margin-top: 10px !important
}

.txt-left {
    text-align: left
}

.gohockey-quarter-final__swiper-block {
    max-width: 1360px
}

.gohockey-quarter-final__swiper {
    width: 100%
}

.gohockey-quarter-final__swiper div img {
    width: 100%;
    height: 100%
}

.gohockey-quarter-final__swiper .slick-prev,
.gohockey-quarter-final__swiper .slick-next {
    z-index: 1 !important;
    width: 50px !important;
    height: 50px !important;
    background: #fff !important
}

.gohockey-quarter-final__swiper .slick-next {
    right: -5px !important
}

.gohockey-quarter-final__swiper .slick-prev {
    left: -25px !important
}

.gohockey-quarter-final__swiper .slick-prev:before,
.gohockey-quarter-final__swiper .slick-next:before {
    font-size: 28px !important;
    font-weight: 700 !important;
    line-height: 1 !important;
    opacity: 1 !important;
    color: #000 !important;
    -webkit-font-smoothing: antialiased !important;
    -moz-osx-font-smoothing: grayscale !important
}

.gohockey-quarter-final__swiper .slick-list {
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

@media(max-width: 1390px) {
    .gohockey-quarter-final-bracket__team-info {
        width: 55px
    }

    .gohockey-quarter-final-bracket__team-name {
        display: none
    }

    .gohockey-quarter-final-bracket__quarter-result {
        max-width: 178px
    }
}

@media(max-width: 1139px) {
    .gohockey-quarter-final__about-title {
        -ms-flex-wrap: wrap;
        flex-wrap: wrap
    }

    .gohockey-quarter-final__info {
        padding-bottom: 55px
    }

    .gohockey-quarter-final__team-name {
        right: 0
    }
}

@media(max-width: 1100px) {
    .gohockey-quarter-final-bracket__score {
        width: 40px
    }

    .gohockey-quarter-final-bracket__quarter-result {
        max-width: 139px
    }

    .circle-connecting {
        width: 40px;
        height: 40px
    }

    .gohockey-quarter-final-bracket__results-block {
        height: 650px
    }

    .gohockey-quarter-final-bracket__results {
        padding-bottom: 50px
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

@media(max-width: 980px) {
    .gohockey-quarter-final-bracket {
        padding: 0
    }

    .gohockey-quarter-final-bracket__stage {
        display: none
    }

    .gohockey-quarter-final-bracket__results {
        display: none
    }

    .gohockey-quarter-final-bracket__mobile-result {
        display: block;
        width: 100%;
        padding: 0 20px
    }

    .gohockey-quarter-final-bracket__result-mobile {
        display: block
    }

    .gohockey-quarter-final-bracket__stage-mobile {
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

    .gohockey-quarter-final-bracket__quarter-result {
        height: -webkit-fit-content;
        height: -moz-fit-content;
        height: fit-content;
        max-width: -webkit-min-content;
        max-width: -moz-min-content;
        max-width: min-content;
        margin: 0;
        margin-left: auto
    }

    .gohockey-quarter-final-bracket__stage-mobile {
        display: block;
        width: 100%
    }

    .gohockey-quarter-final-bracket__score {
        height: 50px
    }

    .gohockey-quarter-final-bracket__team-info {
        width: 200px
    }

    .gohockey-quarter-final-bracket__score {
        height: 80px;
        width: 60px
    }

    .gohockey-quarter-final-bracket__team-name {
        display: block
    }

    .gohockey-quarter-final-bracket__current-stage {
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

    .gohockey-quarter-final-bracket__results-block {
        height: -webkit-fit-content;
        height: -moz-fit-content;
        height: fit-content
    }

    .gohockey-quarter-final-bracket__quarter-result-block {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center
    }

    .gohockey-quarter-final-bracket__dividing-line {
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

    .gohockey-quarter-final-bracket__dividing-line-short {
        height: 230px
    }

    .ellipse {
        position: absolute;
        left: -3px
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

    .gohockey-quarter-final-bracket__game {
        width: 100%
    }

    .gohockey-quarter-final-bracket__final-teams-block {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        margin: 20px 0 36px 0
    }
}

@media(max-width: 940px) {
    .gohockey-quarter-final__about {
        margin-right: 2%
    }

    .gohockey-quarter-final__info {
        padding-left: 20px;
        padding-right: 20px
    }
}

@media(max-width: 815px) {
    .gohockey-quarter-final-bracket__team-name {
        display: none
    }

    .gohockey-quarter-final-bracket__team-info {
        width: 55px
    }

    .gohockey-quarter-final-bracket__quarter-result {
        max-width: 178px
    }
}

@media(max-width: 800px) {
    .gohockey-quarter-final__about-title {
        min-width: 0
    }

    .gohockey-quarter-final__progress {
        display: none;
        padding-left: 0;
        margin-bottom: 30px
    }

    .gohockey-quarter-final__progress-stats {
        width: 100%
    }

    .gohockey-quarter-final__info {
        padding-top: 0;
        padding-bottom: 20px
    }

    .invisible {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex
    }

    .gohockey-quarter-final__about {
        margin-right: 0;
        max-width: 510px
    }

    .gohockey-quarter-final__nav-item {
        font-size: 16px;
        line-height: 22px
    }

    .gohockey-quarter-final__nav-item p:nth-child(1) {
        display: none
    }

    .gohockey-quarter-final__nav-item p:nth-child(2) {
        display: block
    }

    .gohockey-quarter-final__swiper button {
        display: none
    }

    .gohockey-quarter-final__line-up {
        padding: 40px 20px
    }

    .gohockey-quarter-final__arrow {
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

    .gohockey-quarter-final__swiper button {
        display: none !important
    }
}

@media(max-width: 500px) {
    .results {
        -ms-flex-wrap: wrap;
        flex-wrap: wrap
    }

    .gohockey-quarter-final__team-name {
        max-width: -webkit-fit-content;
        max-width: -moz-fit-content;
        max-width: fit-content
    }

    .gohockey-quarter-final__line-up {
        padding: 40px 20px
    }

    .gohockey-quarter-final__about {
        max-width: 340px
    }

    .gohockey-quarter-final__about-txt {
        margin-bottom: 20px
    }

    .gohockey-quarter-final__about-title {
        height: 24px;
        font-size: 0;
        line-height: 0;
        margin-bottom: 12px
    }

    .gohockey-quarter-final__about-title p:first-child {
        display: none
    }

    .gohockey-quarter-final__about-title p:nth-child(2) {
        display: contents;
        font-size: 20px;
        line-height: 25px
    }

    .gohockey-quarter-final__about-title span,
    .gohockey-quarter-final__about-title span::before,
    .gohockey-quarter-final__about-title span::after {
        font-size: 20px;
        line-height: 28px
    }

    .gohockey-quarter-final__about-title span::before,
    .gohockey-quarter-final__about-title span::after {
        top: 0
    }

    .gohockey-quarter-final__about-title span {
        -webkit-text-stroke-width: 7px;
        margin-left: 10px
    }

    .gohockey-quarter-final__progress {
        margin-bottom: 0
    }

    .gohockey-quarter-final__progress-title {
        font-size: 12px;
        line-height: 17px
    }

    .gohockey-quarter-final__progress-stats {
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
        width: 335px;
        margin-bottom: 20px
    }

    .gohockey-quarter-final__progress-stats span,
    .gohockey-quarter-final__progress-stats span::before,
    .gohockey-quarter-final__progress-stats span::after {
        font-size: 24px;
        line-height: 32px
    }

    .gohockey-quarter-final__progress-stats span {
        -webkit-text-stroke-width: 12px
    }

    .gohockey-quarter-final__progress-stats span::after {
        -webkit-text-stroke-width: 5px
    }

    .gohockey-quarter-final-bracket__cup-name {
        font-size: 16px;
        line-height: 22px
    }

    .gohockey-quarter-final-bracket__cup-image {
        width: 40px;
        height: 40px
    }
}

@media(max-width: 490px) {
    .gohockey-quarter-final-bracket__team-info {
        height: 50px;
        width: 50px
    }

    .gohockey-quarter-final-bracket__score {
        width: 35px;
        height: 50px
    }

    .gohockey-quarter-final-bracket__game {
        height: 103px
    }

    .gohockey-quarter-final-bracket__quarter-result {
        max-width: -webkit-min-content;
        max-width: -moz-min-content;
        max-width: min-content
    }

    .gohockey-quarter-final-bracket__dividing-line {
        height: 320px
    }

    .gohockey-quarter-final-bracket__dividing-line-short {
        height: 200px
    }

    .max-height {
        height: 100%
    }
}
</style>

<script>
  if ($(window).width() >= 1300) {
    $('.go-quarter-final__swiper').slick({
      infinite: false,
      slidesToShow: 4,
      slidesToScroll: 1,
    });
  }
  if (($(window).width() < 1300) && ($(window).width() >= 930)) {
    $('.go-quarter-final__swiper').slick({
      infinite: false,
      slidesToShow: 3,
      slidesToScroll: 1,
    });
  }
  if (($(window).width() < 930) && ($(window).width() >= 650)) {
    $('.go-quarter-final__swiper').slick({
      infinite: false,
      slidesToShow: 2,
      slidesToScroll: 1,
    });
  }
  if (($(window).width() < 650)) {
    $('.go-quarter-final__swiper').slick({
      infinite: false,
      slidesToShow: 1,
      slidesToScroll: 1,
    });
  }
</script><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>