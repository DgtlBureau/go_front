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
<div class="autoplay shop_banner">
	<?foreach ($arResult['ITEMS'] as $arItems):?>
	<div class="shop_slider">
		 <img src="<?=$arItems['PREVIEW_PICTURE']['SRC'];?>" style="background-size: 100%; background-repeat: no-repeat;">
		<div class="banner_title">
			 <?=$arItems['NAME'];?>
		</div>
	</div>
	<?endforeach;?>
</div>
<div class="mobile shop_banner">
 <img src="<?=$arResult['ITEMS'][0]['PREVIEW_PICTURE']['SRC'];?>" alt="">
	<div class="banner_title">
		<?=$arResult['ITEMS'][0]['NAME'];?>
	</div>
</div>
 <style>
    .shop_banner .slick-list {
     margin-left: 0px; 
     margin-right: 0px;
    }
    @media (max-width: 425px){
    .autoplay .slick-slide{
        width: 425px !important;
    }
}
</style>


<?

	//  if( $USER->GetID() == 1 )
	//  {
	//  echo '<pre>';
	//  print_r($arResult);
	//  echo '</pre>';
	//  }

?>


