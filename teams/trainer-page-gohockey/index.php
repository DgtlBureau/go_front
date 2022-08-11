<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Страница игрока");
?>


<?$APPLICATION->IncludeComponent(
    "bitrix:news",
    "trener_page_gohockey",
    array(
        "ADD_ELEMENT_CHAIN" => "N",
        "ADD_SECTIONS_CHAIN" => "Y",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "BROWSER_TITLE" => "-",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "CHECK_DATES" => "Y",
        "DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
        "DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
        "DETAIL_DISPLAY_TOP_PAGER" => "N",
        "DETAIL_FIELD_CODE" => array(
            0 => "",
            1 => "",
        ),
        "DETAIL_PAGER_SHOW_ALL" => "Y",
        "DETAIL_PAGER_TEMPLATE" => "",
        "DETAIL_PAGER_TITLE" => "Страница",
        "PROPERTY_CODE" => array(0=>"ASSISTS",1=>"GOALS",2=>"DATE_OF_BIRTH",3=>"GAMES",4=>"QUALIFICATION",5=>"PLACE",6=>"DESCRIPTION",7=>"POSITION",8=>"HEIGHT",9=>"GRIP",10=>"CHAMPIONSHIP",11=>"PENALTY_MINUTES",12=>"BANNER",13=>"BULL",14=>"GALARY",15=>"GAMER",16=>"ICON",17=>"ICON_T",),
        "DETAIL_PROPERTY_CODE" => array(0=>"ASSISTS",1=>"GOALS",2=>"DATE_OF_BIRTH",3=>"GAMES",4=>"QUALIFICATION",5=>"PLACE",6=>"DESCRIPTION",7=>"POSITION",8=>"HEIGHT",9=>"GRIP",10=>"CHAMPIONSHIP",11=>"PENALTY_MINUTES",12=>"BANNER",13=>"BULL",14=>"GALARY",15=>"GAMER",16=>"ICON",17=>"ICON_T",),
        "DETAIL_SET_CANONICAL_URL" => "N",
        "DISPLAY_BOTTOM_PAGER" => "Y",
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "HIDE_LINK_WHEN_NO_DETAIL" => "Y",
        "IBLOCK_ID" => "17",
        "IBLOCK_TYPE" => "team",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
        "LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
        "LIST_FIELD_CODE" => array(
            0 => "",
            1 => "",
        ),
        "LIST_PROPERTY_CODE" => array(
            0 => "NUMBER",
            1 => "",
        ),
        "MESSAGE_404" => "",
        "META_DESCRIPTION" => "-",
        "META_KEYWORDS" => "-",
        "NEWS_COUNT" => "20",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => "arrows",
        "PAGER_TITLE" => "Новости",
        "PREVIEW_TRUNCATE_LEN" => "",
        "SEF_FOLDER" => "/teams/trainer-page-gohockey/",
        "SEF_MODE" => "Y",
        "SET_LAST_MODIFIED" => "N",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "Y",
        "SHOW_404" => "N",
        "SORT_BY1" => "ACTIVE_FROM",
        "SORT_BY2" => "SORT",
        "SORT_ORDER1" => "DESC",
        "SORT_ORDER2" => "ASC",
        "STRICT_SECTION_CHECK" => "N",
        "USE_CATEGORIES" => "N",
        "USE_FILTER" => "N",
        "USE_PERMISSIONS" => "N",
        "USE_RATING" => "N",
        "USE_REVIEW" => "N",
        "USE_RSS" => "N",
        "USE_SEARCH" => "N",
        "USE_SHARE" => "N",
        "COMPONENT_TEMPLATE" => "trener_page_gohockey",
        "SEF_URL_TEMPLATES" => array(
            "news" => "",
            "section" => "",
            "detail" => "#ELEMENT_CODE#/",
        )
    ),
    false
);?>

