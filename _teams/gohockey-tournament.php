<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Gohockey-Tournament");
?><div class="gohockey-tournament">
    <div class="gohockey-tournament__info">
        <div class="gohockey-tournament__about">
            <div class="gohockey-tournament__about-title">
                <p>Хоккейная команда</p>
                <p>Команда</p>
                <div class="gohockey-tournament__team-name"><span data-text="Gohockey" id="Gohockey">Gohockey</span></div>
            </div>
            <div class="gohockey-tournament__about-txt">Несколько лет назад мы решили популяризировать любительский хоккей
                и создать престижный дивизион с шикарным трофее</div>
            <div class="gohockey-tournament__progress invisible">
                <div class="gohockey-tournament__progress-stats">
                    <div class="gohockey-tournament__progress-victories">
                        <div class="gohockey-tournament__progress-title">Побед</div><span data-text="13"
                            id="victories-count">13</span>
                    </div>
                    <div class="gohockey-tournament__progress-points">
                        <div class="gohockey-tournament__progress-title">Очков</div><span data-text="7"
                            id="points-count">7</span>
                    </div>
                    <div class="gohockey-tournament__progress-place">
                        <div class="gohockey-tournament__progress-title">Место</div><span data-text="4"
                            id="place">4</span>
                    </div>
                </div>
            </div>
            <div class="results">
                <div class="results__title">Достижения</div>
                <div class="results__block">
                    <div class="results__image"><img src="/local/templates/new_ru/img/cupOrange.png" alt="cupOrange"></div>
                    <div class="results__txt">
                        <div class="results__competitions">Чемпионат ЛЕТО-2021</div>
                        <div class="results__place">1 место</div>
                    </div>
                </div>
                <div class="results__block">
                    <div class="results__image"><img src="/local/templates/new_ru/img/cupOrange.png" alt="cupOrange"></div>
                    <div class="results__txt">
                        <div class="results__competitions">Чемпионат ЛЕТО-2021</div>
                        <div class="results__place">1 место</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gohockey-tournament__progress">
            <div class="gohockey-tournament__progress-background" id="team-background-logo"></div>
            <div class="gohockey-tournament__progress-stats">
                <div class="gohockey-tournament__progress-victories">
                    <div class="gohockey-tournament__progress-title">Побед</div><span data-text="13"
                        id="victories-count">13</span>
                </div>
                <div class="gohockey-tournament__progress-points">
                    <div class="gohockey-tournament__progress-title">Очков</div><span data-text="7"
                        id="points-count">7</span>
                </div>
                <div class="gohockey-tournament__progress-place">
                    <div class="gohockey-tournament__progress-title">Место</div><span data-text="4" id="place">4</span>
                </div>
            </div>
        </div>
    </div>
    <div class="gohockey-tournament__info-nav">
        <div class="gohockey-tournament__nav-item">
            <p>Состав команды</p>
            <p>Состав</p>
        </div>
        <div class="gohockey-tournament__nav-item">Турниры</div>
        <div class="gohockey-tournament__nav-item">Новости</div>
    </div>
    <div class="gohockey-tournament__line-up">
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
                        <td><img src="/local/templates/new_ru/img/bull.png" alt="bull">Go</td>
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
        <div class="gohockey-tournament__staff-block">
            <div class="gohockey-tournament__title-block">
                <div class="gohockey-tournament__title">Лучшие игроки</div>
                <div class="gohockey-tournament__arrow">↖</div>
            </div>
            <div class="gohockey-tournament__swiper-block">
                <div class="gohockey-tournament__swiper">
                    <div class="gohockey-tournament__staff-person">
                        <div class="gohockey-tournament__players-staff-person-background">
                            <div class="gohockey-tournament__players-staff-person-image"><img
                                    src="/local/templates/new_ru/img/gohockeyPerson.png" alt="GohockeyPerson"></div>
                        </div>
                        <div class="gohockey-tournament__players-staff-person-progress">
                            <div class="gohockey-tournament__players-staff-person-progress-stats">
                                <div class="gohockey-tournament__players-staff-person-progress-title">Голы</div><span
                                    data-text="8" id="goals">8</span>
                            </div>
                            <div class="gohockey-tournament__players-staff-person-progress-stats">
                                <div class="gohockey-tournament__players-staff-person-progress-title">Ассисты</div><span
                                    data-text="4" id="assists">4</span>
                            </div>
                            <div class="gohockey-tournament__players-staff-person-progress-stats">
                                <div class="gohockey-tournament__players-staff-person-progress-title">Броски</div><span
                                    data-text="12" id="throws">12</span>
                            </div>
                        </div>
                        <div class="gohockey-tournament__players-staff-person-txt-block">
                            <div class="gohockey-tournament__players-staff-person-name">Сергей<br>Калачев</div>
                            <div class="gohockey-tournament__players-staff-person-number"><span data-text="13">13</span>
                            </div>
                        </div>
                    </div>
                    <div class="gohockey-tournament__staff-person">
                        <div class="gohockey-tournament__players-staff-person-background">
                            <div class="gohockey-tournament__players-staff-person-image"><img
                                    src="/local/templates/new_ru/img/gohockeyPerson.png" alt="GohockeyPerson"></div>
                        </div>
                        <div class="gohockey-tournament__players-staff-person-progress">
                            <div class="gohockey-tournament__players-staff-person-progress-stats">
                                <div class="gohockey-tournament__players-staff-person-progress-title">Голы</div><span
                                    data-text="8" id="goals">8</span>
                            </div>
                            <div class="gohockey-tournament__players-staff-person-progress-stats">
                                <div class="gohockey-tournament__players-staff-person-progress-title">Ассисты</div><span
                                    data-text="4" id="assists">4</span>
                            </div>
                            <div class="gohockey-tournament__players-staff-person-progress-stats">
                                <div class="gohockey-tournament__players-staff-person-progress-title">Броски</div><span
                                    data-text="12" id="throws">12</span>
                            </div>
                        </div>
                        <div class="gohockey-tournament__players-staff-person-txt-block">
                            <div class="gohockey-tournament__players-staff-person-name">Сергей<br>Калачев</div>
                            <div class="gohockey-tournament__players-staff-person-number"><span data-text="13">13</span>
                            </div>
                        </div>
                    </div>
                    <div class="gohockey-tournament__staff-person">
                        <div class="gohockey-tournament__players-staff-person-background">
                            <div class="gohockey-tournament__players-staff-person-image"><img
                                    src="/local/templates/new_ru/img/gohockeyPerson.png" alt="GohockeyPerson"></div>
                        </div>
                        <div class="gohockey-tournament__players-staff-person-progress">
                            <div class="gohockey-tournament__players-staff-person-progress-stats">
                                <div class="gohockey-tournament__players-staff-person-progress-title">Голы</div><span
                                    data-text="8" id="goals">8</span>
                            </div>
                            <div class="gohockey-tournament__players-staff-person-progress-stats">
                                <div class="gohockey-tournament__players-staff-person-progress-title">Ассисты</div><span
                                    data-text="4" id="assists">4</span>
                            </div>
                            <div class="gohockey-tournament__players-staff-person-progress-stats">
                                <div class="gohockey-tournament__players-staff-person-progress-title">Броски</div><span
                                    data-text="12" id="throws">12</span>
                            </div>
                        </div>
                        <div class="gohockey-tournament__players-staff-person-txt-block">
                            <div class="gohockey-tournament__players-staff-person-name">Сергей<br>Калачев</div>
                            <div class="gohockey-tournament__players-staff-person-number"><span data-text="13">13</span>
                            </div>
                        </div>
                    </div>
                    <div class="gohockey-tournament__staff-person">
                        <div class="gohockey-tournament__players-staff-person-background">
                            <div class="gohockey-tournament__players-staff-person-image"><img
                                    src="/local/templates/new_ru/img/gohockeyPerson.png" alt="GohockeyPerson"></div>
                        </div>
                        <div class="gohockey-tournament__players-staff-person-progress">
                            <div class="gohockey-tournament__players-staff-person-progress-stats">
                                <div class="gohockey-tournament__players-staff-person-progress-title">Голы</div><span
                                    data-text="8" id="goals">8</span>
                            </div>
                            <div class="gohockey-tournament__players-staff-person-progress-stats">
                                <div class="gohockey-tournament__players-staff-person-progress-title">Ассисты</div><span
                                    data-text="4" id="assists">4</span>
                            </div>
                            <div class="gohockey-tournament__players-staff-person-progress-stats">
                                <div class="gohockey-tournament__players-staff-person-progress-title">Броски</div><span
                                    data-text="12" id="throws">12</span>
                            </div>
                        </div>
                        <div class="gohockey-tournament__players-staff-person-txt-block">
                            <div class="gohockey-tournament__players-staff-person-name">Сергей<br>Калачев</div>
                            <div class="gohockey-tournament__players-staff-person-number"><span data-text="13">13</span>
                            </div>
                        </div>
                    </div>
                    <div class="gohockey-tournament__staff-person">
                        <div class="gohockey-tournament__players-staff-person-background">
                            <div class="gohockey-tournament__players-staff-person-image"><img
                                    src="/local/templates/new_ru/img/gohockeyPerson.png" alt="GohockeyPerson"></div>
                        </div>
                        <div class="gohockey-tournament__players-staff-person-progress">
                            <div class="gohockey-tournament__players-staff-person-progress-stats">
                                <div class="gohockey-tournament__players-staff-person-progress-title">Голы</div><span
                                    data-text="8" id="goals">8</span>
                            </div>
                            <div class="gohockey-tournament__players-staff-person-progress-stats">
                                <div class="gohockey-tournament__players-staff-person-progress-title">Ассисты</div><span
                                    data-text="4" id="assists">4</span>
                            </div>
                            <div class="gohockey-tournament__players-staff-person-progress-stats">
                                <div class="gohockey-tournament__players-staff-person-progress-title">Броски</div><span
                                    data-text="12" id="throws">12</span>
                            </div>
                        </div>
                        <div class="gohockey-tournament__players-staff-person-txt-block">
                            <div class="gohockey-tournament__players-staff-person-name">Сергей<br>Калачев</div>
                            <div class="gohockey-tournament__players-staff-person-number"><span data-text="13">13</span>
                            </div>
                        </div>
                    </div>
                    <div class="gohockey-tournament__staff-person">
                        <div class="gohockey-tournament__players-staff-person-background">
                            <div class="gohockey-tournament__players-staff-person-image"><img
                                    src="/local/templates/new_ru/img/gohockeyPerson.png" alt="GohockeyPerson"></div>
                        </div>
                        <div class="gohockey-tournament__players-staff-person-progress">
                            <div class="gohockey-tournament__players-staff-person-progress-stats">
                                <div class="gohockey-tournament__players-staff-person-progress-title">Голы</div><span
                                    data-text="8" id="goals">8</span>
                            </div>
                            <div class="gohockey-tournament__players-staff-person-progress-stats">
                                <div class="gohockey-tournament__players-staff-person-progress-title">Ассисты</div><span
                                    data-text="4" id="assists">4</span>
                            </div>
                            <div class="gohockey-tournament__players-staff-person-progress-stats">
                                <div class="gohockey-tournament__players-staff-person-progress-title">Броски</div><span
                                    data-text="12" id="throws">12</span>
                            </div>
                        </div>
                        <div class="gohockey-tournament__players-staff-person-txt-block">
                            <div class="gohockey-tournament__players-staff-person-name">Сергей<br>Калачев</div>
                            <div class="gohockey-tournament__players-staff-person-number"><span data-text="13">13</span>
                            </div>
                        </div>
                    </div>
                    <div class="gohockey-tournament__staff-person">
                        <div class="gohockey-tournament__players-staff-person-background">
                            <div class="gohockey-tournament__players-staff-person-image"><img
                                    src="/local/templates/new_ru/img/gohockeyPerson.png" alt="GohockeyPerson"></div>
                        </div>
                        <div class="gohockey-tournament__players-staff-person-progress">
                            <div class="gohockey-tournament__players-staff-person-progress-stats">
                                <div class="gohockey-tournament__players-staff-person-progress-title">Голы</div><span
                                    data-text="8" id="goals">8</span>
                            </div>
                            <div class="gohockey-tournament__players-staff-person-progress-stats">
                                <div class="gohockey-tournament__players-staff-person-progress-title">Ассисты</div><span
                                    data-text="4" id="assists">4</span>
                            </div>
                            <div class="gohockey-tournament__players-staff-person-progress-stats">
                                <div class="gohockey-tournament__players-staff-person-progress-title">Броски</div><span
                                    data-text="12" id="throws">12</span>
                            </div>
                        </div>
                        <div class="gohockey-tournament__players-staff-person-txt-block">
                            <div class="gohockey-tournament__players-staff-person-name">Сергей<br>Калачев</div>
                            <div class="gohockey-tournament__players-staff-person-number"><span data-text="13">13</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gohockey-tournament__title-block">
                <div class="gohockey-tournament__title">Матчи</div>
                <div class="gohockey-tournament__arrow">↖</div>
            </div>
            <div class="gohockey-tournament__swiper-block">
                <div class="gohockey-tournament__swiper">
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
                                    <div class="match__first-team-name" id="gohockey-first">GO</div>
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
                                    <div class="match__first-team-name" id="gohockey-first">GO</div>
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
                                    <div class="match__first-team-name" id="gohockey-first">GO</div>
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
                                    <div class="match__first-team-name" id="gohockey-first">GO</div>
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
                                    <div class="match__first-team-name" id="gohockey-first">GO</div>
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
                                    <div class="match__first-team-name" id="gohockey-first">GO</div>
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
                                    <div class="match__first-team-name" id="gohockey-first">GO</div>
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
                                    <div class="match__first-team-name" id="gohockey-first">GO</div>
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
.gohockey-tournament {
    width: 100%
}

