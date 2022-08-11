<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Localization\Loc;

/**
* @global CMain $APPLICATION
* @var array $arParams
* @var array $arResult
* @var CatalogSectionComponent $component
* @var CBitrixComponentTemplate $this
* @var string $templateName
* @var string $componentPath
* @var string $templateFolder
*/

$this->setFrameMode(true);

$templateLibrary = array('popup', 'fx');
$currencyList = '';

if (!empty($arResult['CURRENCIES']))
{
	$templateLibrary[] = 'currency';
	$currencyList = CUtil::PhpToJSObject($arResult['CURRENCIES'], false, true, true);
}

$templateData = array(
	'TEMPLATE_THEME' => $arParams['TEMPLATE_THEME'],
	'TEMPLATE_LIBRARY' => $templateLibrary,
	'CURRENCIES' => $currencyList,
	'ITEM' => array(
		'ID' => $arResult['ID'],
		'IBLOCK_ID' => $arResult['IBLOCK_ID'],
		'OFFERS_SELECTED' => $arResult['OFFERS_SELECTED'],
		'JS_OFFERS' => $arResult['JS_OFFERS']
	)
);
unset($currencyList, $templateLibrary);

$mainId = $this->GetEditAreaId($arResult['ID']);
$itemIds = array(
	'ID' => $mainId,
	'DISCOUNT_PERCENT_ID' => $mainId.'_dsc_pict',
	'STICKER_ID' => $mainId.'_sticker',
	'BIG_SLIDER_ID' => $mainId.'_big_slider',
	'BIG_IMG_CONT_ID' => $mainId.'_bigimg_cont',
	'SLIDER_CONT_ID' => $mainId.'_slider_cont',
	'BLOCK_PRICE_OLD' => $mainId.'_block_price',
	'OLD_PRICE_ID' => $mainId.'_old_price',
	'PRICE_ID' => $mainId.'_price',
	'DISCOUNT_PRICE_ID' => $mainId.'_price_discount',
	'PRICE_TOTAL' => $mainId.'_price_total',
	'SLIDER_CONT_OF_ID' => $mainId.'_slider_cont_',
	'SLIDER_PAGER_OF_ID' => $mainId.'_slider_pager_',
	'QUANTITY_COUNTER_ID' => $mainId.'_counter',
	'QUANTITY_ID' => $mainId.'_quantity',
	'QUANTITY_DOWN_ID' => $mainId.'_quant_down',
	'QUANTITY_UP_ID' => $mainId.'_quant_up',
	'QUANTITY_MEASURE' => $mainId.'_quant_measure',
	'QUANTITY_MEASURE_CONTAINER' => $mainId.'_quant_measure_container',
	'QUANTITY_LIMIT' => $mainId.'_quant_limit',
	'BUY_LINK' => $mainId.'_buy_link',
	'ADD_BASKET_LINK' => $mainId.'_add_basket_link',
	'BASKET_ACTIONS_ID' => $mainId.'_basket_actions',
	'NOT_AVAILABLE_MESS' => $mainId.'_not_avail',
	'COMPARE_LINK' => $mainId.'_compare_link',
	'TREE_ID' => $mainId.'_skudiv',
	'DISPLAY_PROP_DIV' => $mainId.'_sku_prop',
	'DESCRIPTION_ID' => $mainId.'_description',
	'DISPLAY_MAIN_PROP_DIV' => $mainId.'_main_sku_prop',
	'OFFER_GROUP' => $mainId.'_set_group_',
	'BASKET_PROP_DIV' => $mainId.'_basket_prop',
	'SUBSCRIBE_LINK' => $mainId.'_subscribe',
	'TABS_ID' => $mainId.'_tabs',
	'TAB_CONTAINERS_ID' => $mainId.'_tab_containers',
	'SMALL_CARD_PANEL_ID' => $mainId.'_small_card_panel',
	'TABS_PANEL_ID' => $mainId.'_tabs_panel'
);
$obName = $templateData['JS_OBJ'] = 'ob'.preg_replace('/[^a-zA-Z0-9_]/', 'x', $mainId);
$name = !empty($arResult['IPROPERTY_VALUES']['ELEMENT_PAGE_TITLE'])
	? $arResult['IPROPERTY_VALUES']['ELEMENT_PAGE_TITLE']
	: $arResult['NAME'];
$title = !empty($arResult['IPROPERTY_VALUES']['ELEMENT_DETAIL_PICTURE_FILE_TITLE'])
	? $arResult['IPROPERTY_VALUES']['ELEMENT_DETAIL_PICTURE_FILE_TITLE']
	: $arResult['NAME'];
$alt = !empty($arResult['IPROPERTY_VALUES']['ELEMENT_DETAIL_PICTURE_FILE_ALT'])
	? $arResult['IPROPERTY_VALUES']['ELEMENT_DETAIL_PICTURE_FILE_ALT']
	: $arResult['NAME'];

$haveOffers = !empty($arResult['OFFERS']);
if ($haveOffers)
{
	$actualItem = $arResult['OFFERS'][$arResult['OFFERS_SELECTED']] ?? reset($arResult['OFFERS']);
	$showSliderControls = false;

	foreach ($arResult['OFFERS'] as $offer)
	{
		if ($offer['MORE_PHOTO_COUNT'] > 1)
		{
			$showSliderControls = true;
			break;
		}
	}
}
else
{
	$actualItem = $arResult;
	$showSliderControls = $arResult['MORE_PHOTO_COUNT'] > 1;
}
$percent = '';
if (!empty($actualItem['MORE_PHOTO']))
{
	$firstPhoto = reset($actualItem['MORE_PHOTO']);
	$percent  = ($firstPhoto['HEIGHT']/$firstPhoto['WIDTH'])*100;
	$percent  = ($percent > 160) ? 160 : $percent;
	$percent = 'padding-top: '.$percent.'%;';
	unset($firstPhoto);
}

$skuProps = array();
$price = $actualItem['ITEM_PRICES'][$actualItem['ITEM_PRICE_SELECTED']];
$measureRatio = $actualItem['ITEM_MEASURE_RATIOS'][$actualItem['ITEM_MEASURE_RATIO_SELECTED']]['RATIO'];
$showDiscount = $price['PERCENT'] > 0;

if ($arParams['SHOW_SKU_DESCRIPTION'] === 'Y')
{
	$skuDescription = false;
	foreach ($arResult['OFFERS'] as $offer)
	{
		if ($offer['DETAIL_TEXT'] != '' || $offer['PREVIEW_TEXT'] != '')
		{
			$skuDescription = true;
			break;
		}
	}
	$showDescription = $skuDescription || !empty($arResult['PREVIEW_TEXT']) || !empty($arResult['DETAIL_TEXT']);
}
else
{
	$showDescription = !empty($arResult['PREVIEW_TEXT']) || !empty($arResult['DETAIL_TEXT']);
}
$showBuyBtn = in_array('BUY', $arParams['ADD_TO_BASKET_ACTION']);
$buyButtonClassName = in_array('BUY', $arParams['ADD_TO_BASKET_ACTION_PRIMARY']) ? 'btn' : 'btn-link';
$showAddBtn = in_array('ADD', $arParams['ADD_TO_BASKET_ACTION']);
$showButtonClassName = in_array('ADD', $arParams['ADD_TO_BASKET_ACTION_PRIMARY']) ? 'btn' : 'btn-link';
$showSubscribe = $arParams['PRODUCT_SUBSCRIPTION'] === 'Y' && ($arResult['PRODUCT']['SUBSCRIBE'] === 'Y' || $haveOffers);

