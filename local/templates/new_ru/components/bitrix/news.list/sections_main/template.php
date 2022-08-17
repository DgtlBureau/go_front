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
    <div class="shop__gender-select gender-select">
	   <?foreach($arResult["ITEMS"] as $arItem):?>
            <a class="gender-select__item" href="<?=$arItem["PROPERTIES"]["SRC"]["VALUE"]?>">
                <div class="gender-select__image scale">
                    <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"];?>" alt="<?=$arItem["NAME"]?>">
                </div>
                <div class="gender-select__text"><?=$arItem["NAME"]?></div>
                <div class="gender-select__bg-opaciti"></div>
            </a> 
	   <?endforeach;?>
    </div>
</div>

<?

	//  if( $USER->GetID() == 1 )
	//  {
	//  echo '<pre>';
	//  print_r($arResult);
	//  echo '</pre>';
	//  }

?>

