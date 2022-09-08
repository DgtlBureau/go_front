<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("GO-Team");
?><div class="gohockey-team">
    <div class="go-team__info">
        <div class="go-team__about">
            <div class="go-team__about-title">
                <p>Хоккейная команда</p>
                <p>Команда</p>
                <div class="go-team__team-name"><span data-text="<?=$GLOBALS['SITE_SETTINGS']['go']['LOGO_TEXT']?>" id="GO"><?=$GLOBALS['SITE_SETTINGS']['go']['LOGO_TEXT']?></span></div>
            </div>
            <div class="go-team__about-txt">Несколько лет назад мы решили популяризировать любительский хоккей и
                создать престижный дивизион с шикарным трофее</div>
            <div class="go-team__progress invisible">
                <div class="go-team__progress-stats">
                    <div class="go-team__progress-victories">
                        <div class="go-team__progress-title">Побед</div><span data-text="13"
                            id="victories-count">13</span>
                    </div>
                    <div class="go-team__progress-points">
                        <div class="go-team__progress-title">Очков</div><span data-text="7"
                            id="points-count">7</span>
                    </div>
                    <div class="go-team__progress-place">
                        <div class="go-team__progress-title">Место</div><span data-text="4" id="place">4</span>
                    </div>
                </div>
            </div>
            <div class="next-match">
                <div class="next-match__title">Ближайший матч</div>
                <div class="next-match__block" id="next-match__block">
                    <div class="next-match__date-and-area">
                        <div class="next-match__date">10 сентября, 18:00</div>
                        <div class="next-match__area">Апиа арена</div>
                    </div>
                    <div class="next-match__versus">
                        <div class="next-match__first-team">
                            <div class="next-match__first-team-name" id="GO-first"><?=$GLOBALS['SITE_SETTINGS']['go']['LOGO_TEXT']?></div>
                            <div class="next-match__first-team-logo"><img src="/local/templates/new_ru/img/bull.png"
                                    alt="bull"></div>
                            <div class="next-match__first-team-name" id="GO-second"><?=$GLOBALS['SITE_SETTINGS']['go']['LOGO_TEXT']?></div>
                        </div>
                        <div class="next-match__score">
                            <div class="next-match__first-team-score">-</div>
                            <div class="next-match__score-between">:</div>
                            <div class="next-match__second-team-score">-</div>
                        </div>
                        <div class="next-match__second-team">
                            <div class="next-match__second-team-logo"><img src="/local/templates/new_ru/img/blackDragon.png"
                                    alt="blackDragon"></div>
                            <div class="next-match__second-team-name">Black<br>Dragon</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="go-team__progress">
            <div class="go-team__progress-background" id="team-background-logo"></div>
            <div class="go-team__progress-stats">
                <div class="go-team__progress-victories">
                    <div class="go-team__progress-title">Побед</div><span data-text="13"
                        id="victories-count">13</span>
                </div>
                <div class="go-team__progress-points">
                    <div class="go-team__progress-title">Очков</div><span data-text="7" id="points-count">7</span>
                </div>
                <div class="go-team__progress-place">
                    <div class="go-team__progress-title">Место</div><span data-text="4" id="place">4</span>
                </div>
            </div>
        </div>
    </div>
    <div class="go-team__info-nav">
        <div class="go-team__nav-item">
            <p>Состав команды</p>
            <p>Состав</p>
        </div>
        <div class="go-team__nav-item">Турниры</div>
        <div class="go-team__nav-item">Новости</div>
    </div>
    <div class="go-team__line-up">
        <div class="go-team__staff-block">
            <div class="go-team__staff-title">Тренерский штаб</div>
            <div class="go-team__staff">
                <div class="go-team__staff-person">
                    <div class="go-team__coaching-staff-person-image"><img src="/local/templates/new_ru/img/goPerson.png"
                            alt="goPerson"></div>
                    <div class="go-team__coaching-staff-person-txt-block">Сергей Калачев</div>
                </div>
                <div class="go-team__staff-person">
                    <div class="go-team__coaching-staff-person-image"><img src="/local/templates/new_ru/img/goPerson.png"
                            alt="goPerson"></div>
                    <div class="go-team__coaching-staff-person-txt-block">Сергей Калачев</div>
                </div>
            </div>
        </div>
        <div class="go-team__staff-block">
            <div class="go-team__staff-title">Игроки</div>
            <div class="go-team__staff">
                <div class="go-team__staff-person">
                    <div class="go-team__players-staff-person-image"><img src="/local/templates/new_ru/img/goPerson.png"
                            alt="goPerson"></div>
                    <div class="go-team__players-staff-person-txt-block">
                        <div class="go-team__players-staff-person-name">Сергей<br>Калачев</div>
                        <div class="go-team__players-staff-person-number"><span data-text="13">13</span></div>
                    </div>
                </div>
                <div class="go-team__staff-person">
                    <div class="go-team__players-staff-person-image"><img src="/local/templates/new_ru/img/goPerson.png"
                            alt="goPerson"></div>
                    <div class="go-team__players-staff-person-txt-block">
                        <div class="go-team__players-staff-person-name">Сергей<br>Калачев</div>
                        <div class="go-team__players-staff-person-number"><span data-text="13">13</span></div>
                    </div>
                </div>
                <div class="go-team__staff-person">
                    <div class="go-team__players-staff-person-image"><img src="/local/templates/new_ru/img/goPerson.png"
                            alt="goPerson"></div>
                    <div class="go-team__players-staff-person-txt-block">
                        <div class="go-team__players-staff-person-name">Сергей<br>Калачев</div>
                        <div class="go-team__players-staff-person-number"><span data-text="13">13</span></div>
                    </div>
                </div>
                <div class="go-team__staff-person">
                    <div class="go-team__players-staff-person-image"><img src="/local/templates/new_ru/img/goPerson.png"
                            alt="goPerson"></div>
                    <div class="go-team__players-staff-person-txt-block">
                        <div class="go-team__players-staff-person-name">Сергей<br>Калачев</div>
                        <div class="go-team__players-staff-person-number"><span data-text="13">13</span></div>
                    </div>
                </div>
                <div class="go-team__staff-person">
                    <div class="go-team__players-staff-person-image"><img src="/local/templates/new_ru/img/goPerson.png"
                            alt="goPerson"></div>
                    <div class="go-team__players-staff-person-txt-block">
                        <div class="go-team__players-staff-person-name">Сергей<br>Калачев</div>
                        <div class="go-team__players-staff-person-number"><span data-text="13">13</span></div>
                    </div>
                </div>
                <div class="go-team__staff-person">
                    <div class="go-team__players-staff-person-image"><img src="/local/templates/new_ru/img/goPerson.png"
                            alt="goPerson"></div>
                    <div class="go-team__players-staff-person-txt-block">
                        <div class="go-team__players-staff-person-name">Сергей<br>Калачев</div>
                        <div class="go-team__players-staff-person-number"><span data-text="13">13</span></div>
                    </div>
                </div>
                <div class="go-team__staff-person">
                    <div class="go-team__players-staff-person-image"><img src="/local/templates/new_ru/img/goPerson.png"
                            alt="goPerson"></div>
                    <div class="go-team__players-staff-person-txt-block">
                        <div class="go-team__players-staff-person-name">Сергей<br>Калачев</div>
                        <div class="go-team__players-staff-person-number"><span data-text="13">13</span></div>
                    </div>
                </div>
                <div class="go-team__staff-person">
                    <div class="go-team__players-staff-person-image"><img src="/local/templates/new_ru/img/goPerson.png"
                            alt="goPerson"></div>
                    <div class="go-team__players-staff-person-txt-block">
                        <div class="go-team__players-staff-person-name">Сергей<br>Калачев</div>
                        <div class="go-team__players-staff-person-number"><span data-text="13">13</span></div>
                    </div>
                </div>
                <div class="go-team__staff-person">
                    <div class="go-team__players-staff-person-image"><img src="/local/templates/new_ru/img/goPerson.png"
                            alt="goPerson"></div>
                    <div class="go-team__players-staff-person-txt-block">
                        <div class="go-team__players-staff-person-name">Сергей<br>Калачев</div>
                        <div class="go-team__players-staff-person-number"><span data-text="13">13</span></div>
                    </div>
                </div>
                <div class="go-team__staff-person">
                    <div class="go-team__players-staff-person-image"><img src="/local/templates/new_ru/img/goPerson.png"
                            alt="goPerson"></div>
                    <div class="go-team__players-staff-person-txt-block">
                        <div class="go-team__players-staff-person-name">Сергей<br>Калачев</div>
                        <div class="go-team__players-staff-person-number"><span data-text="13">13</span></div>
                    </div>
                </div>
                <div class="go-team__staff-person">
                    <div class="go-team__players-staff-person-image"><img src="/local/templates/new_ru/img/goPerson.png"
                            alt="goPerson"></div>
                    <div class="go-team__players-staff-person-txt-block">
                        <div class="go-team__players-staff-person-name">Сергей<br>Калачев</div>
                        <div class="go-team__players-staff-person-number"><span data-text="13">13</span></div>
                    </div>
                </div>
                <div class="go-team__staff-person">
                    <div class="go-team__players-staff-person-image"><img src="/local/templates/new_ru/img/goPerson.png"
                            alt="goPerson"></div>
                    <div class="go-team__players-staff-person-txt-block">
                        <div class="go-team__players-staff-person-name">Сергей<br>Калачев</div>
                        <div class="go-team__players-staff-person-number"><span data-text="13">13</span></div>
                    </div>
                </div>
                <div class="go-team__staff-person">
                    <div class="go-team__players-staff-person-image"><img src="/local/templates/new_ru/img/goPerson.png"
                            alt="goPerson"></div>
                    <div class="go-team__players-staff-person-txt-block">
                        <div class="go-team__players-staff-person-name">Сергей<br>Калачев</div>
                        <div class="go-team__players-staff-person-number"><span data-text="13">13</span></div>
                    </div>
                </div>
                <div class="go-team__staff-person">
                    <div class="go-team__players-staff-person-image"><img src="/local/templates/new_ru/img/goPerson.png"
                            alt="goPerson"></div>
                    <div class="go-team__players-staff-person-txt-block">
                        <div class="go-team__players-staff-person-name">Сергей<br>Калачев</div>
                        <div class="go-team__players-staff-person-number"><span data-text="13">13</span></div>
                    </div>
                </div>
                <div class="go-team__staff-person">
                    <div class="go-team__players-staff-person-image"><img src="/local/templates/new_ru/img/goPerson.png"
                            alt="goPerson"></div>
                    <div class="go-team__players-staff-person-txt-block">
                        <div class="go-team__players-staff-person-name">Сергей<br>Калачев</div>
                        <div class="go-team__players-staff-person-number"><span data-text="13">13</span></div>
                    </div>
                </div>
                <div class="go-team__staff-person">
                    <div class="go-team__players-staff-person-image"><img src="/local/templates/new_ru/img/goPerson.png"
                            alt="goPerson"></div>
                    <div class="go-team__players-staff-person-txt-block">
                        <div class="go-team__players-staff-person-name">Сергей<br>Калачев</div>
                        <div class="go-team__players-staff-person-number"><span data-text="13">13</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style> 
