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
$this->addExternalCss('/bitrix/css/main/bootstrap.css');
?>
<?
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
	'OLD_PRICE_ID' => $mainId.'_old_price',
	'PRICE_ID' => $mainId.'_price',
	'DESCRIPTION_ID' => $mainId.'_description',
	'DISCOUNT_PRICE_ID' => $mainId.'_price_discount',
	'PRICE_TOTAL' => $mainId.'_price_total',
	'SLIDER_CONT_OF_ID' => $mainId.'_slider_cont_',
	'QUANTITY_ID' => $mainId.'_quantity',
	'QUANTITY_DOWN_ID' => $mainId.'_quant_down',
	'QUANTITY_UP_ID' => $mainId.'_quant_up',
	'QUANTITY_MEASURE' => $mainId.'_quant_measure',
	'QUANTITY_LIMIT' => $mainId.'_quant_limit',
	'BUY_LINK' => $mainId.'_buy_link',
	'ADD_BASKET_LINK' => $mainId.'_add_basket_link',
	'BASKET_ACTIONS_ID' => $mainId.'_basket_actions',
	'NOT_AVAILABLE_MESS' => $mainId.'_not_avail',
	'COMPARE_LINK' => $mainId.'_compare_link',
	'TREE_ID' => $mainId.'_skudiv',
	'DISPLAY_PROP_DIV' => $mainId.'_sku_prop',
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
$buyButtonClassName = in_array('BUY', $arParams['ADD_TO_BASKET_ACTION_PRIMARY']) ? 'btn-default' : 'btn-link';
$showAddBtn = in_array('ADD', $arParams['ADD_TO_BASKET_ACTION']);
$showButtonClassName = in_array('ADD', $arParams['ADD_TO_BASKET_ACTION_PRIMARY']) ? 'btn-default' : 'btn-link';
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

$positionClassMap = array(
	'left' => 'product-item-label-left',
	'center' => 'product-item-label-center',
	'right' => 'product-item-label-right',
	'bottom' => 'product-item-label-bottom',
	'middle' => 'product-item-label-middle',
	'top' => 'product-item-label-top'
);

$discountPositionClass = 'product-item-label-big';
if ($arParams['SHOW_DISCOUNT_PERCENT'] === 'Y' && !empty($arParams['DISCOUNT_PERCENT_POSITION']))
{
	foreach (explode('-', $arParams['DISCOUNT_PERCENT_POSITION']) as $pos)
	{
		$discountPositionClass .= isset($positionClassMap[$pos]) ? ' '.$positionClassMap[$pos] : '';
	}
}

$labelPositionClass = 'product-item-label-big';
if (!empty($arParams['LABEL_PROP_POSITION']))
{
	foreach (explode('-', $arParams['LABEL_PROP_POSITION']) as $pos)
	{
		$labelPositionClass .= isset($positionClassMap[$pos]) ? ' '.$positionClassMap[$pos] : '';
	}
}
?>

