<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

foreach($arResult['ITEMS'] as $arItem):?>


    <div class="about-us__info-item">
        <div class="about-us__info-item-txt-block">
            <span class="about-us__info-item-title" data-text="<?=$arItem["PREVIEW_TEXT"]?>"><?=$arItem["PREVIEW_TEXT"]?></span>
            <div class="about-us__info-item-txt">
                <?=$arItem['NAME']?>
            </div>
        </div>
    </div>
<?
endforeach;