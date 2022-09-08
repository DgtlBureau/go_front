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

<div class="results">
    <div class="results__title">Достижения</div>
    <?foreach($arResult['ITEMS'] as $arItem):?>
                        <div class="results__block">
                            <div class="results__image">  
                                <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["NAME"]?>">
                            </div>
                            <div class="results__txt">
                                <div class="results__competitions"><?=$arItem["NAME"]?></div>
                                <div class="results__place"><?=$arItem['PROPERTIES']["PLACE"]["VALUE"]?></div>
                            </div>
                        </div> 
    <?endforeach;?>
</div>