$arParams['MESS_BTN_BUY'] = $arParams['MESS_BTN_BUY'] ?: Loc::getMessage('CT_BCE_CATALOG_BUY');
$arParams['MESS_BTN_ADD_TO_BASKET'] = $arParams['MESS_BTN_ADD_TO_BASKET'] ?: Loc::getMessage('CT_BCE_CATALOG_ADD');
$arParams['MESS_NOT_AVAILABLE'] = $arParams['MESS_NOT_AVAILABLE'] ?: Loc::getMessage('CT_BCE_CATALOG_NOT_AVAILABLE');
$arParams['MESS_BTN_COMPARE'] = $arParams['MESS_BTN_COMPARE'] ?: Loc::getMessage('CT_BCE_CATALOG_COMPARE');
$arParams['MESS_PRICE_RANGES_TITLE'] = $arParams['MESS_PRICE_RANGES_TITLE'] ?: Loc::getMessage('CT_BCE_CATALOG_PRICE_RANGES_TITLE');
$arParams['MESS_DESCRIPTION_TAB'] = $arParams['MESS_DESCRIPTION_TAB'] ?: Loc::getMessage('CT_BCE_CATALOG_DESCRIPTION_TAB');
$arParams['MESS_PROPERTIES_TAB'] = $arParams['MESS_PROPERTIES_TAB'] ?: Loc::getMessage('CT_BCE_CATALOG_PROPERTIES_TAB');
$arParams['MESS_COMMENTS_TAB'] = $arParams['MESS_COMMENTS_TAB'] ?: Loc::getMessage('CT_BCE_CATALOG_COMMENTS_TAB');
$arParams['MESS_SHOW_MAX_QUANTITY'] = $arParams['MESS_SHOW_MAX_QUANTITY'] ?: Loc::getMessage('CT_BCE_CATALOG_SHOW_MAX_QUANTITY');
$arParams['MESS_RELATIVE_QUANTITY_MANY'] = $arParams['MESS_RELATIVE_QUANTITY_MANY'] ?: Loc::getMessage('CT_BCE_CATALOG_RELATIVE_QUANTITY_MANY');
$arParams['MESS_RELATIVE_QUANTITY_FEW'] = $arParams['MESS_RELATIVE_QUANTITY_FEW'] ?: Loc::getMessage('CT_BCE_CATALOG_RELATIVE_QUANTITY_FEW');

$themeClass = isset($arParams['TEMPLATE_THEME']) ? ' bx-'.$arParams['TEMPLATE_THEME'] : '';
?>
<div class="container_detail" id="<?=$itemIds['ID']?>">
	<div class="row_detail">
		<a href="/shop/catalog/odezhda/">
		<div class="detail_top">
			<div class="arrow_back">←</div>
        	<div class="top_title">В каталог</div>
		</div>
		</a>
		<div class="detail_main">
            <div class="detail_slider">
                <div class="slider">
				<?foreach($arResult['MORE_PHOTO'] as $key => $photo):?>
						<div class="item_slider_mobile">
							<img src="<?=$photo['SRC']?>" alt="Первый слайд">
							<!-- <div class="slideText">Заголовок слайда 1</div> -->
						</div>
					<?endforeach?>
                </div>

                <div class="slider-dots">
				<?$i_mobile=1; foreach($arResult['MORE_PHOTO'] as $key => $photo):?>
                    <span class="slider-dots_item_mobile" onclick="currentSlide_mobile(<?=$i_mobile;?>)">
                        <img src="<?=$photo['SRC']?>" alt="">
                    </span> 
				<?$i_mobile++; endforeach?>
                </div>
            </div>

	<?php
		//region COVER
		?>
		<div class="product-detail-slider-container col-12 col-md-6" id="<?=$itemIds['BIG_SLIDER_ID']?>">
			<span class="product-detail-slider-close" data-entity="close-popup"></span>
			<div class="product-detail-slider-block" data-entity="images-slider-block" style="<?=$percent; ?>">
				<?php
				//region LABEL
				if ($arResult['LABEL'] && !empty($arResult['LABEL_ARRAY_VALUE']))
				{
					?><div class="product-detail-label-container" id="<?=$itemIds['STICKER_ID']?>"><?php
					foreach ($arResult['LABEL_ARRAY_VALUE'] as $code => $value)
					{
						?><span class="product-detail-label-text"><?=$value?></span><?php
					}
					?></div><?php
				}
				//endregion
				?>
				<div class="product-detail-slider-images-container" data-entity="images-container">
					<?php
					if (!empty($actualItem['MORE_PHOTO']))
					{
						foreach ($actualItem['MORE_PHOTO'] as $key => $photo)
						{
							$xResizedImage = \CFile::ResizeImageGet(
								$photo['ID'],
								[
									'width' => 400,
									'height' => 400,
								],
								BX_RESIZE_IMAGE_PROPORTIONAL,
								true
							);

							$x2ResizedImage = \CFile::ResizeImageGet(
								$photo['ID'],
								[
									'width' => 800,
									'height' => 800,
								],
								BX_RESIZE_IMAGE_PROPORTIONAL,
								true
							);

							if (!$xResizedImage || !$x2ResizedImage)
							{
								$xResizedImage = [
									'src' => $photo['SRC'],
								];
								$x2ResizedImage = $xResizedImage;
							}

							$xResizedImage = \Bitrix\Iblock\Component\Tools::getImageSrc([
								'SRC' => $xResizedImage['src']
							]);
							$x2ResizedImage = \Bitrix\Iblock\Component\Tools::getImageSrc([
								'SRC' => $x2ResizedImage['src']
							]);

							$style = "background-image: url('{$xResizedImage}');";
							$style .= "background-image: -webkit-image-set(url('{$xResizedImage}') 1x, url('{$x2ResizedImage}') 2x);";
							$style .= "background-image: image-set(url('{$xResizedImage}') 1x, url('{$x2ResizedImage}') 2x);";
							?>
							<div class="product-detail-slider-image<?=($key == 0 ? ' active' : '')?>" data-entity="image" data-id="<?=$photo['ID']?>">
								<img
									src="<?= $xResizedImage ?>"
									srcset="<?= $xResizedImage ?> 1x, <?= $x2ResizedImage ?> 2x"
									alt="<?= $alt ?>"
									title="<?= $title ?>"
								>
								<div class="product-detail-slider-image-overlay" style="<?= $style ?>"></div>
							</div>
			<?php
						}
					}

					if ($arParams['SLIDER_PROGRESS'] === 'Y')
					{
						?>
						<div class="product-detail-slider-progress-bar" data-entity="slider-progress-bar" style="width: 0;"></div>
						<?php
					}
					?>
				</div><?php
			//region SLIDER CONTROLS
			if ($showSliderControls)
			{
				if ($haveOffers)
				{
					foreach ($arResult['OFFERS'] as $keyOffer => $offer)
					{
						if (!isset($offer['MORE_PHOTO_COUNT']) || $offer['MORE_PHOTO_COUNT'] <= 0)
							continue;

						$strVisible = $arResult['OFFERS_SELECTED'] == $keyOffer ? '' : 'none';
						?>
						<div class="catalog-section-item-slider-images-slider-pager d-none d-sm-flex" id="<?=$itemIds['SLIDER_PAGER_OF_ID'].$offer['ID']?>" style="display: <?=$strVisible?>;">
							<?php
							foreach ($offer['MORE_PHOTO'] as $keyPhoto => $photo)
							{
								?>
								<div class="catalog-section-item-slider-images-slider-pager-item"
									data-entity="slider-control" data-value="<?=$offer['ID'].'_'.$photo['ID']?>">
								</div>
								<?php
							}
							?>
						</div>
						<?php
					}
				}
				else
				{
					?>
					<div class="catalog-section-item-slider-images-slider-pager d-none d-sm-flex" id="<?=$itemIds['SLIDER_CONT_ID']?>">
						<?php
						if (!empty($actualItem['MORE_PHOTO']))
						{
							foreach ($actualItem['MORE_PHOTO'] as $key => $photo)
							{
								?>
								<div class="catalog-section-item-slider-images-slider-pager-item"
									data-entity="slider-control" data-value="<?=$photo['ID']?>">
								</div>
								<?php
							}
						}
						?>
					</div>
					<?php
				}
			}
			//endregion
			?>
			</div>
	<?php

			//region SLIDER CONTROLS
			if ($showSliderControls)
			{
				if ($haveOffers)
				{
					foreach ($arResult['OFFERS'] as $keyOffer => $offer)
					{
						if (!isset($offer['MORE_PHOTO_COUNT']) || $offer['MORE_PHOTO_COUNT'] <= 0)
							continue;

						$strVisible = $arResult['OFFERS_SELECTED'] == $keyOffer ? '' : 'none';
						?>
						<div class="product-detail-slider-controls-block" id="<?=$itemIds['SLIDER_CONT_OF_ID'].$offer['ID']?>" style="display: <?=$strVisible?>;">
							<?php
							foreach ($offer['MORE_PHOTO'] as $keyPhoto => $photo)
							{
								?>
								<div class="product-detail-slider-controls-image<?=($keyPhoto == 0 ? ' active' : '')?>"
									data-entity="slider-control" data-value="<?=$offer['ID'].'_'.$photo['ID']?>">
									<div class="product-detail-slider-controls-dot"></div>
								</div>
								<?php
							}
							?>
						</div>
						<?php
					}
				}
				else
				{
					?>
					<div class="product-detail-slider-controls-block" id="<?=$itemIds['SLIDER_CONT_ID']?>">
						<?php
						if (!empty($actualItem['MORE_PHOTO']))
						{
							foreach ($actualItem['MORE_PHOTO'] as $key => $photo)
							{
								?>
								<div class="product-detail-slider-controls-image<?=($key == 0 ? ' active' : '')?>"
									data-entity="slider-control" data-value="<?=$photo['ID']?>">
									<div class="product-detail-slider-controls-dot"></div>
								</div>
								<?php
							}
						}
						?>
					</div>
					<?php
				}
			}
			//endregion
			?>
		</div>
