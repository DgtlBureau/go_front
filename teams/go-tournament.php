<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("GO-Tournament");
?><div class="go-tournament">
    <div class="go-tournament__info">
        <div class="go-tournament__about">
            <div class="go-tournament__about-title">
                <p>Хоккейная команда</p>
                <p>Команда</p>
                <div class="go-tournament__team-name"><span data-text="<?=$GLOBALS['SITE_SETTINGS']['go']['LOGO_TEXT']?>" id="GO"><?=$GLOBALS['SITE_SETTINGS']['go']['LOGO_TEXT']?></span></div>
            </div>
            <div class="go-tournament__about-txt">Несколько лет назад мы решили популяризировать любительский хоккей
                и создать престижный дивизион с шикарным трофее</div>
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
    <div class="go-tournament__info-nav">
        <div class="go-tournament__nav-item">
            <p>Состав команды</p>
            <p>Состав</p>
        </div>
        <div class="go-tournament__nav-item">Турниры</div>
        <div class="go-tournament__nav-item">Новости</div>
    </div>
    <div class="go-tournament__line-up">
        <div class="championship-course">
            <div class="championship-course__top">
                <div class="championship-course__title">Регулярный чемпионат</div>
                <div class="championship-course__stage">Плей-офф</div>
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
                <table class="championship-course__table">
                    <tr>
                        <th>№</th>
                        <th>Команда</th>
                        <th>И</th>
                        <th>В</th>
                        <th>Н</th>
                        <th>П</th>
                        <th>Ш</th>
                        <th>О</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td><img src="/local/templates/new_ru/img/blackDragon.png" alt="blackDragon">Хорс Go</td>
                        <td>21</td>
                        <td>14</td>
                        <td>3</td>
                        <td>4</td>
                        <td>99:44</td>
                        <td>28</td>
                    </tr>
                    <tr class="championship-course__our-team">
                        <td>2</td>
                        <td><img src="/local/templates/new_ru/img/bull.png" alt="bull"><?=$GLOBALS['SITE_SETTINGS']['go']['LOGO_TEXT']?></td>
                        <td>21</td>
                        <td>14</td>
                        <td>3</td>
                        <td>4</td>
                        <td>102:44</td>
                        <td>28</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td><img src="/local/templates/new_ru/img/panther.png" alt="panther">Полюс</td>
                        <td>21</td>
                        <td>14</td>
                        <td>3</td>
                        <td>4</td>
                        <td>102:44</td>
                        <td>28</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td><img src="/local/templates/new_ru/img/panther.png" alt="panther">Полюс</td>
                        <td>21</td>
                        <td>14</td>
                        <td>3</td>
                        <td>4</td>
                        <td>102:44</td>
                        <td>28</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td><img src="/local/templates/new_ru/img/panther.png" alt="panther">Полюс</td>
                        <td>21</td>
                        <td>14</td>
                        <td>3</td>
                        <td>4</td>
                        <td>102:44</td>
                        <td>28</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td><img src="/local/templates/new_ru/img/panther.png" alt="panther">Полюс</td>
                        <td>21</td>
                        <td>14</td>
                        <td>3</td>
                        <td>4</td>
                        <td>102:44</td>
                        <td>28</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td><img src="/local/templates/new_ru/img/panther.png" alt="panther">Полюс</td>
                        <td>21</td>
                        <td>14</td>
                        <td>3</td>
                        <td>4</td>
                        <td>102:44</td>
                        <td>28</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td><img src="/local/templates/new_ru/img/panther.png" alt="panther">Полюс</td>
                        <td>21</td>
                        <td>14</td>
                        <td>3</td>
                        <td>4</td>
                        <td>102:44</td>
                        <td>28</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="go-tournament__staff-block">
            <div class="go-tournament__title-block">
                <div class="go-tournament__title">Лучшие игроки</div>
                <div class="go-tournament__arrow">↖</div>
            </div>
            <div class="go-tournament__swiper-block">
                <div class="go-tournament__swiper">
                    <div class="go-tournament__staff-person">
                        <div class="go-tournament__players-staff-person-background">
                            <div class="go-tournament__players-staff-person-image"><img
                                    src="/local/templates/new_ru/img/goPerson.png" alt="personImageExample"></div>
                        </div>
                        <div class="go-tournament__players-staff-person-progress">
                            <div class="go-tournament__players-staff-person-progress-stats">
                                <div class="go-tournament__players-staff-person-progress-title">Голы</div><span
                                    data-text="8" id="goals">8</span>
                            </div>
                            <div class="go-tournament__players-staff-person-progress-stats">
                                <div class="go-tournament__players-staff-person-progress-title">Ассисты</div><span
                                    data-text="4" id="assists">4</span>
                            </div>
                            <div class="go-tournament__players-staff-person-progress-stats">
                                <div class="go-tournament__players-staff-person-progress-title">Броски</div><span
                                    data-text="12" id="throws">12</span>
                            </div>
                        </div>
                        <div class="go-tournament__players-staff-person-txt-block">
                            <div class="go-tournament__players-staff-person-name">Сергей<br>Калачев</div>
                            <div class="go-tournament__players-staff-person-number"><span data-text="13">13</span>
                            </div>
                        </div>
                    </div>
                    <div class="go-tournament__staff-person">
                        <div class="go-tournament__players-staff-person-background">
                            <div class="go-tournament__players-staff-person-image"><img
                                    src="/local/templates/new_ru/img/goPerson.png" alt="personImageExample"></div>
                        </div>
                        <div class="go-tournament__players-staff-person-progress">
                            <div class="go-tournament__players-staff-person-progress-stats">
                                <div class="go-tournament__players-staff-person-progress-title">Голы</div><span
                                    data-text="8" id="goals">8</span>
                            </div>
                            <div class="go-tournament__players-staff-person-progress-stats">
                                <div class="go-tournament__players-staff-person-progress-title">Ассисты</div><span
                                    data-text="4" id="assists">4</span>
                            </div>
                            <div class="go-tournament__players-staff-person-progress-stats">
                                <div class="go-tournament__players-staff-person-progress-title">Броски</div><span
                                    data-text="12" id="throws">12</span>
                            </div>
                        </div>
                        <div class="go-tournament__players-staff-person-txt-block">
                            <div class="go-tournament__players-staff-person-name">Сергей<br>Калачев</div>
                            <div class="go-tournament__players-staff-person-number"><span data-text="13">13</span>
                            </div>
                        </div>
                    </div>
                    <div class="go-tournament__staff-person">
                        <div class="go-tournament__players-staff-person-background">
                            <div class="go-tournament__players-staff-person-image"><img
                                    src="/local/templates/new_ru/img/goPerson.png" alt="personImageExample"></div>
                        </div>
                        <div class="go-tournament__players-staff-person-progress">
                            <div class="go-tournament__players-staff-person-progress-stats">
                                <div class="go-tournament__players-staff-person-progress-title">Голы</div><span
                                    data-text="8" id="goals">8</span>
                            </div>
                            <div class="go-tournament__players-staff-person-progress-stats">
                                <div class="go-tournament__players-staff-person-progress-title">Ассисты</div><span
                                    data-text="4" id="assists">4</span>
                            </div>
                            <div class="go-tournament__players-staff-person-progress-stats">
                                <div class="go-tournament__players-staff-person-progress-title">Броски</div><span
                                    data-text="12" id="throws">12</span>
                            </div>
                        </div>
                        <div class="go-tournament__players-staff-person-txt-block">
                            <div class="go-tournament__players-staff-person-name">Сергей<br>Калачев</div>
                            <div class="go-tournament__players-staff-person-number"><span data-text="13">13</span>
                            </div>
                        </div>
                    </div>
                    <div class="go-tournament__staff-person">
                        <div class="go-tournament__players-staff-person-background">
                            <div class="go-tournament__players-staff-person-image"><img
                                    src="/local/templates/new_ru/img/goPerson.png" alt="personImageExample"></div>
                        </div>
                        <div class="go-tournament__players-staff-person-progress">
                            <div class="go-tournament__players-staff-person-progress-stats">
                                <div class="go-tournament__players-staff-person-progress-title">Голы</div><span
                                    data-text="8" id="goals">8</span>
                            </div>
                            <div class="go-tournament__players-staff-person-progress-stats">
                                <div class="go-tournament__players-staff-person-progress-title">Ассисты</div><span
                                    data-text="4" id="assists">4</span>
                            </div>
                            <div class="go-tournament__players-staff-person-progress-stats">
                                <div class="go-tournament__players-staff-person-progress-title">Броски</div><span
                                    data-text="12" id="throws">12</span>
                            </div>
                        </div>
                        <div class="go-tournament__players-staff-person-txt-block">
                            <div class="go-tournament__players-staff-person-name">Сергей<br>Калачев</div>
                            <div class="go-tournament__players-staff-person-number"><span data-text="13">13</span>
                            </div>
                        </div>
                    </div>
                    <div class="go-tournament__staff-person">
                        <div class="go-tournament__players-staff-person-background">
                            <div class="go-tournament__players-staff-person-image"><img
                                    src="/local/templates/new_ru/img/goPerson.png" alt="personImageExample"></div>
                        </div>
                        <div class="go-tournament__players-staff-person-progress">
                            <div class="go-tournament__players-staff-person-progress-stats">
                                <div class="go-tournament__players-staff-person-progress-title">Голы</div><span
                                    data-text="8" id="goals">8</span>
                            </div>
                            <div class="go-tournament__players-staff-person-progress-stats">
                                <div class="go-tournament__players-staff-person-progress-title">Ассисты</div><span
                                    data-text="4" id="assists">4</span>
                            </div>
                            <div class="go-tournament__players-staff-person-progress-stats">
                                <div class="go-tournament__players-staff-person-progress-title">Броски</div><span
                                    data-text="12" id="throws">12</span>
                            </div>
                        </div>
                        <div class="go-tournament__players-staff-person-txt-block">
                            <div class="go-tournament__players-staff-person-name">Сергей<br>Калачев</div>
                            <div class="go-tournament__players-staff-person-number"><span data-text="13">13</span>
                            </div>
                        </div>
                    </div>
                    <div class="go-tournament__staff-person">
                        <div class="go-tournament__players-staff-person-background">
                            <div class="go-tournament__players-staff-person-image"><img
                                    src="/local/templates/new_ru/img/goPerson.png" alt="personImageExample"></div>
                        </div>
                        <div class="go-tournament__players-staff-person-progress">
                            <div class="go-tournament__players-staff-person-progress-stats">
                                <div class="go-tournament__players-staff-person-progress-title">Голы</div><span
                                    data-text="8" id="goals">8</span>
                            </div>
                            <div class="go-tournament__players-staff-person-progress-stats">
                                <div class="go-tournament__players-staff-person-progress-title">Ассисты</div><span
                                    data-text="4" id="assists">4</span>
                            </div>
                            <div class="go-tournament__players-staff-person-progress-stats">
                                <div class="go-tournament__players-staff-person-progress-title">Броски</div><span
                                    data-text="12" id="throws">12</span>
                            </div>
                        </div>
                        <div class="go-tournament__players-staff-person-txt-block">
                            <div class="go-tournament__players-staff-person-name">Сергей<br>Калачев</div>
                            <div class="go-tournament__players-staff-person-number"><span data-text="13">13</span>
                            </div>
                        </div>
                    </div>
                    <div class="go-tournament__staff-person">
                        <div class="go-tournament__players-staff-person-background">
                            <div class="go-tournament__players-staff-person-image"><img
                                    src="/local/templates/new_ru/img/goPerson.png" alt="personImageExample"></div>
                        </div>
                        <div class="go-tournament__players-staff-person-progress">
                            <div class="go-tournament__players-staff-person-progress-stats">
                                <div class="go-tournament__players-staff-person-progress-title">Голы</div><span
                                    data-text="8" id="goals">8</span>
                            </div>
                            <div class="go-tournament__players-staff-person-progress-stats">
                                <div class="go-tournament__players-staff-person-progress-title">Ассисты</div><span
                                    data-text="4" id="assists">4</span>
                            </div>
                            <div class="go-tournament__players-staff-person-progress-stats">
                                <div class="go-tournament__players-staff-person-progress-title">Броски</div><span
                                    data-text="12" id="throws">12</span>
                            </div>
                        </div>
                        <div class="go-tournament__players-staff-person-txt-block">
                            <div class="go-tournament__players-staff-person-name">Сергей<br>Калачев</div>
                            <div class="go-tournament__players-staff-person-number"><span data-text="13">13</span>
                            </div>
                        </div>
                    </div>
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
.go-tournament {
    width: 100%
}