.gohockey-tournament__info {
    background: -webkit-gradient(linear, left top, left bottom, from(#010453), color-stop(150.84%, rgba(8, 9, 49, 0))), url(/local/templates/new_ru/img/back.png) repeat-x;
    background: linear-gradient(180deg, #010453 0%, rgba(8, 9, 49, 0) 150.84%), url(/local/templates/new_ru/img/back.png) repeat-x;
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

.gohockey-tournament__team-name {
    width: 100%;
    max-width: 400px;
    margin-top: auto;
    position: relative;
    right: 50px
}

.gohockey-tournament__about {
    max-width: 610px;
    margin-right: 10%;
    padding-top: 40px
}

.gohockey-tournament__about-title {
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

.gohockey-tournament__about-title p:first-child {
    display: contents
}

.gohockey-tournament__about-title p:nth-child(2) {
    display: none
}

.gohockey-tournament__about-title span {
    position: relative;
    color: #ff4c01;
    -webkit-text-stroke: .16em #ff4c01;
    -webkit-text-stroke-width: 10px;
    font-size: 60px;
    font-weight: 800
}

.gohockey-tournament__about-title span::before {
    content: attr(data-text);
    position: absolute;
    -webkit-text-stroke: .02em #ff4c01;
    -webkit-text-stroke-width: 0px;
    z-index: 2
}

.gohockey-tournament__about-title span::after {
    content: attr(data-text);
    position: absolute;
    -webkit-text-stroke: .02em #020553;
    -webkit-text-stroke-width: 4px;
    right: 0;
    z-index: 1
}

.gohockey-tournament__about-txt {
    font-family: "Montserrat";
    font-style: normal;
    font-weight: 400;
    font-size: 16px;
    line-height: 20px;
    letter-spacing: .02em;
    color: rgba(255, 255, 255, .6);
    margin-bottom: 30px
}

.gohockey-tournament__progress {
    min-width: 320px;
    width: 100%;
    max-width: 515px;
    padding-left: 10px
}

.gohockey-tournament__progress-background {
    background: url(/local/templates/new_ru/img/bull_orang.png) no-repeat;
    background-size: 278px;
    height: 278px;
    width: 100%;
    background-position-x: center
}

.gohockey-tournament__progress-stats {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between
}

.gohockey-tournament__progress-title {
    font-style: normal;
    font-weight: 400;
    font-size: 20px;
    line-height: 25px;
    text-align: center;
    text-transform: uppercase;
    color: #fff;
    margin-bottom: 20px
}

.gohockey-tournament__progress-victories {
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

.gohockey-tournament__progress-victories span {
    position: relative;
    color: #000;
    -webkit-text-stroke: .16em #000;
    -webkit-text-stroke-width: 24px;
    font-size: 46px;
    line-height: 42px;
    font-weight: 800
}

.gohockey-tournament__progress-victories span::before {
    content: attr(data-text);
    position: absolute;
    -webkit-text-stroke: .02em #000;
    -webkit-text-stroke-width: 2px;
    z-index: 2
}

.gohockey-tournament__progress-victories span::after {
    content: attr(data-text);
    position: absolute;
    -webkit-text-stroke: .02em #fff;
    -webkit-text-stroke-width: 10px;
    right: 0;
    z-index: 1
}

.gohockey-tournament__progress-points {
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

.gohockey-tournament__progress-points span {
    position: relative;
    color: #000;
    -webkit-text-stroke: .16em #000;
    -webkit-text-stroke-width: 24px;
    font-size: 46px;
    line-height: 42px;
    font-weight: 800
}

.gohockey-tournament__progress-points span::before {
    content: attr(data-text);
    position: absolute;
    -webkit-text-stroke: .02em #000;
    -webkit-text-stroke-width: 2px;
    z-index: 2
}

.gohockey-tournament__progress-points span::after {
    content: attr(data-text);
    position: absolute;
    -webkit-text-stroke: .02em #fff;
    -webkit-text-stroke-width: 10px;
    right: 0;
    z-index: 1
}

.gohockey-tournament__progress-place {
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

.gohockey-tournament__progress-place span {
    position: relative;
    color: #000;
    -webkit-text-stroke: .16em #000;
    -webkit-text-stroke-width: 24px;
    font-size: 46px;
    line-height: 42px;
    font-weight: 800
}

.gohockey-tournament__progress-place span::before {
    content: attr(data-text);
    position: absolute;
    -webkit-text-stroke: .02em #000;
    -webkit-text-stroke-width: 2px;
    z-index: 2
}

.gohockey-tournament__progress-place span::after {
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

.gohockey-tournament__info-nav {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    width: 100%;
    margin-top: -5px
}

.gohockey-tournament__nav-item {
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

.gohockey-tournament__nav-item:nth-child(2) {
    border-bottom: 4px solid #ff4c01;
    color: #fff;
    height: 76px;
    font-weight: 600
}

.gohockey-tournament__nav-item p:nth-child(2) {
    display: none
}

.gohockey-tournament__nav-item:last-child {
    border-right: none
}

.gohockey-tournament__line-up {
    padding: 80px 40px;
    max-width: 1360px;
    margin: 0 auto
}

.gohockey-tournament__block {
    width: 100%;
    margin-top: 80px
}

.gohockey-tournament__title {
    padding-top: 10px
}

.gohockey-tournament__title-block {
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

.gohockey-tournament__arrow {
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

.gohockey-tournament__staff {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    margin-bottom: 60px;
    min-width: 325px
}

.gohockey-tournament__staff-person {
    height: -webkit-fit-content;
    height: -moz-fit-content;
    height: fit-content;
    background: -webkit-gradient(linear, left top, left bottom, from(#010453), color-stop(150.84%, rgba(8, 9, 49, 0))), url(/local/templates/new_ru/img/back.png) no-repeat;
    background: linear-gradient(180deg, #010453 0%, rgba(8, 9, 49, 0) 150.84%), url(/local/templates/new_ru/img/back.png) no-repeat;
    background-size: cover;
    margin-right: 20px
}

.gohockey-tournament__players-staff-person-background {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    height: 255px;
    padding-top: 10px
}

.gohockey-tournament__players-staff-person-image {
    height: calc(100% + 1px)
}

.gohockey-tournament__players-staff-person-progress {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    height: 80px;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
    background: #232323
}

.gohockey-tournament__players-staff-person-progress-stats {
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

.gohockey-tournament__players-staff-person-progress-stats span {
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

.gohockey-tournament__players-staff-person-progress-stats span::before {
    content: attr(data-text);
    position: absolute;
    -webkit-text-stroke: .02em #000;
    -webkit-text-stroke-width: 2px;
    z-index: 2
}

.gohockey-tournament__players-staff-person-progress-stats span::after {
    content: attr(data-text);
    position: absolute;
    -webkit-text-stroke: .02em #fff;
    -webkit-text-stroke-width: 4px;
    right: 0;
    z-index: 1
}

.gohockey-tournament__players-staff-person-progress-stats:not(:last-child) {
    border-right: #000 1px solid
}

.gohockey-tournament__players-staff-person-progress-title {
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

.gohockey-tournament__players-staff-person-txt-block {
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

.gohockey-tournament__players-staff-person-name {
    width: 244px
}

.gohockey-tournament__players-staff-person-number {
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
    background: #ff4c01;
    height: 80px
}

.gohockey-tournament__players-staff-person-number span {
    position: relative;
    color: #020553;
    -webkit-text-stroke: .16em #020553;
    -webkit-text-stroke-width: 10px;
    font-size: 42px;
    line-height: 42px;
    font-weight: 800
}

.gohockey-tournament__players-staff-person-number span::before {
    content: attr(data-text);
    position: absolute;
    -webkit-text-stroke: .02em #020553;
    -webkit-text-stroke-width: 1px;
    z-index: 2
}

.gohockey-tournament__players-staff-person-number span::after {
    content: attr(data-text);
    position: absolute;
    -webkit-text-stroke: .02em #ff4c01;
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
    background: #ff4c01 !important
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

.gohockey-tournament__swiper-block {
    max-width: 1360px
}

.gohockey-tournament__swiper {
    width: 100%
}

.gohockey-tournament__swiper div img {
    width: 100%;
    height: 100%
}

.gohockey-tournament__swiper .slick-prev,
.gohockey-tournament__swiper .slick-next {
    z-index: 1 !important;
    width: 50px !important;
    height: 50px !important;
    background: #fff !important
}

.gohockey-tournament__swiper .slick-next {
    right: -5px !important
}

.gohockey-tournament__swiper .slick-prev {
    left: -25px !important
}

.gohockey-tournament__swiper .slick-prev:before,
.gohockey-tournament__swiper .slick-next:before {
    font-size: 28px !important;
    font-weight: 700 !important;
    line-height: 1 !important;
    opacity: 1 !important;
    color: #000 !important;
    -webkit-font-smoothing: antialiased !important;
    -moz-osx-font-smoothing: grayscale !important
}

.gohockey-tournament__swiper .slick-list {
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
    .gohockey-tournament__about-title {
        -ms-flex-wrap: wrap;
        flex-wrap: wrap
    }

    .gohockey-tournament__info {
        padding-bottom: 55px
    }

    .gohockey-tournament__team-name {
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
    .gohockey-tournament__about {
        margin-right: 2%
    }

    .gohockey-tournament__info {
        padding-left: 20px;
        padding-right: 20px
    }
}

@media(max-width: 800px) {
    .gohockey-tournament__about-title {
        min-width: 0
    }

    .gohockey-tournament__progress {
        display: none;
        padding-left: 0;
        margin-bottom: 30px
    }

    .gohockey-tournament__progress-stats {
        width: 100%
    }

    .gohockey-tournament__info {
        padding-top: 0;
        padding-bottom: 20px
    }

    .invisible {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex
    }

    .gohockey-tournament__about {
        margin-right: 0;
        max-width: 510px
    }

    .gohockey-tournament__nav-item {
        font-size: 16px;
        line-height: 22px
    }

    .gohockey-tournament__nav-item p:nth-child(1) {
        display: none
    }

    .gohockey-tournament__nav-item p:nth-child(2) {
        display: block
    }

    .gohockey-tournament__swiper button {
        display: none
    }

    .gohockey-tournament__line-up {
        padding: 40px 20px
    }

    .gohockey-tournament__arrow {
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

    .gohockey-tournament__swiper button {
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

    .gohockey-tournament__team-name {
        max-width: -webkit-fit-content;
        max-width: -moz-fit-content;
        max-width: fit-content
    }

    .gohockey-tournament__about {
        max-width: 340px
    }

    .gohockey-tournament__about-txt {
        margin-bottom: 20px
    }

    .gohockey-tournament__about-title {
        height: 24px;
        font-size: 0;
        line-height: 0;
        margin-bottom: 12px
    }

    .gohockey-tournament__about-title p:first-child {
        display: none
    }

    .gohockey-tournament__about-title p:nth-child(2) {
        display: contents;
        font-size: 20px;
        line-height: 25px
    }

    .gohockey-tournament__about-title span,
    .gohockey-tournament__about-title span::before,
    .gohockey-tournament__about-title span::after {
        font-size: 20px;
        line-height: 28px
    }

    .gohockey-tournament__about-title span::before,
    .gohockey-tournament__about-title span::after {
        top: 0
    }

    .gohockey-tournament__about-title span {
        -webkit-text-stroke-width: 7px;
        margin-left: 10px
    }

    .gohockey-tournament__progress {
        margin-bottom: 0
    }

    .gohockey-tournament__progress-title {
        font-size: 12px;
        line-height: 17px
    }

    .gohockey-tournament__progress-stats {
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
        width: 335px;
        margin-bottom: 20px
    }

    .gohockey-tournament__progress-stats span,
    .gohockey-tournament__progress-stats span::before,
    .gohockey-tournament__progress-stats span::after {
        font-size: 24px;
        line-height: 32px
    }

    .gohockey-tournament__progress-stats span {
        -webkit-text-stroke-width: 12px
    }

    .gohockey-tournament__progress-stats span::after {
        -webkit-text-stroke-width: 5px
    }
}
</style>

<script>
	  if ($(window).width() >= 1300) {
    $('.gohockey-tournament__swiper').slick({
      infinite: false,
      slidesToShow: 4,
      slidesToScroll: 1,
    });
  }
  if (($(window).width() < 1300) && ($(window).width() >= 930)) {
    $('.gohockey-tournament__swiper').slick({
      infinite: false,
      slidesToShow: 3,
      slidesToScroll: 1,
    });
  }
  if (($(window).width() < 930) && ($(window).width() >= 650)) {
    $('.gohockey-tournament__swiper').slick({
      infinite: false,
      slidesToShow: 2,
      slidesToScroll: 1,
    });
  }
  if (($(window).width() < 650)) {
    $('.gohockey-tournament__swiper').slick({
      infinite: false,
      slidesToShow: 1,
      slidesToScroll: 1,
    });
  }
</script>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>