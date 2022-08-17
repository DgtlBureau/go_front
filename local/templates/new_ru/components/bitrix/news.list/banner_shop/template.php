<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
?>

<div class="shop__banner-swiper-block">
    <div class="shop__switcher">
        <div class="shop__switcher-dots">
        <?foreach ($arResult['ITEMS'] as $key => $arItems):?>
            <div class="shop__switcher-dot <?= ($key == 0) ? ' shop__switcher-dot--active' : '';?>"></div>
        <?endforeach;?>
        </div>
    </div>
    <div class="shop__banner-swiper">
    <?foreach ($arResult['ITEMS'] as $arItems):?>
        <div class="shop__banner-item" style="background: url(<?=$arItems['PREVIEW_PICTURE']['SRC'];?>) no-repeat;">
            <div class="shop__banner-title-block">
                <div class="shop__banner-title"><?=$arItems['NAME'];?></div>
                <div class="shop__banner-arrow">&#8601;</div>
            </div>
        </div>
	<?endforeach;?>
    </div>
</div>