<?php
		//endregion

		$showOffersBlock = $haveOffers && !empty($arResult['OFFERS_PROP']);
		$mainBlockProperties = array_intersect_key($arResult['DISPLAY_PROPERTIES'], $arParams['MAIN_BLOCK_PROPERTY_CODE']);
		$showPropsBlock = !empty($mainBlockProperties) || $arResult['SHOW_OFFERS_PROPS'];
		$showBlockWithOffersAndProps = $showOffersBlock || $showPropsBlock;

		?>
		<section class="detail_info">
			<div class="">
			<div class="detail_title"><?=$arResult['NAME']?></div>
            <div class="article">Артикул: <?=$arResult['PROPERTIES']['ARTICLE']['VALUE']?></div>
				<?php
				//region PROPS
				if ($showPropsBlock)
				{
					?><div class="mb-3"><?php
						if (!empty($mainBlockProperties))
						{
							?><ul class="product-item-detail-properties"><?php
								foreach ($mainBlockProperties as $property)
								{
									?>
									<li class="product-item-detail-properties-item">
										<span class="product-item-detail-properties-name text-muted"><?=$property['NAME']?>:</span>
										<span class="product-item-detail-properties-value"><?=(is_array($property['DISPLAY_VALUE'])
												? implode(' / ', $property['DISPLAY_VALUE'])
												: $property['DISPLAY_VALUE'])?>
										</span>
									</li>
									<?php
								}
							?></ul><?php
						}

						if ($arResult['SHOW_OFFERS_PROPS'])
						{
							?>
							<ul class="product-item-detail-properties" id="<?=$itemIds['DISPLAY_MAIN_PROP_DIV']?>"></ul>
							<?php
						}
					?></div><?php
				}
				//endregion

				//region SKU
				if ($showOffersBlock)
				{
					?>
					<div class="mb-3" id="<?=$itemIds['TREE_ID']?>">
						<?php
						foreach ($arResult['SKU_PROPS'] as $skuProperty)
						{
							if (!isset($arResult['OFFERS_PROP'][$skuProperty['CODE']]))
								continue;

							$propertyId = $skuProperty['ID'];
							$skuProps[] = array(
								'ID' => $propertyId,
								'SHOW_MODE' => $skuProperty['SHOW_MODE'],
								'VALUES' => $skuProperty['VALUES'],
								'VALUES_COUNT' => $skuProperty['VALUES_COUNT']
							);
							?>
							<div data-entity="sku-line-block" class="mb-3">
								<div class="title_small">Выберите размер</div>
								<div class="product-detail-scu-container">
									<div class="product-detail-scu-block">
										<div class="product-detail-scu-list">
											<ul class="product-detail-scu-item-list">
												<?php
												foreach ($skuProperty['VALUES'] as &$value)
												{
													$value['NAME'] = htmlspecialcharsbx($value['NAME']);

													if ($skuProperty['SHOW_MODE'] === 'PICT')
													{
														?>
														<li class="product-detail-scu-item-color-container" title="<?=$value['NAME']?>"
															data-treevalue="<?=$propertyId?>_<?=$value['ID']?>"
															data-onevalue="<?=$value['ID']?>">
															<div class="product-detail-scu-item-color-block">
																<div class="product-detail-scu-item-color" title="<?=$value['NAME']?>"
																	style="background-image: url('<?=$value['PICT']['SRC']?>');">
																</div>
															</div>
														</li>
														<?php
													}
													else
													{
														?>
														<li class="product-detail-scu-item-text-container" title="<?=$value['NAME']?>"
															data-treevalue="<?=$propertyId?>_<?=$value['ID']?>"
															data-onevalue="<?=$value['ID']?>">
															<div class="product-detail-scu-item-text-block">
																<div class="product-detail-scu-item-text"><?=$value['NAME']?></div>
															</div>
														</li>
														<?php
													}
												}
												?>
											</ul>
											<div style="clear: both;"></div>
										</div>
									</div>
								</div>
							</div>
							<?php
						}
						?>
					</div>
					<?php
				}
				//endregion

				?>
				<div class="d-flex w-100 justify-content-between align-items-center mb-2">
					<?php //region PRICE ?>
					<div class="price_top">
						<?php
						if ($arParams['SHOW_OLD_PRICE'] === 'Y')
						{
							?>
							<div id="<?=$itemIds['BLOCK_PRICE_OLD']; ?>" class="product-item-price-discount-container" <?=($showDiscount ? '' : 'style="display: none;"')?>>
								<span class="product-item-price-discount" id="<?=$itemIds['OLD_PRICE_ID']?>">
										<?=($showDiscount ? $price['PRINT_RATIO_BASE_PRICE'] : '')?>
								</span>
								<span class="product-item-price-discount-diff" id="<?=$itemIds['DISCOUNT_PRICE_ID']?>"><?=($showDiscount ? $price['PRINT_RATIO_DISCOUNT'] : ''); ?></span>
							</div>
							<?php
						}
						?>
						<span id="<?=$itemIds['PRICE_ID']?>" class="product-item-price"><?=$price['PRINT_RATIO_PRICE']?></span>
					</div>
					<?php //endregion

					//region USE_PRICE_COUNT
					if ($arParams['USE_PRICE_COUNT'])
					{
						$showRanges = !$haveOffers && count($actualItem['ITEM_QUANTITY_RANGES']) > 1;
						$useRatio = $arParams['USE_RATIO_IN_RANGES'] === 'Y';
						?>
						<div class="mb-3" <?=$showRanges ? '' : 'style="display: none;"'?>
							data-entity="price-ranges-block">
							<?php
							if ($arParams['MESS_PRICE_RANGES_TITLE'])
							{
								?>
								<div class="product-item-detail-info-container-title text-center">
									<?= $arParams['MESS_PRICE_RANGES_TITLE'] ?>
									<span data-entity="price-ranges-ratio-header">
									(<?= (Loc::getMessage(
											'CT_BCE_CATALOG_RATIO_PRICE',
											array('#RATIO#' => ($useRatio ? $measureRatio : '1').' '.$actualItem['ITEM_MEASURE']['TITLE'])
										)) ?>)
									</span>
								</div>
								<?php
							}
							?>
							<ul class="product-item-detail-properties" data-entity="price-ranges-body">
								<?php
								if ($showRanges)
								{
									foreach ($actualItem['ITEM_QUANTITY_RANGES'] as $range)
									{
										if ($range['HASH'] !== 'ZERO-INF')
										{
											$itemPrice = false;

											foreach ($arResult['ITEM_PRICES'] as $itemPrice)
											{
												if ($itemPrice['QUANTITY_HASH'] === $range['HASH'])
												{
													break;
												}
											}

											if ($itemPrice)
											{
												?>
												<li class="product-item-detail-properties-item">
													<span class="product-item-detail-properties-name text-muted">
														<?php
														echo Loc::getMessage(
																'CT_BCE_CATALOG_RANGE_FROM',
																array('#FROM#' => $range['SORT_FROM'].' '.$actualItem['ITEM_MEASURE']['TITLE'])
															).' ';

														if (is_infinite($range['SORT_TO']))
														{
															echo Loc::getMessage('CT_BCE_CATALOG_RANGE_MORE');
														}
														else
														{
															echo Loc::getMessage(
																'CT_BCE_CATALOG_RANGE_TO',
																array('#TO#' => $range['SORT_TO'].' '.$actualItem['ITEM_MEASURE']['TITLE'])
															);
														}
														?>
													</span>
													<span class="product-item-detail-properties-dots"></span>
													<span class="product-item-detail-properties-value"><?=($useRatio ? $itemPrice['PRINT_RATIO_PRICE'] : $itemPrice['PRINT_PRICE'])?></span>
												</li>
												<?php
											}
										}
									}
								}
								?>
							</ul>
						</div>
						<?php
						unset($showRanges, $useRatio, $itemPrice, $range);
					}
					//endregion

					
					//region USE_PRODUCT_QUANTITY
					if ($arParams['USE_PRODUCT_QUANTITY'])
					{
						?>
						<div class="product-item-detail-quantity-container" data-entity="quantity-block" <?= (!$actualItem['CAN_BUY'] ? ' style="display: none;"' : '') ?>>
							<?php
							if (Loc::getMessage('CATALOG_QUANTITY'))
							{
								?>
								<div class="product-item-detail-quantity-title"><?= Loc::getMessage('CATALOG_QUANTITY') ?></div>
								<?php
							}
							?>
							<div class="product-item-detail-quantity-field-container">
								<?php //.product-item-detail-quantity-btn-disabled ?>
								<div class="product-item-detail-quantity-btn-minus no-select" id="<?=$itemIds['QUANTITY_DOWN_ID']?>"></div>
								<div class="product-item-detail-quantity-field-block">
									<input class="product-item-detail-quantity-field" id="<?=$itemIds['QUANTITY_ID']?>" type="text" inputmode="numeric" value="<?=$measureRatio?>">
									<div class="product-item-detail-quantity-field" id="<?=$itemIds['QUANTITY_COUNTER_ID']?>" contentEditable="true" inputmode="numeric" name="<?=$arParams['PRODUCT_QUANTITY_VARIABLE']?>" value=""><?=$measureRatio?></div>
								</div>
								<div class="product-item-detail-quantity-btn-plus no-select" id="<?=$itemIds['QUANTITY_UP_ID']?>"></div>
							</div>
							<span class="product-item-detail-quantity-description" id="<?=$itemIds['QUANTITY_MEASURE_CONTAINER']?>">
								<span class="product-item-detail-quantity-description-text" id="<?=$itemIds['QUANTITY_MEASURE']?>"><?=$actualItem['ITEM_MEASURE']['TITLE']?></span>
								<span class="product-item-detail-quantity-description-price" id="<?=$itemIds['PRICE_TOTAL']?>"></span>
							</span>
						</div>
						<?php
					}
					//endregion
					?>
					<?php //region BUTTONS?>
					<div data-entity="main-button-container" class="mb-3">
						<div id="<?=$itemIds['BASKET_ACTIONS_ID']?>" style="display: <?=($actualItem['CAN_BUY'] ? '' : 'none')?>;">
							<?php
							if ($showAddBtn)
							{
								?>
								<a class="product-item-detail-buy-button btn btn-md rounded-pill <?=$buyButtonClassName?>"
										id="<?=$itemIds['ADD_BASKET_LINK']?>"
										href="javascript:void(0);">
								<div class="buy_btn">
								<svg width="26" class="basket_svg" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" clip-rule="evenodd" d="M24.5556 0L25.8475 23.2558C25.9272 24.6895 24.8295 25.9163 23.3958 25.996C23.3237 25.9993 23.3237 25.9993 23.2515 26H2.6C1.16406 26 0 24.8359 0 23.4C0.000333719 23.3639 0.000500579 23.3459 0.00100097 23.3279C0.00150135 23.3098 0.00233526 23.2918 0.00400308 23.2558L1.29599 0H24.5556ZM3.75523 2.60008L2.59967 23.4001H23.2512L22.0957 2.60008H3.75523ZM9.02676 5.2002H6.42676V8.4502C6.42676 11.5711 9.44697 14.3002 12.9268 14.3002C16.4065 14.3002 19.4268 11.5711 19.4268 8.4502V5.2002H16.8268V8.4502C16.8268 10.0731 15.0261 11.7002 12.9268 11.7002C10.8274 11.7002 9.02676 10.0731 9.02676 8.4502V5.2002Z" fill="#000"></path>
								</svg>
									
										Купить
									
								</div></a>
								<?php
							}

							if ($showBuyBtn)
							{
								?>
								<!-- <div class="mb-3">
									<a class="product-item-detail-buy-button btn btn-md rounded-pill <?=$buyButtonClassName?>"
										id="<?=$itemIds['BUY_LINK']?>"
										href="javascript:void(0);">
										<?=$arParams['MESS_BTN_BUY']?>
									</a>
								</div> -->
								<?php
							}
							?>
						</div>
					</div>
					<div class="mb-3" id="<?=$itemIds['NOT_AVAILABLE_MESS']?>" style="display: <?=(!$actualItem['CAN_BUY'] ? '' : 'none')?>;">
						<a class="product-item-detail-buy-button btn disabled rounded-pill" href="javascript:void(0)" rel="nofollow"><?=$arParams['MESS_NOT_AVAILABLE']?></a>
					</div>
					<?php //endregion?>
				</div>

				<?if($arResult['PROPERTIES']['JERCY']['VALUE_XML_ID'] == 'Y'):?>
						<div class="print_block">
							<div class="title_small">Добавить печать</div>
							<div class="jercy_select">
								<select name="" id="" class="jercy" placeholder="Ваша надпись">
									<option value="">тест</option>
									<option value="">тест</option>
									<option value="">тест</option>
								</select>
							</div>
							<div class="jercy_input">
								<input type="text" class="family" placeholder="Фамилия">
								<input type="text" class="name" placeholder="Имя">
							</div>
						</div>
					<?endif?>

					<div class="desc_block">
                   		<div class="title_small">Описание товара</div>
                    	<p class="desc"><?=$arResult['DETAIL_TEXT']?></p> 
                	</div>
					<div class="structure">
						<div class="bold">Состав</div>
						<p class="desc"><?=$arResult['PROPERTIES']['STRUCTURE']['VALUE']?></p>
					</div>

					<div class="delivery">
						<svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" viewBox="0 0 46 46" fill="none">
							<path d="M33.0625 33.0664C32.665 33.0664 32.3438 32.7444 32.3438 32.3477V26.5977C32.3438 26.2009 32.665 25.8789 33.0625 25.8789C33.46 25.8789 33.7812 26.2009 33.7812 26.5977V32.3477C33.7812 32.7444 33.46 33.0664 33.0625 33.0664Z" fill="white"/>
							<path d="M38.8125 33.0664H33.0625C32.665 33.0664 32.3438 32.7444 32.3438 32.3477C32.3438 31.9509 32.665 31.6289 33.0625 31.6289H38.8125C39.21 31.6289 39.5312 31.9509 39.5312 32.3477C39.5312 32.7444 39.21 33.0664 38.8125 33.0664Z" fill="white"/>
							<path d="M19.2517 40.2541C19.1274 40.2541 19.0037 40.2225 18.8923 40.1578L3.95312 31.5328C3.73031 31.4041 3.59375 31.1669 3.59375 30.9103V13.6603C3.59375 13.4037 3.73031 13.1658 3.95312 13.0379L18.8923 4.4129C19.1152 4.28424 19.3883 4.28424 19.6111 4.4129L34.5503 13.0379C34.7731 13.1666 34.9097 13.4037 34.9097 13.6603V20.9032C34.9097 21.2999 34.5884 21.6219 34.1909 21.6219C33.7935 21.6219 33.4722 21.2999 33.4722 20.9032V14.0751L19.2517 5.86549L5.03125 14.0751V30.4956L19.2517 38.7052L22.4214 36.8752C22.7657 36.6762 23.2048 36.794 23.4032 37.1383C23.6016 37.4826 23.4837 37.9217 23.1402 38.1201L19.6111 40.1571C19.4997 40.2217 19.3761 40.2541 19.2517 40.2541Z" fill="white"/>
							<path d="M32.996 41.6849C32.9953 41.6849 32.996 41.6849 32.996 41.6849C32.1012 41.6849 31.2106 41.5519 30.3474 41.2903C27.0397 40.2869 24.4997 37.445 23.8744 34.0496C23.2376 30.5931 24.6391 26.9944 27.4473 24.8798C29.0443 23.6773 31.0453 23.0146 33.0815 23.0146C34.555 23.0146 36.014 23.3618 37.3028 24.0195C40.4042 25.6007 42.4073 28.8696 42.4073 32.3476C42.4073 34.8546 41.3967 37.2143 39.5611 38.9903C37.7929 40.7024 35.3995 41.6849 32.996 41.6849ZM33.0815 24.4521C31.3558 24.4521 29.661 25.0121 28.3119 26.0276C25.9357 27.8173 24.7491 30.8641 25.2881 33.7887C25.8164 36.6616 27.9669 39.0658 30.7643 39.9139C33.4574 40.7311 36.5013 39.9506 38.5613 37.9567C40.1152 36.4546 40.9698 34.4622 40.9698 32.3476C40.9698 29.4043 39.2743 26.6379 36.6501 25.2996C35.5634 24.7454 34.3293 24.4521 33.0815 24.4521Z" fill="white"/>
							<path d="M10.3445 17.8618C10.0958 17.8618 9.8543 17.7332 9.72133 17.5024C9.52295 17.1582 9.64083 16.719 9.98439 16.5206L24.9236 7.89563C25.2658 7.69654 25.7064 7.81441 25.9054 8.15869C26.1038 8.50298 25.9859 8.94213 25.6424 9.14051L10.7031 17.7655C10.5903 17.8309 10.4667 17.8618 10.3445 17.8618Z" fill="white"/>
							<path d="M13.2195 19.5217C12.9708 19.5217 12.7293 19.393 12.5963 19.1623C12.398 18.818 12.5158 18.3788 12.8594 18.1805L27.7986 9.55547C28.1415 9.35709 28.5813 9.47425 28.7804 9.81853C28.9788 10.1628 28.8609 10.602 28.5174 10.8003L13.5781 19.4253C13.4653 19.4907 13.3417 19.5217 13.2195 19.5217Z" fill="white"/>
							<path d="M13.2188 24.501C12.822 24.501 12.5 24.179 12.5 23.7822V18.8027C12.5 18.406 12.822 18.084 13.2188 18.084C13.6155 18.084 13.9375 18.406 13.9375 18.8027V23.7822C13.9375 24.179 13.6155 24.501 13.2188 24.501Z" fill="white"/>
							<path d="M13.2182 24.5008C13.0967 24.5008 12.9724 24.4699 12.8595 24.4045L9.98455 22.7442C9.64027 22.5458 9.52311 22.1059 9.72148 21.7624C9.91986 21.4188 10.3597 21.2995 10.7033 21.4993L13.5783 23.1596C13.9226 23.358 14.0397 23.7979 13.8414 24.1414C13.7084 24.3722 13.4669 24.5008 13.2182 24.5008Z" fill="white"/>
							<path d="M10.3438 22.8408C9.947 22.8408 9.625 22.5188 9.625 22.1221V17.1426C9.625 16.7458 9.947 16.4238 10.3438 16.4238C10.7405 16.4238 11.0625 16.7458 11.0625 17.1426V22.1221C11.0625 22.5195 10.7405 22.8408 10.3438 22.8408Z" fill="white"/>
							<path d="M19.25 40.2539C18.8532 40.2539 18.5312 39.9319 18.5312 39.5352V22.2852C18.5312 21.8884 18.8532 21.5664 19.25 21.5664C19.6467 21.5664 19.9688 21.8884 19.9688 22.2852V39.5352C19.9688 39.9319 19.6467 40.2539 19.25 40.2539Z" fill="white"/>
							<path d="M19.2512 23.0042C19.1297 23.0042 19.0061 22.9733 18.8925 22.9079L3.9533 14.2829C3.60902 14.0846 3.49186 13.6447 3.69023 13.3011C3.88861 12.9576 4.32777 12.839 4.67205 13.0381L19.6113 21.663C19.9555 21.8614 20.0727 22.3013 19.8743 22.6448C19.7406 22.8756 19.4991 23.0042 19.2512 23.0042Z" fill="white"/>
							<path d="M19.2507 23.0034C19.002 23.0034 18.7605 22.8748 18.6276 22.644C18.4292 22.2998 18.5471 21.8606 18.8906 21.6622L33.8299 13.0372C34.1727 12.8381 34.6126 12.956 34.8117 13.3003C35.01 13.6446 34.8922 14.0837 34.5486 14.2821L19.6094 22.9071C19.4958 22.9725 19.3722 23.0034 19.2507 23.0034Z" fill="white"/>
						</svg>
                    	<div class="deliver_text">Доставка в пункты выдачи или курьером</div>
                	</div>

				<?php

				//region PROPS
				foreach ($arParams['PRODUCT_PAY_BLOCK_ORDER'] as $blockName)
				{
					switch ($blockName)
					{
						case 'rating':
							if ($arParams['USE_VOTE_RATING'] === 'Y')
							{
								?>
								<div class="mb-3">
									<?php
									$APPLICATION->IncludeComponent(
										'bitrix:iblock.vote',
										'bootstrap_v4',
										array(
											'CUSTOM_SITE_ID' => $arParams['CUSTOM_SITE_ID'] ?? null,
											'IBLOCK_TYPE' => $arParams['IBLOCK_TYPE'],
											'IBLOCK_ID' => $arParams['IBLOCK_ID'],
											'ELEMENT_ID' => $arResult['ID'],
											'ELEMENT_CODE' => '',
											'MAX_VOTE' => '5',
											'VOTE_NAMES' => array('1', '2', '3', '4', '5'),
											'SET_STATUS_404' => 'N',
											'DISPLAY_AS_RATING' => $arParams['VOTE_DISPLAY_AS_RATING'],
											'CACHE_TYPE' => $arParams['CACHE_TYPE'],
											'CACHE_TIME' => $arParams['CACHE_TIME']
										),
										$component,
										array('HIDE_ICONS' => 'Y')
									);
									?>
								</div>
								<?php
							}

							break;

						case 'price':

							break;

						case 'priceRanges':

							break;

						case 'quantityLimit':
							if ($arParams['SHOW_MAX_QUANTITY'] !== 'N')
							{
								if ($haveOffers)
								{
									?>
									<div class="mb-3" id="<?=$itemIds['QUANTITY_LIMIT']?>" style="display: none;">
										<div class="product-item-detail-info-container-title text-center">
											<?=$arParams['MESS_SHOW_MAX_QUANTITY']?>:
										</div>
										<span class="product-item-quantity" data-entity="quantity-limit-value"></span>
									</div>
									<?php
								}
								else
								{
									if (
										$measureRatio
										&& (float)$actualItem['PRODUCT']['QUANTITY'] > 0
										&& $actualItem['CHECK_QUANTITY']
									)
									{
										?>
										<div class="mb-3 text-center" id="<?=$itemIds['QUANTITY_LIMIT']?>">
											<span class="product-item-detail-info-container-title"><?=$arParams['MESS_SHOW_MAX_QUANTITY']?>:</span>
											<span class="product-item-quantity" data-entity="quantity-limit-value">
											<?php
											if ($arParams['SHOW_MAX_QUANTITY'] === 'M')
											{
												if ((float)$actualItem['PRODUCT']['QUANTITY'] / $measureRatio >= $arParams['RELATIVE_QUANTITY_FACTOR'])
												{
													echo $arParams['MESS_RELATIVE_QUANTITY_MANY'];
												}
												else
												{
													echo $arParams['MESS_RELATIVE_QUANTITY_FEW'];
												}
											}
											else
											{
												echo $actualItem['PRODUCT']['QUANTITY'].' '.$actualItem['ITEM_MEASURE']['TITLE'];
											}
											?>
										</span>
										</div>
										<?php
									}
								}
							}

							break;

						case 'quantity':

							break;

						case 'buttons':

							break;
					}
				}
				//endregion

				?>
			</div>
		</div>
	</div>
