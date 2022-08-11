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
<div class="product_category">
	<?foreach($arResult["ITEMS"] as $key => $arItem):?>
		<?foreach($arItem["ELEMENTS"] as $inner_key => $arElement):?>
			<div class="product_category_img">
				<img src="<?=$arElement["PREVIEW_PICTURE"]["SRC"];?>" alt="<?=$arElement["NAME"];?>">
				<div class="product_category_text">
					<?=$arElement["NAME"];?>
				</div>
			</div>
		<?endforeach;?>
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