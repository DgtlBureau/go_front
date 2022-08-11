<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Localization\Loc;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $item
 * @var array $actualItem
 * @var array $minOffer
 * @var array $itemIds
 * @var array $price
 * @var array $measureRatio
 * @var bool $haveOffers
 * @var bool $showSubscribe
 * @var array $morePhoto
 * @var bool $showSlider
 * @var bool $itemHasDetailUrl
 * @var string $imgTitle
 * @var string $productTitle
 * @var string $buttonSizeClass
 * @var string $discountPositionClass
 * @var string $labelPositionClass
 * @var CatalogSectionComponent $component
 */
?>

<a class="" href="<?=$item['DETAIL_PAGE_URL']?>" title="<?=$imgTitle?>">
	<div class="product_img">
		<img src="<?=$item['PREVIEW_PICTURE']['SRC']?>" alt="">
	</div>
	<div class="product_bottom">
		<div class="product_desc">
			<div class="product_text">
				<?=$item['NAME']?>
			</div>
			<div class="price_block">
				<div class="product_price">
					<?=$item['PRICES']['BASE']['PRINT_VALUE_VAT']?>
				</div>
				<div class="product_price econom"><?=$item['PROPERTIES']['OLD_PRICE']['VALUE']?> ₽</div>
			</div>
		</div>
		<div class="product_basket">
			<svg width="26" class="basket" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd" clip-rule="evenodd" d="M24.5556 0L25.8475 23.2558C25.9272 24.6895 24.8295 25.9163 23.3958 25.996C23.3237 25.9993 23.3237 25.9993 23.2515 26H2.6C1.16406 26 0 24.8359 0 23.4C0.000333719 23.3639 0.000500579 23.3459 0.00100097 23.3279C0.00150135 23.3098 0.00233526 23.2918 0.00400308 23.2558L1.29599 0H24.5556ZM3.75523 2.60008L2.59967 23.4001H23.2512L22.0957 2.60008H3.75523ZM9.02676 5.2002H6.42676V8.4502C6.42676 11.5711 9.44697 14.3002 12.9268 14.3002C16.4065 14.3002 19.4268 11.5711 19.4268 8.4502V5.2002H16.8268V8.4502C16.8268 10.0731 15.0261 11.7002 12.9268 11.7002C10.8274 11.7002 9.02676 10.0731 9.02676 8.4502V5.2002Z" fill="white"></path>
			</svg>
		</div>
	</div>
</a>

<?

	// if( $USER->GetID() == 1 )
	// {
	// 	echo '<pre>';
	// 	print_r($arResult);
	// 	echo '</pre>';
	// }




?>