</div>


<?php
		if ($haveOffers)
		{
			$offerIds = array();
			$offerCodes = array();

			$useRatio = $arParams['USE_RATIO_IN_RANGES'] === 'Y';

			foreach ($arResult['JS_OFFERS'] as $ind => &$jsOffer)
			{
				$offerIds[] = (int)$jsOffer['ID'];
				$offerCodes[] = $jsOffer['CODE'];

				$fullOffer = $arResult['OFFERS'][$ind];
				$measureName = $fullOffer['ITEM_MEASURE']['TITLE'];

				$strAllProps = '';
				$strMainProps = '';
				$strPriceRangesRatio = '';
				$strPriceRanges = '';

				if ($arResult['SHOW_OFFERS_PROPS'])
				{
					if (!empty($jsOffer['DISPLAY_PROPERTIES']))
					{
						foreach ($jsOffer['DISPLAY_PROPERTIES'] as $property)
						{
							$current = '<li class="product-item-detail-properties-item">
						<span class="product-item-detail-properties-name">'.$property['NAME'].'</span>
						<span class="product-item-detail-properties-dots"></span>
						<span class="product-item-detail-properties-value">'.(
							is_array($property['VALUE'])
								? implode(' / ', $property['VALUE'])
								: $property['VALUE']
							).'</span></li>';
							$strAllProps .= $current;

							if (isset($arParams['MAIN_BLOCK_OFFERS_PROPERTY_CODE'][$property['CODE']]))
							{
								$strMainProps .= $current;
							}
						}

						unset($current);
					}
				}

				if ($arParams['USE_PRICE_COUNT'] && count($jsOffer['ITEM_QUANTITY_RANGES']) > 1)
				{
					$strPriceRangesRatio = '('.Loc::getMessage(
							'CT_BCE_CATALOG_RATIO_PRICE',
							array('#RATIO#' => ($useRatio
									? $fullOffer['ITEM_MEASURE_RATIOS'][$fullOffer['ITEM_MEASURE_RATIO_SELECTED']]['RATIO']
									: '1'
								).' '.$measureName)
						).')';

					foreach ($jsOffer['ITEM_QUANTITY_RANGES'] as $range)
					{
						if ($range['HASH'] !== 'ZERO-INF')
						{
							$itemPrice = false;

							foreach ($jsOffer['ITEM_PRICES'] as $itemPrice)
							{
								if ($itemPrice['QUANTITY_HASH'] === $range['HASH'])
								{
									break;
								}
							}

							if ($itemPrice)
							{
								$strPriceRanges .= '<dt>'.Loc::getMessage(
										'CT_BCE_CATALOG_RANGE_FROM',
										array('#FROM#' => $range['SORT_FROM'].' '.$measureName)
									).' ';

								if (is_infinite($range['SORT_TO']))
								{
									$strPriceRanges .= Loc::getMessage('CT_BCE_CATALOG_RANGE_MORE');
								}
								else
								{
									$strPriceRanges .= Loc::getMessage(
										'CT_BCE_CATALOG_RANGE_TO',
										array('#TO#' => $range['SORT_TO'].' '.$measureName)
									);
								}

								$strPriceRanges .= '</dt><dd>'.($useRatio ? $itemPrice['PRINT_RATIO_PRICE'] : $itemPrice['PRINT_PRICE']).'</dd>';
							}
						}
					}

					unset($range, $itemPrice);
				}

				$jsOffer['DISPLAY_PROPERTIES'] = $strAllProps;
				$jsOffer['DISPLAY_PROPERTIES_MAIN_BLOCK'] = $strMainProps;
				$jsOffer['PRICE_RANGES_RATIO_HTML'] = $strPriceRangesRatio;
				$jsOffer['PRICE_RANGES_HTML'] = $strPriceRanges;

				$jsOffer['RESIZED_SLIDER'] = [
					'X' => [],
					'X2' => [],
				];
				foreach ($jsOffer['SLIDER'] as $morePhoto)
				{
					$xResizedImage = \CFile::ResizeImageGet(
						$morePhoto['ID'],
						[
							'width' => 400,
							'height' => 400,
						],
						BX_RESIZE_IMAGE_PROPORTIONAL,
						true
					);

					$x2ResizedImage = \CFile::ResizeImageGet(
						$morePhoto['ID'],
						[
							'width' => 800,
							'height' => 800,
						],
						BX_RESIZE_IMAGE_PROPORTIONAL,
						true
					);

					if (!$xResizedImage || !$x2ResizedImage)
					{
						$xResizedImage = [
							'src' => $morePhoto['SRC'],
							'width' => $morePhoto['WIDTH'],
							'height' => $morePhoto['HEIGHT'],
						];
						$x2ResizedImage = $xResizedImage;
					}

					$xResizedImage['src'] = \Bitrix\Iblock\Component\Tools::getImageSrc([
						'SRC' => $xResizedImage['src']
					]);
					$x2ResizedImage['src'] = \Bitrix\Iblock\Component\Tools::getImageSrc([
						'SRC' => $x2ResizedImage['src']
					]);

					$jsOffer['RESIZED_SLIDER']['X'][] = [
						'ID' => $morePhoto['ID'],
						'SRC' => $xResizedImage['src'],
						'WIDTH' => $xResizedImage['width'],
						'HEIGHT' => $xResizedImage['height'],
					];
					$jsOffer['RESIZED_SLIDER']['X2'][] = [
						'ID' => $morePhoto['ID'],
						'SRC' => $x2ResizedImage['src'],
						'WIDTH' => $x2ResizedImage['width'],
						'HEIGHT' => $x2ResizedImage['height'],
					];
				}
			}

			$templateData['OFFER_IDS'] = $offerIds;
			$templateData['OFFER_CODES'] = $offerCodes;
			unset($jsOffer, $strAllProps, $strMainProps, $strPriceRanges, $strPriceRangesRatio, $useRatio, $xResizedImage, $x2ResizedImage);
			
			$jsParams = array(
				'CONFIG' => array(
					'USE_CATALOG' => $arResult['CATALOG'],
					'SHOW_QUANTITY' => $arParams['USE_PRODUCT_QUANTITY'],
					'SHOW_PRICE' => true,
					'SHOW_DISCOUNT_PERCENT' => $arParams['SHOW_DISCOUNT_PERCENT'] === 'Y',
					'SHOW_OLD_PRICE' => $arParams['SHOW_OLD_PRICE'] === 'Y',
					'USE_PRICE_COUNT' => $arParams['USE_PRICE_COUNT'],
					'DISPLAY_COMPARE' => $arParams['DISPLAY_COMPARE'],
					'SHOW_SKU_PROPS' => $arResult['SHOW_OFFERS_PROPS'],
					'OFFER_GROUP' => $arResult['OFFER_GROUP'],
					'MAIN_PICTURE_MODE' => $arParams['DETAIL_PICTURE_MODE'],
					'ADD_TO_BASKET_ACTION' => $arParams['ADD_TO_BASKET_ACTION'],
					'SHOW_CLOSE_POPUP' => $arParams['SHOW_CLOSE_POPUP'] === 'Y',
					'SHOW_MAX_QUANTITY' => $arParams['SHOW_MAX_QUANTITY'],
					'RELATIVE_QUANTITY_FACTOR' => $arParams['RELATIVE_QUANTITY_FACTOR'],
					'TEMPLATE_THEME' => $arParams['TEMPLATE_THEME'],
					'USE_STICKERS' => true,
					'USE_SUBSCRIBE' => $showSubscribe,
					'SHOW_SLIDER' => $arParams['SHOW_SLIDER'],
					'SLIDER_INTERVAL' => $arParams['SLIDER_INTERVAL'],
					'ALT' => $alt,
					'TITLE' => $title,
					'MAGNIFIER_ZOOM_PERCENT' => 200,
					'USE_ENHANCED_ECOMMERCE' => $arParams['USE_ENHANCED_ECOMMERCE'],
					'DATA_LAYER_NAME' => $arParams['DATA_LAYER_NAME'],
					'BRAND_PROPERTY' => !empty($arResult['DISPLAY_PROPERTIES'][$arParams['BRAND_PROPERTY']])
						? $arResult['DISPLAY_PROPERTIES'][$arParams['BRAND_PROPERTY']]['DISPLAY_VALUE']
						: null,
					'SHOW_SKU_DESCRIPTION' => $arParams['SHOW_SKU_DESCRIPTION'],
					'DISPLAY_PREVIEW_TEXT_MODE' => $arParams['DISPLAY_PREVIEW_TEXT_MODE']
				),
				'PRODUCT_TYPE' => $arResult['PRODUCT']['TYPE'],
				'VISUAL' => $itemIds,
				'DEFAULT_PICTURE' => array(
					'PREVIEW_PICTURE' => $arResult['DEFAULT_PICTURE'],
					'DETAIL_PICTURE' => $arResult['DEFAULT_PICTURE']
				),
				'PRODUCT' => array(
					'ID' => $arResult['ID'],
					'ACTIVE' => $arResult['ACTIVE'],
					'NAME' => $arResult['~NAME'],
					'CATEGORY' => $arResult['CATEGORY_PATH'],
					'DETAIL_TEXT' => $arResult['DETAIL_TEXT'],
					'DETAIL_TEXT_TYPE' => $arResult['DETAIL_TEXT_TYPE'],
					'PREVIEW_TEXT' => $arResult['PREVIEW_TEXT'],
					'PREVIEW_TEXT_TYPE' => $arResult['PREVIEW_TEXT_TYPE'],
					'ARTICLE' => $arResult['PROPERTIES']['ARTICLE']['VALUE'],
					'SIZE' => $offerPropSize
				),
				'BASKET' => array(
					'QUANTITY' => $arParams['PRODUCT_QUANTITY_VARIABLE'],
					'BASKET_URL' => $arParams['BASKET_URL'],
					'SKU_PROPS' => $arResult['OFFERS_PROP_CODES'],
					'ADD_URL_TEMPLATE' => $arResult['~ADD_URL_TEMPLATE'],
					'BUY_URL_TEMPLATE' => $arResult['~BUY_URL_TEMPLATE']
				),
				'OFFERS' => $arResult['JS_OFFERS'],
				'OFFER_SELECTED' => $arResult['OFFERS_SELECTED'],
				'TREE_PROPS' => $skuProps
			);
		}
		else
		{
			$emptyProductProperties = empty($arResult['PRODUCT_PROPERTIES']);
			if ($arParams['ADD_PROPERTIES_TO_BASKET'] === 'Y' && !$emptyProductProperties)
			{
				?>
				<div id="<?=$itemIds['BASKET_PROP_DIV']?>" style="display: none;">
					<?php
					if (!empty($arResult['PRODUCT_PROPERTIES_FILL']))
					{
						foreach ($arResult['PRODUCT_PROPERTIES_FILL'] as $propId => $propInfo)
						{
							?>
							<input type="hidden" name="<?=$arParams['PRODUCT_PROPS_VARIABLE']?>[<?=$propId?>]" value="<?=htmlspecialcharsbx($propInfo['ID'])?>">
							<?php
							unset($arResult['PRODUCT_PROPERTIES'][$propId]);
						}
					}

					$emptyProductProperties = empty($arResult['PRODUCT_PROPERTIES']);
					if (!$emptyProductProperties)
					{
						?>
						<table>
							<?php
							foreach ($arResult['PRODUCT_PROPERTIES'] as $propId => $propInfo)
							{
								?>
								<tr>
									<td><?=$arResult['PROPERTIES'][$propId]['NAME']?></td>
									<td>
										<?php
										if (
											$arResult['PROPERTIES'][$propId]['PROPERTY_TYPE'] === 'L'
											&& $arResult['PROPERTIES'][$propId]['LIST_TYPE'] === 'C'
										)
										{
											foreach ($propInfo['VALUES'] as $valueId => $value)
											{
												?>
												<label>
													<input type="radio" name="<?=$arParams['PRODUCT_PROPS_VARIABLE']?>[<?=$propId?>]"
														value="<?=$valueId?>" <?=($valueId == $propInfo['SELECTED'] ? '"checked"' : '')?>>
													<?=$value?>
												</label>
												<br>
												<?php
											}
										}
										else
										{
											?>
											<select name="<?=$arParams['PRODUCT_PROPS_VARIABLE']?>[<?=$propId?>]">
												<?php
												foreach ($propInfo['VALUES'] as $valueId => $value)
												{
													?>
													<option value="<?=$valueId?>" <?=($valueId == $propInfo['SELECTED'] ? '"selected"' : '')?>>
														<?=$value?>
													</option>
													<?php
												}
												?>
											</select>
											<?php
										}
										?>
									</td>
								</tr>
								<?php
							}
							?>
						</table>
						<?php
					}
					?>
				</div>
				<?php
			}

			$resizedSlider = [
				'X' => [],
				'X2' => [],
			];

			foreach ($arResult['MORE_PHOTO'] as $morePhoto)
			{
				$xResizedImage = \CFile::ResizeImageGet(
					$morePhoto['ID'],
					[
						'width' => 400,
						'height' => 400,
					],
					BX_RESIZE_IMAGE_PROPORTIONAL,
					true
				);

				$x2ResizedImage = \CFile::ResizeImageGet(
					$morePhoto['ID'],
					[
						'width' => 800,
						'height' => 800,
					],
					BX_RESIZE_IMAGE_PROPORTIONAL,
					true
				);

				if (!$xResizedImage || !$x2ResizedImage)
				{
					$xResizedImage = [
						'src' => $morePhoto['SRC'],
						'width' => $morePhoto['WIDTH'],
						'height' => $morePhoto['HEIGHT'],
					];
					$x2ResizedImage = $xResizedImage;
				}

				$resizedSlider['X'][] = [
					'ID' => $morePhoto['ID'],
					'SRC' => $xResizedImage['src'],
					'WIDTH' => $xResizedImage['width'],
					'HEIGHT' => $xResizedImage['height'],
				];
				$resizedSlider['X2'][] = [
					'ID' => $morePhoto['ID'],
					'SRC' => $x2ResizedImage['src'],
					'WIDTH' => $x2ResizedImage['width'],
					'HEIGHT' => $x2ResizedImage['height'],
				];
			}

			$jsParams = array(
				'CONFIG' => array(
					'USE_CATALOG' => $arResult['CATALOG'],
					'SHOW_QUANTITY' => $arParams['USE_PRODUCT_QUANTITY'],
					'SHOW_PRICE' => !empty($arResult['ITEM_PRICES']),
					'SHOW_DISCOUNT_PERCENT' => $arParams['SHOW_DISCOUNT_PERCENT'] === 'Y',
					'SHOW_OLD_PRICE' => $arParams['SHOW_OLD_PRICE'] === 'Y',
					'USE_PRICE_COUNT' => $arParams['USE_PRICE_COUNT'],
					'DISPLAY_COMPARE' => $arParams['DISPLAY_COMPARE'],
					'MAIN_PICTURE_MODE' => $arParams['DETAIL_PICTURE_MODE'],
					'ADD_TO_BASKET_ACTION' => $arParams['ADD_TO_BASKET_ACTION'],
					'SHOW_CLOSE_POPUP' => $arParams['SHOW_CLOSE_POPUP'] === 'Y',
					'SHOW_MAX_QUANTITY' => $arParams['SHOW_MAX_QUANTITY'],
					'RELATIVE_QUANTITY_FACTOR' => $arParams['RELATIVE_QUANTITY_FACTOR'],
					'TEMPLATE_THEME' => $arParams['TEMPLATE_THEME'],
					'USE_STICKERS' => true,
					'USE_SUBSCRIBE' => $showSubscribe,
					'SHOW_SLIDER' => $arParams['SHOW_SLIDER'],
					'SLIDER_INTERVAL' => $arParams['SLIDER_INTERVAL'],
					'ALT' => $alt,
					'TITLE' => $title,
					'MAGNIFIER_ZOOM_PERCENT' => 200,
					'USE_ENHANCED_ECOMMERCE' => $arParams['USE_ENHANCED_ECOMMERCE'],
					'DATA_LAYER_NAME' => $arParams['DATA_LAYER_NAME'],
					'BRAND_PROPERTY' => !empty($arResult['DISPLAY_PROPERTIES'][$arParams['BRAND_PROPERTY']])
						? $arResult['DISPLAY_PROPERTIES'][$arParams['BRAND_PROPERTY']]['DISPLAY_VALUE']
						: null
					),
				'VISUAL' => $itemIds,
				'PRODUCT_TYPE' => $arResult['PRODUCT']['TYPE'],
				'PRODUCT' => array(
					'ID' => $arResult['ID'],
					'ACTIVE' => $arResult['ACTIVE'],
					'PICT' => reset($arResult['MORE_PHOTO']),
					'NAME' => $arResult['~NAME'],
					'SUBSCRIPTION' => true,
					'ITEM_PRICE_MODE' => $arResult['ITEM_PRICE_MODE'],
					'ITEM_PRICES' => $arResult['ITEM_PRICES'],
					'ITEM_PRICE_SELECTED' => $arResult['ITEM_PRICE_SELECTED'],
					'ITEM_QUANTITY_RANGES' => $arResult['ITEM_QUANTITY_RANGES'],
					'ITEM_QUANTITY_RANGE_SELECTED' => $arResult['ITEM_QUANTITY_RANGE_SELECTED'],
					'ITEM_MEASURE_RATIOS' => $arResult['ITEM_MEASURE_RATIOS'],
					'ITEM_MEASURE_RATIO_SELECTED' => $arResult['ITEM_MEASURE_RATIO_SELECTED'],
					'SLIDER_COUNT' => $arResult['MORE_PHOTO_COUNT'],
					'SLIDER' => $arResult['MORE_PHOTO'],
					'RESIZED_SLIDER' => $resizedSlider,
					'CAN_BUY' => $arResult['CAN_BUY'],
					'CHECK_QUANTITY' => $arResult['CHECK_QUANTITY'],
					'QUANTITY_FLOAT' => is_float($arResult['ITEM_MEASURE_RATIOS'][$arResult['ITEM_MEASURE_RATIO_SELECTED']]['RATIO']),
					'MAX_QUANTITY' => $arResult['PRODUCT']['QUANTITY'],
					'STEP_QUANTITY' => $arResult['ITEM_MEASURE_RATIOS'][$arResult['ITEM_MEASURE_RATIO_SELECTED']]['RATIO'],
					'CATEGORY' => $arResult['CATEGORY_PATH'],
					'ARTICLE' => $arResult['PROPERTIES']['ARTICLE']['VALUE'],
					'SIZE' => $offerPropSize
					
				),
				'BASKET' => array(
					'ADD_PROPS' => $arParams['ADD_PROPERTIES_TO_BASKET'] === 'Y',
					'QUANTITY' => $arParams['PRODUCT_QUANTITY_VARIABLE'],
					'PROPS' => $arParams['PRODUCT_PROPS_VARIABLE'],
					'EMPTY_PROPS' => $emptyProductProperties,
					'BASKET_URL' => $arParams['BASKET_URL'],
					'ADD_URL_TEMPLATE' => $arResult['~ADD_URL_TEMPLATE'],
					'BUY_URL_TEMPLATE' => $arResult['~BUY_URL_TEMPLATE']
				)
			);
			unset($emptyProductProperties, $resizedSlider, $xResizedImage, $x2ResizedImage);
		}

		$jsParams['IS_FACEBOOK_CONVERSION_CUSTOMIZE_PRODUCT_EVENT_ENABLED'] =
			$arResult['IS_FACEBOOK_CONVERSION_CUSTOMIZE_PRODUCT_EVENT_ENABLED']
		;

		?>
	</div>
