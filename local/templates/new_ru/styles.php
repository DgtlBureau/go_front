<style>
    .go-team .go-news__progress-background,
    .go-team .go-victory__progress-background,
    .go-team .go-team__progress-background,
    .go-team .go-final__progress-background,
    .go-team .go-tournament__progress-background {
        background: url(<?=$GLOBALS['SITE_SETTINGS']['go']['LOGO_FILE_SRC']?>) no-repeat;
        background-size: 278px;
        height: 278px;
        width: 100%;
        background-position-x: center;
    }

    .go-team .back-logo {
        width: 100%;
        max-height: 440px;
        height: 100%;
        background-position: 9% 0;
        color: #fff;
        z-index: -1;
        position: absolute;
        background: url(<?=$GLOBALS['SITE_SETTINGS']['go']['LOGO_FILE_SRC']?>) no-repeat;
        background-size: auto 100%;
    }

    .go-team .go-team__players-staff-person-number,
    .go-team .go-tournament__players-staff-person-number {
            background: <?=$GLOBALS['SITE_SETTINGS']['go']['COLOR_MAIN']?>;
    }

    .go-team .go-tournament__players-staff-person-background {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        height: 255px;
        background: -webkit-gradient(linear, left top, left bottom, from(#000000), color-stop(143.87%, rgba(0, 0, 0, 0))), url(<?=$GLOBALS['SITE_SETTINGS']['go']['LOGO_FILE_SRC']?>) no-repeat;
        background: linear-gradient(180deg, #000000 0%, rgba(0, 0, 0, 0) 143.87%), url(<?=$GLOBALS['SITE_SETTINGS']['go']['LOGO_FILE_SRC']?>) no-repeat;
        background-size: 345px;
        background-position: center;
        padding-top: 10px
    }

    .team>.go-team:before {
        background: url(<?=$GLOBALS['SITE_SETTINGS']['go']['LOGO_FILE_SRC']?>) no-repeat;
        background-position: bottom;
        background-size: 40%;
        content: "";
        display: inline-block;
        height: 100%;
        opacity: .2;
        position: absolute;
        width: 100%;
    }

    .go-tournament__staff-person {
        background: -webkit-gradient(linear, left top, left bottom, from(#000000), color-stop(65.87%, rgba(0, 0, 0, 0))), url(<?=$GLOBALS['SITE_SETTINGS']['go']['BACKGROUND_FILE_SRC']?>) no-repeat;
    }

    .go-team .go-tournament__players-staff-person-background_blue {
        background: linear-gradient(180deg, #010453 0%, rgba(8, 9, 49, 0) 150.84%), url(<?=$GLOBALS['SITE_SETTINGS']['go']['LOGO_FILE_SRC']?>) no-repeat;
    }

    .go-team .back_image {
        background-image: linear-gradient(360deg, #000000 0%, rgb(0 0 0 / 0%) 110.87%), url(<?=$GLOBALS['SITE_SETTINGS']['go']['BACKGROUND_FILE_SRC']?>);
        mix-blend-mode: normal;
        width: 100%;
        height: 584px;
        transform: rotate(-180deg);
    }

    .go-team .back-go-team__info,
    .go-team .back-go-tournament__info,
    .go-team .back-go-final__info,
    .go-team .back-go-news__info,
    .go-team .back-go-banner {
        background: -webkit-gradient(linear, left top, left bottom, from(#000000), color-stop(143.87%, rgba(0, 0, 0, 0))), url(<?=$GLOBALS['SITE_SETTINGS']['go']['BACKGROUND_FILE_SRC']?>);
        background: linear-gradient(180deg, #000000 0%, rgba(0, 0, 0, 0) 143.87%), url(<?=$GLOBALS['SITE_SETTINGS']['go']['BACKGROUND_FILE_SRC']?>);
        background-size: 100% 110%;
    }


    .gohockey-team .back-go-team__info,
    .gohockey-team .back-go-tournament__info,
    .gohockey-team .back-go-final__info,
    .gohockey-team .back-go-news__info,
    .gohockey-team .back-go-banner {
        background: linear-gradient(180deg, #010453 0%, rgba(8, 9, 49, 0) 150.84%), url(<?=$GLOBALS['SITE_SETTINGS']['gohockey']['BACKGROUND_FILE_SRC']?>);
        background-size: 100% 110%;
    }

    .gohockey-team .back_image_orang {
        background-image: linear-gradient(360deg, #020553 0%, rgba(0, 4, 126, 0) 125.87%), url(<?=$GLOBALS['SITE_SETTINGS']['gohockey']['BACKGROUND_FILE_SRC']?>);
        mix-blend-mode: normal;
        width: 100%;
        height: 584px;
        transform: rotate(-180deg);
    }

    .gohockey-team .go-final__progress-background,
    .gohockey-team .go-news__progress-background,
    .gohockey-team .go-tournament__progress-background,
    .gohockey-team .go-team__progress-background,
    .gohockey-team .gohockey-team__progress-background,
    .gohockey-team .gohockey-news__progress-background,
    .gohockey-team .gohockey-victory__progress-background,
    .gohockey-team .gohockey-final__progress-background,
    .gohockey-team .gohockey-tournament__progress-background,
    .gohockey-team .gohockey-trainer .go-banner {
        background: url(<?=$GLOBALS['SITE_SETTINGS']['gohockey']['LOGO_FILE_SRC']?>) no-repeat;
        background-size: 278px;
        height: 278px;
        width: 100%;
        background-position-x: center;
    }

    .gohockey-team .back-logo {
        width: 100%;
        max-height: 440px;
        height: 100%;
        background-position: 9% 0;
        color: #fff;
        z-index: -1;
        position: absolute;
        background: url(<?=$GLOBALS['SITE_SETTINGS']['gohockey']['LOGO_FILE_SRC']?>) no-repeat;
        background-size: auto 100%;
    }




    .gohockey-team .go-tournament__players-staff-person-background_orange {
        background: linear-gradient(180deg, #010453 0%, rgba(8, 9, 49, 0) 150.84%), url(<?=$GLOBALS['SITE_SETTINGS']['gohockey']['LOGO_FILE_SRC']?>) no-repeat;
    }

    .team>.gohockey-team:before {
        background: url(<?=$GLOBALS['SITE_SETTINGS']['gohockey']['LOGO_FILE_SRC']?>) no-repeat;
        background-position: bottom;
        background-size: 40%;
        content: "";
        display: inline-block;
        height: 100%;
        opacity: .2;
        position: absolute;
        width: 100%;
    }


    /* color #d19ff9 */
    .go-team .center_item a {
        color: <?=$GLOBALS['SITE_SETTINGS']['go']['COLOR_MAIN']?>;
    }


    .go-team .team_item_content span,
    .go-team .go-banner__title span,
    .go-team .go-news__about-title span,
    .go-team .go-team__about-title span,
    .go-team .go-final__about-title span,
    .go-team .go-semi-final__about-title span,
    .go-team .go-tournament__about-title span,
    .go-team .go-team__team-name span,
    .go-team .gohockey-quarter-final__about-title span,
    span.player_num {
        color: <?=$GLOBALS['SITE_SETTINGS']['go']['COLOR_MAIN']?>;
        -webkit-text-stroke: .16em <?=$GLOBALS['SITE_SETTINGS']['go']['COLOR_BORDER']?>;
    }

    .go-team .next-match__block {
        border: 2px solid <?=$GLOBALS['SITE_SETTINGS']['go']['COLOR_MAIN']?>;
    }



    .go-news__about-title span::before,
    .go-team__about-title span::before,
    .go-final__about-title span::before,
    .go-tournament__about-title span::before,
    .go-semi-final__about-title span::before,
    .go-victory__about-title span::before,
    .gohockey-quarter-final__about-title span::before,
    {
        -webkit-text-stroke: .02em <?=$GLOBALS['SITE_SETTINGS']['go']['COLOR_MAIN']?>;
    }

    .championship-course__our-team,
    .popup_pag .swiper-pagination-bullet-active {
        background: <?=$GLOBALS['SITE_SETTINGS']['go']['COLOR_MAIN']?> !important;
    }

    .go-team div.go-team__nav-item,
    .go-team div.go-tournament__nav-item,
    .go-team div.go-final__nav-item,
    .go-team div.go-news__nav-item {
        border-bottom: 4px solid <?=$GLOBALS['SITE_SETTINGS']['go']['COLOR_MAIN']?>;
    }


    .go-team .go-news__modal-banner-hash,
    .go-team .item {
        background-color: <?=$GLOBALS['SITE_SETTINGS']['go']['COLOR_MAIN']?>;
    }


    /* color #FF4C01 */

    .gohockey-team .team_item_content span,
    .gohockey-team .go-news__about-title span,
    .gohockey-team .go-team__about-title span,
    .gohockey-team .go-final__about-title span,
    .gohockey-team .go-semi-final__about-title span,
    .gohockey-team .go-tournament__about-title span,
    .gohockey-team .go-team__team-name span,

    .gohockey-news__about-title span,
    .gohockey-team__about-title span,
    .gohockey-final__about-title span,
    .gohockey-semi-final__about-title span,
    .gohockey-tournament__about-title span,
    .go-team__team-name span,
    span.player_num_orang,
    .go-team__about-title  span {
        color: <?=$GLOBALS['SITE_SETTINGS']['gohockey']['COLOR_MAIN']?>;
        -webkit-text-stroke: .16em <?=$GLOBALS['SITE_SETTINGS']['gohockey']['COLOR_BORDER']?>;
    }

    .go-tournament__players-staff-person-number_orange,
    .championship-course__our-team-orange {
        background: <?=$GLOBALS['SITE_SETTINGS']['gohockey']['COLOR_MAIN']?> !important;
    }

    .gohockey-news__about-title span::before,
    .gohockey-team__about-title span::before,
    .gohockey-final__about-title span::before,
    .gohockey-tournament__about-title span::before,
    .gohockey-semi-final__about-title span::before,
    .gohockey-victory__about-title span::before,
    .go-tournament__players-staff-person-number_orange span::before {
        -webkit-text-stroke: .02em <?=$GLOBALS['SITE_SETTINGS']['gohockey']['COLOR_MAIN']?>;
    }

    .item.orange {
        background-color: <?=$GLOBALS['SITE_SETTINGS']['gohockey']['COLOR_MAIN']?>;
    }


    .gohockey-team .next-match__block {
        border: 2px solid <?=$GLOBALS['SITE_SETTINGS']['gohockey']['COLOR_MAIN']?>;
    }

    .gohockey-team .go-team__players-staff-person-number,
    .gohockey-team .go-tournament__players-staff-person-number {
        background: <?=$GLOBALS['SITE_SETTINGS']['gohockey']['COLOR_MAIN']?>;
    }

    .gohockey-team div.go-team__nav-item,
    .gohockey-team div.go-tournament__nav-item,
    .gohockey-team div.go-final__nav-item,
    .gohockey-team div.go-news__nav-item {
        border-bottom: 4px solid <?=$GLOBALS['SITE_SETTINGS']['gohockey']['COLOR_MAIN']?>;
    }

    .gohockey-team .center_item a {
        color: <?=$GLOBALS['SITE_SETTINGS']['gohockey']['COLOR_MAIN']?>;
    }


</style>