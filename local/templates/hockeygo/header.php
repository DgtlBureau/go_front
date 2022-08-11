<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
use Bitrix\Main\Page\Asset; 
?>
<!doctype html>
<html lang="ru" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH ?>/assets/css/slick.css">
		<link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH ?>/assets/css/slick-theme.css">
		<link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH ?>/assets/css/media.css">
		<link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH ?>/fonts/stylesheet.css">
		<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
		<title><?$APPLICATION -> ShowTitle();?></title>
		<?$APPLICATION -> ShowHead();?>

	</head>
	<body>
		<div id="panel">
			<?$APPLICATION->ShowPanel();?>
		</div>
		
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
	<div class="language">
        <select class="lg_select" name="" id="">
            <option value="">RU</option>
            <option value="">ENG</option>
        </select>
    </div>
</div>
    
<div class="hamburger-menu">
    <div class="logo">
        <a href="/"><img src="<?=SITE_TEMPLATE_PATH?>/img/logo.png" alt=""></a>
    </div>
    <div class="language">
        <select class="lg_select" name="" id="">
            <option value="">RU</option>
            <option value="">ENG</option>
        </select>
    </div>
    <input id="menu__toggle" type="checkbox" />
    <label class="menu__btn" for="menu__toggle">
      <span></span>
    </label>

    <ul class="menu__box">
		<div class="teams_menu">
			<a class="go" href="#">
				<div>
					<img src="<?=SITE_TEMPLATE_PATH?>/img/bull.png" alt="">
					<div class="text_go">хк go</div>
				</div>
			</a>
			<a class="go" href="#">
				<div>
				<img src="<?=SITE_TEMPLATE_PATH?>/img/bull_orang.png" alt="">
					<div class="text_go">хк gohockey</div>
				</div>
			</a>
		</div>
        <li><a class="menu__item" href="/shop/">Магазин</a></li>
        <li><a class="menu__item" href="#">Напитки</a></li>
        <li><a class="menu__item" href="#">Контакты</a></li>
    </ul>
  </div>