<style>
    .go-trainer {
        max-width: 1380px;
        margin: 0 auto
    }

    .go-trainer__content {
        width: 100%;
        padding: 80px 20px 0 20px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between
    }

    .go-trainer__biograph {
        min-width: 600px
    }

    .go-trainer__achievements {
        width: 50%
    }

    .biography__block-title,
    .achievements__block-title {
        margin-bottom: 40px
    }

    .biography__title,
    .achievements__title {
        font-size: 42px;
        line-height: 52px;
        letter-spacing: .02em
    }

    .biography {
        padding-right: 10px
    }

    .biography__text-block {
        font-style: normal;
        font-weight: 500;
        font-size: 20px;
        line-height: 25px;
        letter-spacing: .02em;
        color: rgba(255, 255, 255, .8)
    }

    .biography__text:not(:last-child) {
        margin-bottom: 16px
    }

    .biography__text {
        max-width: 610px
    }

    .biography__text p {
        font-family: "Montserrat", sans-serif
    }

    .achievements__block-title {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between
    }

    .achievements__arrow {
        font-style: normal;
        font-weight: 400;
        font-size: 63px;
        line-height: 55px;
        letter-spacing: .02em;
        -webkit-transform: rotate(-90deg);
        transform: rotate(-90deg)
    }

    .season__data {
        font-style: normal;
        font-weight: 400;
        font-size: 16px;
        line-height: 22px;
        letter-spacing: .02em;
        text-transform: uppercase;
        margin-bottom: 32px
    }

    .season__item {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        margin-bottom: 28px
    }

    .season__img {
        max-width: 56px;
        min-width: 44px;
        margin-right: 24px
    }

    .season__img img {
        width: 100%
    }

    .season__block-text {
        width: 420px;
        font-style: normal;
        font-weight: 400;
        font-size: 20px;
        line-height: 28px;
        letter-spacing: .02em
    }

    .season__block-text span {
        font-size: 16px;
        line-height: 22px;
        letter-spacing: .02em;
        color: rgba(255, 255, 255, .8)
    }

    @media(max-width: 1100px) {
        .achievements__arrow {
            display: none
        }

        .season {
            margin-bottom: 50px
        }
    }

    @media(max-width: 1050px) {
        .go-trainer__content {
            display: block
        }

        .go-trainer__achievements {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            width: 100%
        }

        .biography__text-block {
            margin-bottom: 40px
        }

        .achievements__block-title {
            width: 100%
        }

        .achievements__season {
            margin-bottom: 20px
        }

        .achievements__season:nth-last-child(2n) {
            margin-right: 30px
        }
    }

    @media(max-width: 1024px) {
        .achievements__season:nth-last-child(2n) {
            margin-right: 0px
        }
    }

    @media(max-width: 425px) {
        .go-trainer__achievements {
            display: block
        }

        .biography__title,
        .achievements__title {
            font-size: 28px;
            line-height: 39px
        }

        .biography__block-title,
        .achievements__block-title {
            margin-bottom: 20px
        }

        .biography__text-block {
            font-size: 16px;
            line-height: 20px
        }

        .achievements__season {
            margin-bottom: 20px
        }

        .season__item {
            margin-bottom: 16px
        }

        .season__data {
            margin-bottom: 16px
        }

        .season__img {
            width: 44px;
            margin-right: 16px
        }

        .season__block-text {
            font-size: 16px;
            line-height: 22px;
            max-width: 290px
        }

        .season__block-text span {
            font-size: 16px;
            line-height: 20px
        }
    }

    @media(max-width: 375px) {
        .season__block-text {
            max-width: 280px
        }
    }
