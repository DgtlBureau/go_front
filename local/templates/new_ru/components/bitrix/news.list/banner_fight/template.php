<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);

$arItems = $arResult['ITEMS'][0];

$isMobile = \Bitrix\Main\Loader::includeModule('conversion') && ($md = new \Bitrix\Conversion\Internals\MobileDetect) && $md->isMobile();

//dump($arItems['DISPLAY_PROPERTIES']);
?>

<div class="container headerContent">
    <h1><?= $arItems['NAME']; ?></h1>
    <p class="headerParagraph"><?= $arItems['PREVIEW_TEXT']; ?>    </p>
    <div class="headerButtonWrapper">
        <button id="anchor" class="defaultButton">Купить абонемент</button>
        <img alt="arrow" src="/local/templates/new_ru/assets/go-fight/css/images/arrow.png" class="arrowBlock">
    </div>
</div>
<div class="backgroundWrapper">
    <? if (!empty($arItems['DISPLAY_PROPERTIES']['VIDEO']['FILE_VALUE']['SRC']) && !$isMobile): ?>
        <video class="headerBackground" autoplay muted loop
               src="<?= $arItems['DISPLAY_PROPERTIES']['VIDEO']['FILE_VALUE']['SRC'] ?>"></video>
    <? elseif (!empty($arItems['PREVIEW_PICTURE']['SRC'])): ?>
        <img alt="header image" src="<?= $arItems['PREVIEW_PICTURE']['SRC']; ?>" class="headerBackground">
    <? endif; ?>
</div>