.go-tournament__info {
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

.go-tournament__team-name {
    width: 100%;
    max-width: 400px;
    margin-top: auto;
    position: relative;
    right: 50px
}

.go-tournament__about {
    max-width: 610px;
    margin-right: 10%;
    padding-top: 40px
}

.go-tournament__about-title {
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

.go-tournament__about-title p:first-child {
    display: contents
}

.go-tournament__about-title p:nth-child(2) {
    display: none
}

.go-tournament__about-title span {
    position: relative;
    color: #d19ff9;
    -webkit-text-stroke: .16em #fff;
    -webkit-text-stroke-width: 10px;
    font-size: 60px;
    font-weight: 800
}

.go-tournament__about-title span::before {
    content: attr(data-text);
    position: absolute;
    -webkit-text-stroke: .02em #d19ff9;
    -webkit-text-stroke-width: 0px;
    z-index: 2
}

.go-tournament__about-title span::after {
    content: attr(data-text);
    position: absolute;
    -webkit-text-stroke: .02em #000;
    -webkit-text-stroke-width: 6px;
    right: 0;
    z-index: 1
}

.go-tournament__about-txt {
    font-family: "Montserrat";
    font-style: normal;
    font-weight: 400;
    font-size: 16px;
    line-height: 20px;
    letter-spacing: .02em;
    color: rgba(255, 255, 255, .6);
    margin-bottom: 30px
}

.go-tournament__progress {
    min-width: 320px;
    width: 100%;
    max-width: 515px;
    padding-left: 10px
}

.go-tournament__progress-background {
    background: url(/local/templates/new_ru/img/bull.png) no-repeat;
    background-size: 278px;
    height: 278px;
    width: 100%;
    background-position-x: center
}

.go-tournament__progress-stats {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between
}

.go-tournament__progress-title {
    font-style: normal;
    font-weight: 400;
    font-size: 20px;
    line-height: 25px;
    text-align: center;
    text-transform: uppercase;
    color: #fff;
    margin-bottom: 20px
}

.go-tournament__progress-victories {
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

.go-tournament__progress-victories span {
    position: relative;
    color: #000;
    -webkit-text-stroke: .16em #000;
    -webkit-text-stroke-width: 24px;
    font-size: 46px;
    line-height: 42px;
    font-weight: 800
}

.go-tournament__progress-victories span::before {
    content: attr(data-text);
    position: absolute;
    -webkit-text-stroke: .02em #000;
    -webkit-text-stroke-width: 2px;
    z-index: 2
}

.go-tournament__progress-victories span::after {
    content: attr(data-text);
    position: absolute;
    -webkit-text-stroke: .02em #fff;
    -webkit-text-stroke-width: 10px;
    right: 0;
    z-index: 1
}

.go-tournament__progress-points {
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

.go-tournament__progress-points span {
    position: relative;
    color: #000;
    -webkit-text-stroke: .16em #000;
    -webkit-text-stroke-width: 24px;
    font-size: 46px;
    line-height: 42px;
    font-weight: 800
}

.go-tournament__progress-points span::before {
    content: attr(data-text);
    position: absolute;
    -webkit-text-stroke: .02em #000;
    -webkit-text-stroke-width: 2px;
    z-index: 2
}

.go-tournament__progress-points span::after {
    content: attr(data-text);
    position: absolute;
    -webkit-text-stroke: .02em #fff;
    -webkit-text-stroke-width: 10px;
    right: 0;
    z-index: 1
}

.go-tournament__progress-place {
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

.go-tournament__progress-place span {
    position: relative;
    color: #000;
    -webkit-text-stroke: .16em #000;
    -webkit-text-stroke-width: 24px;
    font-size: 46px;
    line-height: 42px;
    font-weight: 800
}

.go-tournament__progress-place span::before {
    content: attr(data-text);
    position: absolute;
    -webkit-text-stroke: .02em #000;
    -webkit-text-stroke-width: 2px;
    z-index: 2
}

.go-tournament__progress-place span::after {
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

.go-tournament__info-nav {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    width: 100%;
    margin-top: -5px
}

.go-tournament__nav-item {
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

.go-tournament__nav-item:nth-child(2) {
    border-bottom: 4px solid #d19ff9;
    color: #fff;
    height: 76px;
    font-weight: 600
}

.go-tournament__nav-item p:nth-child(2) {
    display: none
}

.go-tournament__nav-item:last-child {
    border-right: none
}

.go-tournament__line-up {
    padding: 80px 40px;
    max-width: 1360px;
    margin: 0 auto
}

.go-tournament__block {
    width: 100%;
    margin-top: 80px
}

.go-tournament__title {
    padding-top: 10px
}

.go-tournament__title-block {
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

.go-tournament__arrow {
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

.go-tournament__staff {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    margin-bottom: 60px;
    min-width: 325px
}

.go-tournament__staff-person {
    height: -webkit-fit-content;
    height: -moz-fit-content;
    height: fit-content;
    background-size: cover;
    margin-right: 20px
}

.go-tournament__players-staff-person-background {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    height: 255px;
    background-size: 345px;
    background-position: center;
    padding-top: 10px
}

.go-tournament__players-staff-person-image {
    height: calc(100% + 1px)
}

.go-tournament__players-staff-person-progress {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    height: 80px;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
    background: #232323
}

.go-tournament__players-staff-person-progress-stats {
    width: 100%;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap
}

.go-tournament__players-staff-person-progress-stats span {
    position: relative;
    color: #000;
    -webkit-text-stroke: .16em #000;
    -webkit-text-stroke-width: 8px;
    font-size: 26.6667px;
    line-height: 24px;
    letter-spacing: .05em;
    font-weight: 800;
    margin-top: 10px;
    padding-bottom: 10px
}

.go-tournament__players-staff-person-progress-stats span::before {
    content: attr(data-text);
    position: absolute;
    -webkit-text-stroke: .02em #000;
    -webkit-text-stroke-width: 2px;
    z-index: 2
}

.go-tournament__players-staff-person-progress-stats span::after {
    content: attr(data-text);
    position: absolute;
    -webkit-text-stroke: .02em #fff;
    -webkit-text-stroke-width: 4px;
    right: 0;
    z-index: 1
}

.go-tournament__players-staff-person-progress-stats:not(:last-child) {
    border-right: #000 1px solid
}

.go-tournament__players-staff-person-progress-title {
    font-family: "Montserrat";
    font-style: normal;
    font-weight: 400;
    font-size: 12px;
    line-height: 25px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    text-align: center;
    text-transform: uppercase;
    color: #fff
}

.go-tournament__players-staff-person-txt-block {
    font-size: 24px;
    line-height: 29px;
    letter-spacing: .02em;
    color: #fff;
    background: #232323;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    padding-left: 20px;
    height: 80px;
    font-weight: 800;
    border-top: 1px solid #000;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between
}

.go-tournament__players-staff-person-name {
    width: 244px
}

.go-tournament__players-staff-person-number {
    width: 80px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    background: #d19ff9;
    height: 80px
}

.go-tournament__players-staff-person-number span {
    position: relative;
    color: #000;
    -webkit-text-stroke: .16em #000;
    -webkit-text-stroke-width: 10px;
    font-size: 42px;
    line-height: 42px;
    font-weight: 800
}

.go-tournament__players-staff-person-number span::before {
    content: attr(data-text);
    position: absolute;
    -webkit-text-stroke: .02em #000;
    -webkit-text-stroke-width: 1px;
    z-index: 2
}

.go-tournament__players-staff-person-number span::after {
    content: attr(data-text);
    position: absolute;
    -webkit-text-stroke: .02em #fff;
    -webkit-text-stroke-width: 4px;
    right: 0;
    z-index: 1
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
    font-weight: 600
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
    background: url(assets/ed4f44d8d3d19b808ad7.png) no-repeat;
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

.championship-course__content {
    max-width: 1360px
}

.championship-course__table {
    max-width: 1360px;
    width: 100%;
    border-collapse: collapse;
    border-spacing: 0
}

.championship-course__table tr {
    height: 60px
}

.championship-course__our-team {
    background: #d19ff9 !important
}

.championship-course__table tr td img {
    width: 36px;
    height: 36px;
    margin-right: 15px
}

.championship-course__table tr td:nth-child(2) {
    text-align: left;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    height: 60px
}

.championship-course__table tr td:not(:nth-child(2)) {
    width: 90px
}

.championship-course__table tr:nth-child(2n+1) {
    background: #141414
}

.championship-course__table tr th:nth-child(2) {
    text-align: left
}

.championship-course__table tr th {
    font-size: 16px;
    line-height: 22px;
    letter-spacing: .02em;
    text-transform: uppercase
}

.championship-course__table tr td {
    font-size: 16px;
    line-height: 20px;
    text-align: center;
    letter-spacing: .02em
}

.championship-course__our-team {
    color: #010101
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

.airOff {
    display: none
}

.go-tournament__swiper-block {
    max-width: 1360px
}

.go-tournament__swiper {
    width: 100%
}

.go-tournament__swiper div img {
    width: 100%;
    height: 100%
}

.go-tournament__swiper .slick-prev,
.go-tournament__swiper .slick-next {
    z-index: 1 !important;
    width: 50px !important;
    height: 50px !important;
    background: #fff !important
}

.go-tournament__swiper .slick-next {
    right: -5px !important
}

.go-tournament__swiper .slick-prev {
    left: -25px !important
}

.go-tournament__swiper .slick-prev:before,
.go-tournament__swiper .slick-next:before {
    font-size: 28px !important;
    font-weight: 700 !important;
    line-height: 1 !important;
    opacity: 1 !important;
    color: #000 !important;
    -webkit-font-smoothing: antialiased !important;
    -moz-osx-font-smoothing: grayscale !important
}

.go-tournament__swiper .slick-list {
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

@media(max-width: 1139px) {
    .go-tournament__about-title {
        -ms-flex-wrap: wrap;
        flex-wrap: wrap
    }

    .go-tournament__info {
        padding-bottom: 55px
    }

    .go-tournament__team-name {
        right: 0
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
    .go-tournament__about {
        margin-right: 2%
    }

    .go-tournament__info {
        padding-left: 20px;
        padding-right: 20px
    }
}

@media(max-width: 800px) {
    .go-tournament__about-title {
        min-width: 0
    }

    .go-tournament__progress {
        display: none;
        padding-left: 0;
        margin-bottom: 30px
    }

    .go-tournament__progress-stats {
        width: 100%
    }

    .go-tournament__info {
        padding-top: 0;
        padding-bottom: 20px
    }

    .invisible {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex
    }

    .go-tournament__about {
        margin-right: 0;
        max-width: 510px
    }

    .go-tournament__nav-item {
        font-size: 16px;
        line-height: 22px
    }

    .go-tournament__nav-item p:nth-child(1) {
        display: none
    }

    .go-tournament__nav-item p:nth-child(2) {
        display: block
    }

    .go-tournament__swiper button {
        display: none
    }

    .go-tournament__line-up {
        padding: 40px 20px
    }

    .go-tournament__arrow {
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

    .go-tournament__swiper button {
        display: none !important
    }
}

@media(max-width: 550px) {
    .championship-course__content {
        overflow-x: scroll
    }

    .championship-course__table {
        width: 520px
    }
}

@media(max-width: 500px) {
    .results {
        -ms-flex-wrap: wrap;
        flex-wrap: wrap
    }

    .go-tournament__team-name {
        max-width: -webkit-fit-content;
        max-width: -moz-fit-content;
        max-width: fit-content
    }

    .go-tournament__about {
        max-width: 340px
    }

    .go-tournament__about-txt {
        margin-bottom: 20px
    }

    .go-tournament__about-title {
        height: 24px;
        font-size: 0;
        line-height: 0;
        margin-bottom: 12px
    }

    .go-tournament__about-title p:first-child {
        display: none
    }

    .go-tournament__about-title p:nth-child(2) {
        display: contents;
        font-size: 20px;
        line-height: 25px
    }

    .go-tournament__about-title span,
    .go-tournament__about-title span::before,
    .go-tournament__about-title span::after {
        font-size: 20px;
        line-height: 28px
    }

    .go-tournament__about-title span::before,
    .go-tournament__about-title span::after {
        top: 0
    }

    .go-tournament__about-title span {
        -webkit-text-stroke-width: 7px;
        margin-left: 10px
    }

    .go-tournament__progress {
        margin-bottom: 0
    }

    .go-tournament__progress-title {
        font-size: 12px;
        line-height: 17px
    }

    .go-tournament__progress-stats {
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
        width: 335px;
        margin-bottom: 20px
    }

    .go-tournament__progress-stats span,
    .go-tournament__progress-stats span::before,
    .go-tournament__progress-stats span::after {
        font-size: 24px;
        line-height: 32px
    }

    .go-tournament__progress-stats span {
        -webkit-text-stroke-width: 12px
    }

    .go-tournament__progress-stats span::after {
        -webkit-text-stroke-width: 5px
    }
}</style>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>