</style>
    <div class="gohockey-trainer">
        <div class="banner_video">
            <div class="bull_image_orang">
                <div class="back_image_orang"></div>
            </div>
            <div class="banner_block">
                <div class="player_img">
                    <img src="/upload/iblock/d02/rcxm00uw2rmik5sezku01xvwvt478vy1.png" alt="Сергей Калачев">
                </div>
                <div class="player_desc">
                    <div class="banner_title">
                        <h1 class="h1">Сергей Калачев                    <span class="player_num_orang" data-text="3">3</span>
                        </h1>
                    </div>
                    <div class="banner_desc">
                        <div class="property_block">
                            <div class="banner_property">
                                <span class="pos_name">Позиция</span>
                                <div class="pos_value">тест</div>
                            </div>
                            <div class="banner_property">
                                <span class="pos_name">Хват</span>
                                <div class="pos_value">тест</div>
                            </div>
                            <div class="banner_property">
                                <span class="pos_name">Квалификация</span>
                                <div class="pos_value">тест</div>
                            </div>
                        </div>
                        <div class="property_block">
                            <div class="banner_property">
                                <span class="pos_name">Рост/Вес</span>
                                <div class="pos_value">тест</div>
                            </div>
                            <div class="banner_property">
                                <span class="pos_name">Дата рождения</span>
                                <div class="pos_value">тест</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="go-trainer__content">
            <div class="go-trainer__biography biography">
                <div class="biography__block-title">
                    <h2 class="biography__title">Биография</h2>
                </div>
                <div class="biography__text-block">
                    <div class="biography__text">
                        <p>В 3,5 года родители отдали учиться кататься на коньках, в 4 года начал заниматься хоккеем.
                        </p>
                    </div>
                    <div class="biography__text">
                        <p>Занимался в спортивных школах:</p>
                        <p>ДЮСШ «Пингвины» 2000-2006;</p>
                        <p>СДЮШОР «Русь» 2006-2008;</p>
                        <p>ХК «Буревестник» 2008-2010;</p>
                        <p>ДЮСШ 2 «Северная Звезда» 2010-2011;</p>
                        <p>ДЮСШ "Пингвины" 2011-2014;</p>
                        <p>ХК «Ледяные волки МАИ» 2013-2020.</p>
                    </div>
                    <div class="biography__text">
                        <p>В команде «GO» (ранее «Суханово Парк») с 2016 года. Тренерскую карьеру начал с 2018 года.</p>
                    </div>
                </div>
            </div>
            <div class="go-trainer__achievements achievements">
                <div class="achievements__block-title">
                    <h2 class="achievements__title">Достижения</h2>
                    <div class="achievements__arrow">↖</div>
                </div>
                <div class="achievements__season season">
                    <div class="season__data">
                        <p>Сезон 2021/22</p>
                    </div>
                    <div class="season__item">
                        <div class="season__img"><img src="/local/templates/new_ru/img/cub-image.png" alt="cub-image"></div>
                        <div class="season__block-text">
                            <p class="season__text">Серебряные призеры регулярного чемпионата ЛХЛ-77<span> (дивизион
                                «Тактик»)</span></p>
                        </div>
                    </div>
                    <div class="season__item">
                        <div class="season__img"><img src="/local/templates/new_ru/img/cub-image.png" alt="lhl-image"></div>
                        <div class="season__block-text">
                            <p class="season__text">Чемпионы чемпионата ЛХЛ-77 <span>(дивизион «Тактик»)</span></p>
                        </div>
                    </div>
                    <div class="season__item">
                        <div class="season__img"><img src="/local/templates/new_ru/img/cub-image.png" alt="lhl-image"></div>
                        <div class="season__block-text">
                            <p class="season__text">Чемпионы чемпионата ЛХЛ-77 <span>(дивизион «Тактик»)</span></p>
                        </div>
                    </div>
                </div>
                <div class="achievements__season season">
                    <div class="season__data">
                        <p>Сезон 2021/22</p>
                    </div>
                    <div class="season__item">
                        <div class="season__img"><img src="/local/templates/new_ru/img/cub-image.png" alt="cub-image"></div>
                        <div class="season__block-text">
                            <p class="season__text">Серебряные призеры регулярного чемпионата ЛХЛ-77<span> (дивизион
                                «Тактик»)</span></p>
                        </div>
                    </div>
                    <div class="season__item">
                        <div class="season__img"><img src="/local/templates/new_ru/img/cub-image.png" alt="lhl-image"></div>
                        <div class="season__block-text">
                            <p class="season__text">Чемпионы чемпионата ЛХЛ-77 <span>(дивизион «Тактик»)</span></p>
                        </div>
                    </div>
                    <div class="season__item">
                        <div class="season__img"><img src="/local/templates/new_ru/img/cub-image.png" alt="lhl-image"></div>
                        <div class="season__block-text">
                            <p class="season__text">Чемпионы чемпионата ЛХЛ-77 <span>(дивизион «Тактик»)</span></p>
                        </div>
                    </div>
                </div>
                <div class="achievements__season season">
                    <div class="season__data">
                        <p>Сезон 2021/22</p>
                    </div>
                    <div class="season__item">
                        <div class="season__img"><img src="/local/templates/new_ru/img/cub-image.png" alt="cub-image"></div>
                        <div class="season__block-text">
                            <p class="season__text">Серебряные призеры регулярного чемпионата ЛХЛ-77<span> (дивизион
                                «Тактик»)</span></p>
                        </div>
                    </div>
                    <div class="season__item">
                        <div class="season__img"><img src="/local/templates/new_ru/img/cub-image.png" alt="lhl-image"></div>
                        <div class="season__block-text">
                            <p class="season__text">Чемпионы чемпионата ЛХЛ-77 <span>(дивизион «Тактик»)</span></p>
                        </div>
                    </div>
                    <div class="season__item">
                        <div class="season__img"><img src="/local/templates/new_ru/img/cub-image.png" alt="lhl-image"></div>
                        <div class="season__block-text">
                            <p class="season__text">Чемпионы чемпионата ЛХЛ-77 <span>(дивизион «Тактик»)</span></p>
                        </div>
                    </div>
                </div>
                <div class="achievements__season season">
                    <div class="season__data">
                        <p>Сезон 2016/17</p>
                    </div>
                    <div class="season__item">
                        <div class="season__img"><img src="/local/templates/new_ru/img/cub-orange-image.png" alt="cub-orange-image">
                        </div>
                        <div class="season__block-text">
                            <p class="season__text">Бронзовые призеры регулярного чемпионата<span> (дивизион
                                «Тактик»)</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<style>

    .banner_video {
        height: 584px;
        width: 100%;
        background: linear-gradient(180deg, #000000 0%, rgb(0 0 0) 143.87%);
    }

    .back_image {
        background-image: linear-gradient(360deg, #000000 0%, rgb(0 0 0 / 0%) 110.87%), url(/local/templates/new_ru/img/back.png);
        mix-blend-mode: normal;
        width: 100%;
        height: 584px;
        transform: rotate(-180deg);
    }

    .back_image_orang {
        background-image: linear-gradient(360deg, #020553 0%, rgba(0, 4, 126, 0) 125.87%), url(/local/templates/new_ru/img/back.png);
        mix-blend-mode: normal;
        width: 100%;
        height: 584px;
        transform: rotate(-180deg);
    }

    .bull_image {
        background: linear-gradient(180deg, #000000 0%, rgb(0 0 0 / 0%) 27.87%), url(/local/templates/new_ru/img/bull.png) no-repeat;
        height: 584px;
        width: 100%;
        background-position-y: 75px;
        background-position-x: 7%;
        background-size: 594px;
        mix-blend-mode: normal;
    }

    .bull_image_orang {
        background: linear-gradient(185deg, #000000ba 0%, rgb(0 0 0 / 0%) 110.87%), url(/local/templates/new_ru/img/bull_orang.png) no-repeat;
        height: 584px;
        width: 100%;
        background-position-y: 75px;
        background-position-x: 7%;
        background-size: 594px;
        mix-blend-mode: normal;
    }

    .player_img {
        position: absolute;
        width: 637px;
        top: 142px;
        text-align: center;
    }

    .player_img img {
        width: 50%;
    }

    .player_desc {
        width: 100%;
        position: absolute;
        top: 190px;
    }

    .banner_title {
        width: 405px;
        transform: translateX(660px);
        -webkit-transform: translateX(660px);
        -moz-transform: translateX(660px);
        -ms-transform: translateX(660px);
        -o-transform: translateX(660px);
    }

    img.thirteen {
        width: 90px;
    }

    h1.h1 {
        color: #fff;
        font-style: normal;
        font-weight: 800;
        font-size: 60px;
        line-height: 65px;
        letter-spacing: 0.02em;
    }

    .banner_desc {
        width: 100%;
        margin-top: 40px;
    }

    .property_block {
        display: flex;
        position: relative;
        margin-left: 665px;
    }

    .banner_property {
        width: 230px;
        height: 80px;
    }

    span.pos_name {
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 400;
        font-size: 13px;
        line-height: 20px;
        display: flex;
        align-items: center;
        letter-spacing: 0.02em;
        color: rgba(255, 255, 255, 0.6);
    }

    .pos_value {
        font-weight: 400;
        font-size: 20px;
        line-height: 25px;
        display: flex;
        text-transform: uppercase;
        color: #fff;
    }

    span.player_num {
        position: relative;
        color: #D19FF9;
        -webkit-text-stroke: 0.16em #fff;
        font-size: 60px;
        font-weight: 800;
    }

    span.player_num:before {
        content: attr(data-text);
        position: absolute;
        left: 0;
        right: 0;
        -webkit-text-stroke: 0.05em #000;
    }

    span.player_num_orang {
        position: relative;
        color: #FF4C01;
        -webkit-text-stroke: 0.16em #FF4C01;
        font-size: 60px;
        font-weight: 800;
    }

    span.player_num_orang:before {
        content: attr(data-text);
        position: absolute;
        left: 0;
        right: 0;
        -webkit-text-stroke: 0.05em #020553;
    }

    span.stat_num {
        position: relative;
        color: black;
        -webkit-text-stroke: 0.16em #000;
        font-size: 60px;
        font-weight: 800;
    }

    span.stat_num:before {
        content: attr(data-text);
        position: absolute;
        left: 0;
        right: 0;
        -webkit-text-stroke: 0.02em #fff;
    }

    span.stat_num_orang {
        position: relative;
        color: #FF4C01;
        -webkit-text-stroke: 0.16em #000;
        font-size: 60px;
        font-weight: 800;
    }

    span.stat_num_orang:before {
        content: attr(data-text);
        position: absolute;
        left: 0;
        right: 0;
        -webkit-text-stroke: 0.02em #fff;
    }
</style>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>