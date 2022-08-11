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
<div class="category_block">
	<?foreach($arResult["ITEMS"] as $arItem):?>
		<a href="<?=$arItem["PROPERTIES"]["SRC"]["VALUE"]?>">
			<div class="category_img">
				<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"];?>" alt="">
				<div class="category_text">
					<?=$arItem["NAME"]?>
				</div>
			</div>
		</a>
	<?endforeach;?>
</div>

<?

	//  if( $USER->GetID() == 1 )
	//  {
	//  echo '<pre>';
	//  print_r($arResult);
	//  echo '</pre>';
	//  }

?>