<script>
	var slideIndex_mobile = 1;
showSlides_mobile(slideIndex_mobile);

function plusSlide_mobile() {
	showSlides_mobile(slideIndex_mobile += 1);
}

function minusSlide_mobile() {
	showSlides_mobile(slideIndex_mobile -= 1);  
}

function currentSlide_mobile(n_mobile) {
	showSlides_mobile(slideIndex_mobile = n_mobile);
}

function showSlides_mobile(n_mobile) {
	var i_mobile;
	var slides_mobile = document.getElementsByClassName("item_slider_mobile");
	var dots_mobile = document.getElementsByClassName("slider-dots_item_mobile");
	if (n_mobile > slides_mobile.length) {
		slideIndex_mobile = 1
	}
	if (n_mobile < 1) {
		slideIndex_mobile = slides_mobile.length
	}
	for (i_mobile = 0; i_mobile < slides_mobile.length; i_mobile++) {
		slides_mobile[i_mobile].style.display = "none";
	}
	for (i_mobile = 0; i_mobile < dots_mobile.length; i_mobile++) {
		dots_mobile[i_mobile].className = dots_mobile[i_mobile].className.replace(" active", "");
	}
	slides_mobile[slideIndex_mobile - 1].style.display = "block";
	dots_mobile[slideIndex_mobile - 1].className += " active";
}


