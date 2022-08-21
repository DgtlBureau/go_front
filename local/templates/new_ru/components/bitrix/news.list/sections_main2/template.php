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

<div class="flex_container">
    <div class="shop__categories categories">
        <div class="shop__title-block">
            <div class="shop__title">Категории</div>
            <div class="shop__title-arrow">↙</div>
        </div>
        <div class="categories__list">
            <?foreach($arResult["ITEMS"] as $arItem):?>
                <a class="categories__item" href="<?=$arItem["PROPERTIES"]["LINK"]["VALUE"]?>">
                    <div class="categories__item-image scale">
                        <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"];?>">
                    </div>
                    <div class="categories__item-footer">
                        <div class="categories__item-name"><?=$arItem["NAME"]?></div>
                        <div class="categories__item-arrow">→</div>
                    </div>
                </a>
            <?endforeach;?>

        </div>
    </div>
</div>