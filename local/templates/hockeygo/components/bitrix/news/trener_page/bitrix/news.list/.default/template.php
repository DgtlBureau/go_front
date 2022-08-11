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

<div class="go-team__staff-block">
    <div class="go-team__staff-title"><?=$arResult["NAME"]?></div>
	<div class="go-team__staff">
		<?foreach($arResult["ITEMS"] as $arItem):?>
			<a href="<?=$arItem['DETAIL_PAGE_URL']?>">
				<div class="go-team__staff-person">
					<div class="go-team__coaching-staff-person-image">
						<img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="<?=$arItem['NAME']?>">
					</div>
					<div class="go-team__coaching-staff-person-txt-block"><?=$arItem['NAME']?></div>
				</div>
			</a>
	<?endforeach?>
	</div>
</div>



<?

	// if( $USER->GetID() == 1 )
	// {
	// 	echo '<pre>';
	// 	print_r($arResult);
	// 	echo '</pre>';
	// }




?>
