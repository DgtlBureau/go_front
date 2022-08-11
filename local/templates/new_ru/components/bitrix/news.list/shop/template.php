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
<? $i=1;?>
<?foreach($arResult['ITEMS'] as $arItem):?>

<div class="shop_content">
      <div class="shop_content_left">
        <img src="<?=$arItem["DISPLAY_PROPERTIES"]["FIRST_IMG"]["FILE_VALUE"]["SRC"];?>" alt="" class="shop_content_left_img">
      </div>
      <div class="shop_content_right">
        <div class="shop_content_right_top">
			<div class="shop_content_right_top_img_wrapper">
			  <img src="<?=$arItem["DISPLAY_PROPERTIES"]["SECOND_IMG"]["FILE_VALUE"]["SRC"];?>" alt="" class="shop_content_right_top_img">
			</div>
			<div class="shop_content_right_top_img_wrapper">
			  <img src="<?=$arItem["DISPLAY_PROPERTIES"]["THIRD_IMG"]["FILE_VALUE"]["SRC"];?>" alt="" class="shop_content_right_top_img">
			</div>
        </div>
        <div class="shop_content_right_bottom">
			<img class="shop_content_right_bottom_img" src="<?=SITE_TEMPLATE_PATH?>/img/image.png" alt="">

            <h4 class="shop_content_right_bottom_h4"><?=$arItem["PROPERTIES"]["DESCRIPTION"]["VALUE"];?></h4>
            <a href="/shop/" class="shop_content_right_bottom_btn"><?=$arItem["PROPERTIES"]["BTN"]["VALUE"];?><span alt="" class="shop_hover_arrow">→</span></a>

        </div>
      </div>
    </div>

<?endforeach;?>