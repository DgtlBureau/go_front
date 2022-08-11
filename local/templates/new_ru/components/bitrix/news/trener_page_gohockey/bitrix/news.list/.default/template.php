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

<div class="gohockey-team__staff">
    <?foreach($arResult["ITEMS"] as $arItem):?>
    <a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="gohockey-team__staff-person">
        <div class="gohockey-team__coaching-staff-person-image"><img
                    src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="<?=$arItem['NAME']?>"></div>
        <div class="gohockey-team__coaching-staff-person-txt-block"><?=$arItem['NAME']?></div>
    </a>
    <?endforeach?>
</div>


<?

	// if( $USER->GetID() == 1 )
	// {
	// 	echo '<pre>';
	// 	print_r($arResult);
	// 	echo '</pre>';
	// }




?>
