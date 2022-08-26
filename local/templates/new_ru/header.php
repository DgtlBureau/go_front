<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();
use Bitrix\Main\Page\Asset;
\Bitrix\Main\Loader::includeModule('iblock');

$ip = $_SERVER['HTTP_CLIENT_IP']
    ? $_SERVER['HTTP_CLIENT_IP']
    : ($_SERVER['HTTP_X_FORWARDED_FOR']
        ? $_SERVER['HTTP_X_FORWARDED_FOR']
        : $_SERVER['REMOTE_ADDR']);
$uri = $APPLICATION->GetCurUri();
if (stripos($uri, 'shop')) {
    //die(bin2hex(random_bytes(20)));
}

?>
<!doctype html>
<html lang="ru" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH ?>/assets/slick/slick.css">
    <link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH ?>/assets/slick/slick-theme.css">
    <link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH ?>/assets/css/media.css">
    <link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH ?>/fonts/stylesheet.css">
    <link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH ?>/assets/WebMaster-GO-Gohockey/Pages/Modals/main.e402885c257297da1e95.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.7/jquery.inputmask.min.js"
    integrity="sha512-jTgBq4+dMYh73dquskmUFEgMY5mptcbqSw2rmhOZZSJjZbD2wMt0H5nhqWtleVkyBEjmzid5nyERPSNBafG4GQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title><?$APPLICATION -> ShowTitle();?></title>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <?$APPLICATION -> ShowHead();?>

</head>
<body>
<div id="panel">
    <?$APPLICATION->ShowPanel();?>
</div>

<div class="headerBlock">
<div class="container">
    <div class="header">
    <div class="logo">
        <a href="/">
            <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                    "AREA_FILE_SHOW" => "file",
                    "AREA_FILE_SUFFIX" => "inc",
                    "EDIT_TEMPLATE" => "standard.php",
                    "PATH" => "/includes/header/logo.php"
                )
            );?>
        </a>
    </div>

    <?$APPLICATION->IncludeComponent(
        "bitrix:menu",
        "main",
        array(
            "ALLOW_MULTI_SELECT" => "N",
            "CHILD_MENU_TYPE" => "",
            "DELAY" => "N",
            "MAX_LEVEL" => "1",
            "MENU_CACHE_GET_VARS" => array(
            ),
            "MENU_CACHE_TIME" => "3600",
            "MENU_CACHE_TYPE" => "A",
            "MENU_CACHE_USE_GROUPS" => "N",
            "ROOT_MENU_TYPE" => "top",
            "USE_EXT" => "N",
            "COMPONENT_TEMPLATE" => "main"
        ),
        false
    );?>
    <div class="language" style="display: none;">
        <select class="lg_select" name="" id="">
            <option value="">RU</option>
            <option value="">EN</option>
        </select>
    </div>
</div>

<div class="hamburger-menu">
    <div class="logo">
        <a href="/"><img src="<?=SITE_TEMPLATE_PATH?>/img/logo.png" alt=""></a>
    </div>
    <div class="language" style="display: none;">
        <select class="lg_select" name="" id="">
            <option value="">RU</option>
            <option value="">EN</option>
        </select>
    </div>
    <input id="menu__toggle" type="checkbox" />
    <label class="menu__btn" for="menu__toggle">
        <span></span>
    </label>

    <ul class="menu__box">
        <div class="teams_menu">
            <a class="go" href="https://go-family.ru/teams/team-go/">
                <div>
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/bull.png" alt="хк go">
                    <div class="text_go">хк go</div>
                </div>
            </a>
            <a class="go" href="https://go-family.ru/teams/team-gohockey/">
                <div>
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/bull_orang.png" alt="хк gohockey">
                    <div class="text_go">хк gohockey</div>
                </div>
            </a>
        </div>
        <li><a class="menu__item" href="/shop/">Магазин</a></li>
        <li><a class="menu__item" href="/go-fight/">Бокс</a></li>
        <li><a class="menu__item" href="/contact/">Контакты</a></li>
        <div style="
                        bottom: 80px;
                        position: absolute;
                        width: 100%;
                    ">
            <div class="burger-menu__social-block">
                <?
                $res = CIBlockElement::GetList(Array("ID"=>"DESC"), Array("IBLOCK_ID"=> 8),);
                while ($ob = $res->GetNextElement()){
                    $arProps = $ob->GetProperties(); // свойства элемента
                    ?>
                    <div class="burger-menu__social-item">
                        <a href="<?=$arProps['SOCIAL_LINK']['VALUE']?>" target="_blank"  class="burger-menu__social-image">
                            <img src="<?= CFile::GetPath($arProps['IMG']['VALUE']) ?>" alt="instagram">
                        </a>
                    </div>
                <? }?>
                <div class="burger-menu__social-item">
                    <div class="burger-menu__social-image">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/utube.svg" alt="utube">
                    </div>
                </div>
            </div>
            <div class="burger-menu__social-block-under-block">
                <div class="burger-menu__social-block-under">*Meta признана в России экстремистской организацией.</div>
            </div>
        </div>
    </ul>
    </div>
</div>
</div>