<div class="container_detail">
    <div class="row_detail">
        <div class="detail_back">В каталог</div>
        <div class="detail_main">
            <div class="detail_slider">
                <div class="slider">
				<?foreach($arResult['MORE_PHOTO'] as $key => $photo):?>
						<div class="item_slider">
							<img src="<?=$photo['SRC']?>" alt="Первый слайд">
							<!-- <div class="slideText">Заголовок слайда 1</div> -->
						</div>
					<?endforeach?>
                </div>

                <div class="slider-dots">
				<?$i=1; foreach($arResult['MORE_PHOTO'] as $key => $photo):?>
                    <span class="slider-dots_item" onclick="currentSlide(<?=$i;?>)">
                        <img src="<?=$photo['SRC']?>" alt="">
                    </span> 
				<?$i++; endforeach?>
                </div>
            </div>
            <div class="detail_info">
                <div class="detail_title"><?=$arResult['NAME']?></div>
                <div class="article"><?=$arResult['PROPERTIES']['ARTICLE']['VALUE']?></div>
                <div class="size_choose">
                    <div class="title_small">Выберите размер</div>
                    <ul class="size_items">
						<?foreach($arResult['OFFERS'] as $key => $offers):?>
                        		<li	li class="size_item"><?=$offers['PROPERTIES']['SIZE']['VALUE_ENUM']?></li>
						<?endforeach?>
                    </ul>
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
                <div class="price_block">
				<?foreach($arResult['OFFERS'] as $key => $offers):?>
                    <div class="price"><?=$offers['PRICES']['BASE']['VALUE']?> ₽</div>
                    <div class="basket_button">
                        <svg width="26" class="basket_svg" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M24.5556 0L25.8475 23.2558C25.9272 24.6895 24.8295 25.9163 23.3958 25.996C23.3237 25.9993 23.3237 25.9993 23.2515 26H2.6C1.16406 26 0 24.8359 0 23.4C0.000333719 23.3639 0.000500579 23.3459 0.00100097 23.3279C0.00150135 23.3098 0.00233526 23.2918 0.00400308 23.2558L1.29599 0H24.5556ZM3.75523 2.60008L2.59967 23.4001H23.2512L22.0957 2.60008H3.75523ZM9.02676 5.2002H6.42676V8.4502C6.42676 11.5711 9.44697 14.3002 12.9268 14.3002C16.4065 14.3002 19.4268 11.5711 19.4268 8.4502V5.2002H16.8268V8.4502C16.8268 10.0731 15.0261 11.7002 12.9268 11.7002C10.8274 11.7002 9.02676 10.0731 9.02676 8.4502V5.2002Z" fill="#000"></path>
                        </svg>
                        <a href="" class="basket_url">Купить</a>
                    </div>
				<?endforeach?>
                </div>
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
					$current = '<dt>'.$property['NAME'].'</dt><dd>'.(
						is_array($property['VALUE'])
							? implode(' / ', $property['VALUE'])
							: $property['VALUE']
						).'</dd>';
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
	}

	$templateData['OFFER_IDS'] = $offerIds;
	$templateData['OFFER_CODES'] = $offerCodes;
	unset($jsOffer, $strAllProps, $strMainProps, $strPriceRanges, $strPriceRangesRatio, $useRatio);

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
			'PREVIEW_TEXT_TYPE' => $arResult['PREVIEW_TEXT_TYPE']
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
			'CAN_BUY' => $arResult['CAN_BUY'],
			'CHECK_QUANTITY' => $arResult['CHECK_QUANTITY'],
			'QUANTITY_FLOAT' => is_float($arResult['ITEM_MEASURE_RATIOS'][$arResult['ITEM_MEASURE_RATIO_SELECTED']]['RATIO']),
			'MAX_QUANTITY' => $arResult['PRODUCT']['QUANTITY'],
			'STEP_QUANTITY' => $arResult['ITEM_MEASURE_RATIOS'][$arResult['ITEM_MEASURE_RATIO_SELECTED']]['RATIO'],
			'CATEGORY' => $arResult['CATEGORY_PATH']
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
	unset($emptyProductProperties);
}

if ($arParams['DISPLAY_COMPARE'])
{
	$jsParams['COMPARE'] = array(
		'COMPARE_URL_TEMPLATE' => $arResult['~COMPARE_URL_TEMPLATE'],
		'COMPARE_DELETE_URL_TEMPLATE' => $arResult['~COMPARE_DELETE_URL_TEMPLATE'],
		'COMPARE_PATH' => $arParams['COMPARE_PATH']
	);
}
?>

<script>

    /* Индекс слайда по умолчанию */
	var slideIndex = 1;
showSlides(slideIndex);

/* Функция увеличивает индекс на 1, показывает следующй слайд*/
function plusSlide() {
    showSlides(slideIndex += 1);
}

/* Функция уменьшяет индекс на 1, показывает предыдущий слайд*/
function minusSlide() {
    showSlides(slideIndex -= 1);  
}

/* Устанавливает текущий слайд */
function currentSlide(n) {
    showSlides(slideIndex = n);
}

/* Основная функция слайдера */
function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("item_slider");
    var dots = document.getElementsByClassName("slider-dots_item");
    if (n > slides.length) {
      slideIndex = 1
    }
    if (n < 1) {
        slideIndex = slides.length
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
}


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

<style>
	pre {
	color: #000;
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



<?php
unset($actualItem, $itemIds, $jsParams);