</script>
<script>
	BX.message({
		ECONOMY_INFO_MESSAGE: '<?=GetMessageJS('CT_BCE_CATALOG_ECONOMY_INFO2')?>',
		TITLE_ERROR: '<?=GetMessageJS('CT_BCE_CATALOG_TITLE_ERROR')?>',
		TITLE_BASKET_PROPS: '<?=GetMessageJS('CT_BCE_CATALOG_TITLE_BASKET_PROPS')?>',
		BASKET_UNKNOWN_ERROR: '<?=GetMessageJS('CT_BCE_CATALOG_BASKET_UNKNOWN_ERROR')?>',
		BTN_SEND_PROPS: '<?=GetMessageJS('CT_BCE_CATALOG_BTN_SEND_PROPS')?>',
		BTN_MESSAGE_BASKET_REDIRECT: '<?=GetMessageJS('CT_BCE_CATALOG_BTN_MESSAGE_BASKET_REDIRECT')?>',
		BTN_MESSAGE_CLOSE: '<?=GetMessageJS('CT_BCE_CATALOG_BTN_MESSAGE_CLOSE')?>',
		BTN_MESSAGE_CLOSE_POPUP: '<?=GetMessageJS('CT_BCE_CATALOG_BTN_MESSAGE_CLOSE_POPUP')?>',
		TITLE_SUCCESSFUL: '<?=GetMessageJS('CT_BCE_CATALOG_ADD_TO_BASKET_OK')?>',
		COMPARE_MESSAGE_OK: '<?=GetMessageJS('CT_BCE_CATALOG_MESS_COMPARE_OK')?>',
		COMPARE_UNKNOWN_ERROR: '<?=GetMessageJS('CT_BCE_CATALOG_MESS_COMPARE_UNKNOWN_ERROR')?>',
		COMPARE_TITLE: '<?=GetMessageJS('CT_BCE_CATALOG_MESS_COMPARE_TITLE')?>',
		BTN_MESSAGE_COMPARE_REDIRECT: '<?=GetMessageJS('CT_BCE_CATALOG_BTN_MESSAGE_COMPARE_REDIRECT')?>',
		PRODUCT_GIFT_LABEL: '<?=GetMessageJS('CT_BCE_CATALOG_PRODUCT_GIFT_LABEL')?>',
		PRICE_TOTAL_PREFIX: '<?=GetMessageJS('CT_BCE_CATALOG_MESS_PRICE_TOTAL_PREFIX')?>',
		RELATIVE_QUANTITY_MANY: '<?=CUtil::JSEscape($arParams['MESS_RELATIVE_QUANTITY_MANY'])?>',
		RELATIVE_QUANTITY_FEW: '<?=CUtil::JSEscape($arParams['MESS_RELATIVE_QUANTITY_FEW'])?>',
		SITE_ID: '<?=CUtil::JSEscape($component->getSiteId())?>'
	});

	var <?=$obName?> = new JCCatalogElement(<?=CUtil::PhpToJSObject($jsParams, false, true)?>);