.go-team {
    width: 100%
}

.go-team__info {
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

.go-team__team-name {
    width: 100%;
    max-width: 400px;
    margin-top: auto;
    position: relative;
    right: 50px
}

.go-team__about {
    max-width: 610px;
    margin-right: 10%;
    padding-top: 40px
}

.go-team__about-title {
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

.go-team__about-title p:first-child {
    display: contents
}

.go-team__about-title p:nth-child(2) {
    display: none
}

.go-team__about-title span {
    position: relative;
    color: #d19ff9;
    -webkit-text-stroke: .16em #fff;
    -webkit-text-stroke-width: 10px;
    font-size: 60px;
    font-weight: 800
}

.go-team__about-title span::before {
    content: attr(data-text);
    position: absolute;
    -webkit-text-stroke: .02em #d19ff9;
    -webkit-text-stroke-width: 0px;
    z-index: 2
}

.go-team__about-title span::after {
    content: attr(data-text);
    position: absolute;
    -webkit-text-stroke: .02em #000;
    -webkit-text-stroke-width: 6px;
    right: 0;
    z-index: 1
}

.go-team__about-txt {
    font-family: "Montserrat";
    font-style: normal;
    font-weight: 400;
    font-size: 16px;
    line-height: 20px;
    letter-spacing: .02em;
    color: rgba(255, 255, 255, .6);
    margin-bottom: 30px
}

.go-team__progress {
    min-width: 320px;
    width: 100%;
    max-width: 515px;
    padding-left: 10px
}

.go-team__progress-background {
    background: url(/local/templates/new_ru/img/bull.png) no-repeat;
    background-size: 278px;
    height: 278px;
    width: 100%;
    background-position-x: center
}

.go-team__progress-stats {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between
}

.go-team__progress-title {
    font-style: normal;
    font-weight: 400;
    font-size: 20px;
    line-height: 25px;
    text-align: center;
    text-transform: uppercase;
    color: #fff;
    margin-bottom: 20px
}

.go-team__progress-victories {
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

.go-team__progress-victories span {
    position: relative;
    color: #000;
    -webkit-text-stroke: .16em #000;
    -webkit-text-stroke-width: 24px;
    font-size: 46px;
    line-height: 42px;
    font-weight: 800
}

.go-team__progress-victories span::before {
    content: attr(data-text);
    position: absolute;
    -webkit-text-stroke: .02em #000;
    -webkit-text-stroke-width: 2px;
    z-index: 2
}

.go-team__progress-victories span::after {
    content: attr(data-text);
    position: absolute;
    -webkit-text-stroke: .02em #fff;
    -webkit-text-stroke-width: 10px;
    right: 0;
    z-index: 1
}

.go-team__progress-points {
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

.go-team__progress-points span {
    position: relative;
    color: #000;
    -webkit-text-stroke: .16em #000;
    -webkit-text-stroke-width: 24px;
    font-size: 46px;
    line-height: 42px;
    font-weight: 800
}

.go-team__progress-points span::before {
    content: attr(data-text);
    position: absolute;
    -webkit-text-stroke: .02em #000;
    -webkit-text-stroke-width: 2px;
    z-index: 2
}

.go-team__progress-points span::after {
    content: attr(data-text);
    position: absolute;
    -webkit-text-stroke: .02em #fff;
    -webkit-text-stroke-width: 10px;
    right: 0;
    z-index: 1
}

.go-team__progress-place {
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

.go-team__progress-place span {
    position: relative;
    color: #000;
    -webkit-text-stroke: .16em #000;
    -webkit-text-stroke-width: 24px;
    font-size: 46px;
    line-height: 42px;
    font-weight: 800
}

.go-team__progress-place span::before {
    content: attr(data-text);
    position: absolute;
    -webkit-text-stroke: .02em #000;
    -webkit-text-stroke-width: 2px;
    z-index: 2
}

.go-team__progress-place span::after {
    content: attr(data-text);
    position: absolute;
    -webkit-text-stroke: .02em #fff;
    -webkit-text-stroke-width: 10px;
    right: 0;
    z-index: 1
}

.next-match__title {
    font-size: 16px;
    line-height: 22px;
    text-align: center;
    letter-spacing: .02em;
    color: #fff;
    text-align: left;
    margin-bottom: 10px
}

.next-match__block {
    background: #141414;
    width: 350px;
    padding: 0 40px
}

.next-match__date-and-area {
    margin-top: 16px
}

.next-match__date {
    font-size: 12px;
    line-height: 17px;
    text-align: center;
    letter-spacing: .02em;
    color: #fff
}

.next-match__area {
    font-size: 12px;
    line-height: 17px;
    text-align: center;
    letter-spacing: .02em;
    color: rgba(255, 255, 255, .4)
}

.next-match__versus {
    width: 100%;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-pack: distribute;
    justify-content: space-around;
    margin-bottom: 20px;
    font-weight: 600;
    font-size: 14px;
    line-height: 20px;
    text-align: right;
    letter-spacing: .02em;
    color: #fff
}

.next-match__first-team {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    width: 33%;
    -webkit-box-pack: end;
    -ms-flex-pack: end;
    justify-content: flex-end
}

.next-match__first-team-name {
    margin-right: 15px
}

.next-match__first-team-logo {
    height: 53px
}

.next-match__first-team-logo img {
    height: 100%
}

.next-match__second-team-logo {
    height: 53px
}

.next-match__second-team-logo img {
    height: 100%
}

.next-match #GO-second {
    display: none
}

.next-match__score {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    width: 15%;
    -ms-flex-pack: distribute;
    justify-content: space-around
}

.next-match__second-team {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    width: 33%
}

.next-match__second-team-name {
    margin-left: 15px;
    text-align: left
}

.go-team__info-nav {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    width: 100%;
    margin-top: -5px
}

.go-team__nav-item {
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

.go-team__nav-item:first-child {
    border-bottom: 4px solid #d19ff9;
    color: #fff;
    height: 76px;
    font-weight: 600
}

.go-team__nav-item p:nth-child(2) {
    display: none
}

.go-team__nav-item:last-child {
    border-right: none
}

.go-team__line-up {
    padding: 80px 40px
}

.go-team__staff-block {
    width: 100%;
    margin-top: 80px
}

.go-team__staff-title {
    font-size: 42px;
    line-height: 52px;
    letter-spacing: .02em;
    color: #fff;
    margin-bottom: 40px;
    font-weight: 600
}

.go-team__staff {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -20px
}

.go-team__staff-person {
    width: 325px;
    height: -webkit-fit-content;
    height: -moz-fit-content;
    height: fit-content;
    background: -webkit-gradient(linear, left top, left bottom, from(#000000), color-stop(143.87%, rgba(0, 0, 0, 0))), url(/local/templates/new_ru/img/back.png);
    background: linear-gradient(180deg, #000000 0%, rgba(0, 0, 0, 0) 143.87%), url(/local/templates/new_ru/img/back.png);
    margin-right: 20px;
    margin-bottom: 20px
}

.go-team__coaching-staff-person-image {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    margin-top: 30px;
    width: 285px;
    position: relative;
    left: 20px;
    height: 373px
}

.go-team__coaching-staff-person-image img {
    width: 100%
}

.go-team__coaching-staff-person-txt-block {
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
    border-top: 1px solid #000
}

.go-team__players-staff-person-image {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    margin-top: 30px;
    width: 285px;
    position: relative;
    left: 20px;
    height: 373px
}

.go-team__players-staff-person-image img {
    width: 100%
}

.go-team__players-staff-person-txt-block {
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
    border-top: 1px solid #000
}

.go-team__players-staff-person-name {
    width: 244px
}

.go-team__players-staff-person-number {
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

.go-team__players-staff-person-number span {
    position: relative;
    color: #000;
    -webkit-text-stroke: .16em #000;
    -webkit-text-stroke-width: 10px;
    font-size: 42px;
    line-height: 42px;
    font-weight: 800
}

.go-team__players-staff-person-number span::before {
    content: attr(data-text);
    position: absolute;
    -webkit-text-stroke: .02em #000;
    -webkit-text-stroke-width: 1px;
    z-index: 2
}

.go-team__players-staff-person-number span::after {
    content: attr(data-text);
    position: absolute;
    -webkit-text-stroke: .02em #fff;
    -webkit-text-stroke-width: 4px;
    right: 0;
    z-index: 1
}

.invisible {
    display: none
}

@media(max-width: 1139px) {
    .go-team__about-title {
        -ms-flex-wrap: wrap;
        flex-wrap: wrap
    }

    .go-team__info {
        padding-bottom: 55px
    }

    .go-team__team-name {
        right: 0
    }
}

@media(max-width: 940px) {
    .go-team__about {
        margin-right: 2%
    }

    .go-team__info {
        padding-left: 20px;
        padding-right: 20px
    }
}

@media(max-width: 800px) {
    .go-team__about-title {
        min-width: 0
    }

    .go-team-go {
        padding-top: 30px
    }

    .go-team__progress {
        display: none;
        padding-left: 0;
        margin-bottom: 30px
    }

    .go-team__progress-stats {
        width: 100%
    }

    .go-team__info {
        padding-top: 0;
        padding-bottom: 20px
    }

    .invisible {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex
    }

    .go-team__about {
        margin-right: 0;
        max-width: 510px
    }

    .go-team__nav-item {
        font-size: 16px;
        line-height: 22px
    }

    .go-team__nav-item p:nth-child(1) {
        display: none
    }

    .go-team__nav-item p:nth-child(2) {
        display: block
    }
}

@media(max-width: 500px) {
    .next-match__block {
        width: 335px;
        height: 120px;
        padding: 15px 0px
    }

    .next-match #GO-first {
        display: none
    }

    .next-match #GO-second {
        display: block
    }

    .next-match__first-team-name,
    .next-match__first-team-logo {
        text-align: center;
        margin-right: 0
    }

    .next-match__first-team,
    .next-match__second-team {
        display: block
    }

    .next-match__second-team-logo,
    .next-match__second-team-name {
        text-align: center;
        margin-left: 0
    }

    .next-match__date-and-area {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        margin-bottom: 15px;
        margin-top: 0
    }

    .next-match__date {
        text-align: right;
        margin-right: 10px
    }

    .next-match__area {
        text-align: left
    }

    .go-team__team-name {
        max-width: -webkit-fit-content;
        max-width: -moz-fit-content;
        max-width: fit-content
    }

    .go-team__line-up {
        padding: 40px 20px
    }

    .go-team__nav-item p:nth-child(1) {
        display: none
    }

    .go-team__nav-item p:nth-child(2) {
        display: block
    }

    .go-team__about {
        max-width: 340px
    }

    .go-team__about-txt {
        margin-bottom: 20px
    }

    .go-team__about-title {
        height: 24px;
        font-size: 0;
        line-height: 0;
        margin-bottom: 12px
    }

    .go-team__about-title p:first-child {
        display: none
    }

    .go-team__about-title p:nth-child(2) {
        display: contents;
        font-size: 20px;
        line-height: 25px
    }

    .go-team__about-title span,
    .go-team__about-title span::before,
    .go-team__about-title span::after {
        font-size: 20px;
        line-height: 28px
    }

    .go-team__about-title span::before,
    .go-team__about-title span::after {
        top: 0
    }

    .go-team__about-title span {
        -webkit-text-stroke-width: 7px;
        margin-left: 10px
    }

    .go-team__progress {
        margin-bottom: 0
    }

    .go-team__progress-title {
        font-size: 12px;
        line-height: 17px
    }

    .go-team__progress-stats {
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
        width: 335px;
        margin-bottom: 20px
    }

    .go-team__progress-stats span,
    .go-team__progress-stats span::before,
    .go-team__progress-stats span::after {
        font-size: 24px;
        line-height: 32px
    }

    .go-team__progress-stats span {
        -webkit-text-stroke-width: 12px
    }

    .go-team__progress-stats span::after {
        -webkit-text-stroke-width: 5px
    }
}
</style>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>