</script>

<?php
	$arrayData = array(
		"@context" => "https://schema.org/",
		"@type" => "Product",
	);

	$arrayData["name"] = $name;

	//region PREVIEW_TEXT
	if (isset($arResult['PREVIEW_TEXT']))
	{
		$arrayData["description"] = $arResult['PREVIEW_TEXT'];
	}

	//endregion

	//region category
	if(isset($arResult['CATEGORY_PATH']))
	{
		$arrayData['category'] = $arResult['CATEGORY_PATH'];
	}

	//endregion

	//region link
	if(isset($arResult['DETAIL_PAGE_URL']))
	{
		$arrayData['link'] = $arResult['DETAIL_PAGE_URL'];
	}

	//endregion

	//region MORE_PHOTO
	if (!empty($actualItem['MORE_PHOTO']))
	{
		foreach ($actualItem['MORE_PHOTO'] as $key => $photo)
		{
			$arrayData['image'][] = $photo['SRC'];
		}
	}

	//endregion

	//region $haveOffers
	if ($haveOffers)
	{
		foreach ($arResult['JS_OFFERS'] as $offer)
		{
			$currentOffersList = array();

			if (!empty($offer['TREE']) && is_array($offer['TREE']))
			{
				foreach ($offer['TREE'] as $propName => $skuId)
				{
					$propId = (int)substr($propName, 5);

					foreach ($skuProps as $prop)
					{
						if ($prop['ID'] == $propId)
						{
							foreach ($prop['VALUES'] as $propId => $propValue)
							{
								if ($propId == $skuId)
								{
									$currentOffersList[] = $propValue['NAME'];
									break;
								}
							}
						}
					}
				}
			}

			$offerPrice = $offer['ITEM_PRICES'][$offer['ITEM_PRICE_SELECTED']];

			$arrayDataOffers[] = array(
				"sku" => htmlspecialcharsbx(implode('/', $currentOffersList)),
				"price" => $offerPrice['RATIO_PRICE'],
				"priceCurrency" => $offerPrice['CURRENCY'],
				"availability" => ($offer['CAN_BUY'] ? 'InStock' : 'OutOfStock')
			);
		}


		unset($offerPrice, $currentOffersList);
	}
	else
	{
		$arrayDataOffers[] = array(
			"price" => $price['RATIO_PRICE'],
			"priceCurrency" => $price['CURRENCY'],
			"availability" => ($actualItem['CAN_BUY'] ? 'InStock' : 'OutOfStock')
		);
	}

	$arrayData["offers"] = $arrayDataOffers;

	//endregion

	//region USE_VOTE_RATING
	//todo: need to add ratingCount
	if ($arParams['USE_VOTE_RATING'] === 'Y' && false)
	{
		$arrayData["aggregateRating"] = array(
			"@type" => "AggregateRating",
			"ratingValue" => $arResult["PROPERTIES"]["rating"]['VALUE'],
			"reviewCount" => $arResult["PROPERTIES"]["rating"]['VALUE']
		);
	}

	//endregion



?>

<script type="application/ld+json">
	<?=json_encode($arrayData, JSON_UNESCAPED_UNICODE ), "\n\n";?>
</script>

<?php

unset($actualItem, $itemIds, $jsParams);



	// if( $USER->GetID() == 1 )
	// {
	// 	echo '<pre>';
	// 	print_r($arResult['JS_OFFERS']);
	// 	echo '</pre>';
	// }





