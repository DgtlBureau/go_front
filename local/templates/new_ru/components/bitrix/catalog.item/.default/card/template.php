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
 * @var CatalogSectionComponent $component
 */

$resize_image = CFile::ResizeImageGet($item["PREVIEW_PICTURE"]['ID'],
    array("width" => 440, "height" => 490),
    BX_RESIZE_IMAGE_EXACT, false);

//echo '<pre>';
//print_r($item['PROPERTIES']['HIT']);
//echo '<pre>';
?>

    <div class="products__item"  data-item-id="<?= $item['ID'] ?>">
        <div class="products__item-image scale">
            <div class="products__item-like">
                <img src="<?= SITE_TEMPLATE_PATH ?>/img/like.svg" alt="like">
                <img class="like-active <?= (in_array($item['ID'], $arResult['FAVORITES']) ? '' : 'hide')?>" src="<?= SITE_TEMPLATE_PATH ?>/img/full_like.svg" alt="full_like">
            </div>
            <?
            if (!empty($item['PROPERTIES']['HIT']['VALUE_XML_ID'])):
                foreach ($item['PROPERTIES']['HIT']['VALUE_XML_ID'] as $key => $hit):
                    if ($key === 0)
                        $class = '';
                    elseif ($key == 1)
                        $class = 'products__item-hit-twice';
                    else
                        $class = 'products__item-hit-thrice';

                    ?>
                    <div class="products__item-<?= $hit ?> <?= $class ?>"><?= $item['PROPERTIES']['HIT']['VALUE'][$key] ?></div>

                <?
                endforeach;
            endif;
            ?>
            <a href="<?= $item['DETAIL_PAGE_URL'] ?>">
                <img src="<?= $resize_image["src"] ?>">
            </a>
        </div>
        <div class="products__item-footer">
            <a href="<?= $item['DETAIL_PAGE_URL'] ?>">
                <div class="products__item-txt">
                    <div class="products__item-name"><?= $item['NAME'] ?></div>
                    <div class="products__item-price">
                        <?


                        if (empty($arResult['ITEM']['OFFERS'])) {
                            foreach ($item["ITEM_PRICES"] as $key => $price) {
                                echo $price["PRINT_RATIO_BASE_PRICE"];
                            }
                        } else {
//                        echo '<pre>';
//                        print_r($arResult['ITEM']['OFFERS']);
//                        echo '<pre>';

                            echo $arResult['ITEM']['OFFERS'][0]['ITEM_PRICES'][0]['PRINT_RATIO_BASE_PRICE'];
                        }
                        ?>
                    </div>
                </div>
            </a>

            <div class="products__item-basket">
                <a href="<?= $item['DETAIL_PAGE_URL'] ?>">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/basket.svg" alt="basket">
                </a>
            </div>
        </div>
    </div>

<?php
/*
?>
<div>
	<? if ($itemHasDetailUrl): ?>
	<a class="product-item-image-wrapper" href="<?=$item['DETAIL_PAGE_URL']?>" title="<?=$imgTitle?>"
			data-entity="image-wrapper">
	<? else: ?>
	<span class="product-item-image-wrapper" data-entity="image-wrapper">
	<? endif; ?>
		<span class="product-item-image-slider-slide-container slide" id="<?=$itemIds['PICT_SLIDER']?>"
			<?=($showSlider ? '' : 'style="display: none;"')?>
			data-slider-interval="<?=$arParams['SLIDER_INTERVAL']?>" data-slider-wrap="true">
			<?
			if ($showSlider)
			{
				foreach ($morePhoto as $key => $photo)
				{
					?>
					<span class="product-item-image-slide item <?=($key == 0 ? 'active' : '')?>"
						style="background-image: url('<?=$photo['SRC']?>');">
					</span>
					<?
				}
			}
			?>
		</span>
		<div class="product_img" id="<?=$itemIds['PICT']?>">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="22" viewBox="0 0 24 22" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.9672 1.74143e-05C15.3879 0 14.3699 0.186521 13.2029 0.752809C12.7708 0.962467 12.3655 1.21496 11.9891 1.50953C11.6271 1.23147 11.238 0.990574 10.8238 0.787484C9.63417 0.204162 8.56394 0 7.04132 0C2.96339 0 0 3.34972 0 7.70021C0 10.9857 1.84782 14.1594 5.28964 17.2283C7.09625 18.8392 9.4029 20.4333 11.0548 21.2814L12 21.7666L12.9452 21.2814C14.5971 20.4333 16.9038 18.8392 18.7104 17.2283C22.1522 14.1594 24 10.9857 24 7.70021C24 3.39577 21.0087 0.0166102 16.9672 1.74143e-05ZM21.8185 7.70028C21.8185 10.2743 20.2761 12.9234 17.2516 15.6202C15.6027 17.0904 13.4828 18.5598 12.0003 19.3306C10.5178 18.5598 8.39793 17.0904 6.74897 15.6202C3.72448 12.9234 2.18213 10.2743 2.18213 7.70028C2.18213 4.48586 4.23701 2.16309 7.04163 2.16309C8.25225 2.16309 8.99827 2.3054 9.85682 2.72638C10.364 2.97505 10.8122 3.3034 11.2002 3.71372L12.0029 4.56263L12.7983 3.70699C13.195 3.28023 13.6498 2.94441 14.1624 2.69565C14.9958 2.29124 15.6952 2.16309 16.9629 2.16309C19.7329 2.17448 21.8185 4.53047 21.8185 7.70028Z" fill="white"/>
                </svg>
                <div class="sale_text">
                    <div class="<?if(!empty($item["DISPLAY_PROPERTIES"]["HIT"]["VALUE_XML_ID"])){ echo $item["DISPLAY_PROPERTIES"]["HIT"]["VALUE_XML_ID"][1];}?>"><?=$item["DISPLAY_PROPERTIES"]["HIT"]["VALUE_ENUM"][1]?></div>
                    <div class="<?if(!empty($item["DISPLAY_PROPERTIES"]["HIT"]["VALUE_XML_ID"])){ echo $item["DISPLAY_PROPERTIES"]["HIT"]["VALUE_XML_ID"][0];}?>"><?=$item["DISPLAY_PROPERTIES"]["HIT"]["VALUE_ENUM"][0]?></div>
                </div>
                <img src="<?=$item['PREVIEW_PICTURE']['SRC']?>" alt="">
		</div>
		<?
		if ($item['SECOND_PICT'])
		{
			$bgImage = !empty($item['PREVIEW_PICTURE_SECOND']) ? $item['PREVIEW_PICTURE_SECOND']['SRC'] : $item['PREVIEW_PICTURE']['SRC'];
			?>
			<span class="product-item-image-alternative" id="<?=$itemIds['SECOND_PICT']?>"
				style="background-image: url('<?=$bgImage?>'); <?=($showSlider ? 'display: none;' : '')?>">
			</span>
			<?
		}

		if ($arParams['SHOW_DISCOUNT_PERCENT'] === 'Y')
		{
			?>
			<div class="product-item-label-ring <?=$discountPositionClass?>" id="<?=$itemIds['DSC_PERC']?>"
				<?=($price['PERCENT'] > 0 ? '' : 'style="display: none;"')?>>
				<span><?=-$price['PERCENT']?>%</span>
			</div>
			<?
		}

		if ($item['LABEL'])
		{
			?>
			<div class="product-item-label-text <?=$labelPositionClass?>" id="<?=$itemIds['STICKER_ID']?>">
				<?
				if (!empty($item['LABEL_ARRAY_VALUE']))
				{
					foreach ($item['LABEL_ARRAY_VALUE'] as $code => $value)
					{
						?>
						<div<?=(!isset($item['LABEL_PROP_MOBILE'][$code]) ? ' class="hidden-xs"' : '')?>>
							<span title="<?=$value?>"><?=$value?></span>
						</div>
						<?
					}
				}
				?>
			</div>
			<?
		}
		?>
		<div class="product-item-image-slider-control-container" id="<?=$itemIds['PICT_SLIDER']?>_indicator"
			<?=($showSlider ? '' : 'style="display: none;"')?>>
			<?
			if ($showSlider)
			{
				foreach ($morePhoto as $key => $photo)
				{
					?>
					<div class="product-item-image-slider-control<?=($key == 0 ? ' active' : '')?>" data-go-to="<?=$key?>"></div>
					<?
				}
			}
			?>
		</div>
		<?
		if ($arParams['SLIDER_PROGRESS'] === 'Y')
		{
			?>
			<div class="product-item-image-slider-progress-bar-container">
				<div class="product-item-image-slider-progress-bar" id="<?=$itemIds['PICT_SLIDER']?>_progress_bar" style="width: 0;"></div>
			</div>
			<?
		}
		?>
	<? if ($itemHasDetailUrl): ?>
	</a>
	<? else: ?>
	</span>
	<? endif; ?>
	<div class="product_bottom">
		<div class="product_desc">
			<a href="<?=$item['DETAIL_PAGE_URL']?>" title="<?=$productTitle?>">
				<div class="product_text"><?=$item['NAME']?></div>
			</a>
			<div class="price_block">
				<div class="product_price">
					<?
					if(empty($arResult['ITEM']['OFFERS'])){
						foreach($item["ITEM_PRICES"] as $key => $price){
							echo $price["PRINT_RATIO_BASE_PRICE"];
						}
					} else{
					echo $arResult['ITEM']['OFFERS'][0]['PRICES']['BASE']['PRINT_VALUE'];
					}

				?></div>
				<div class="product_price econom"><?=$item["DISPLAY_PROPERTIES"]["OLD_PRICE"]["DISPLAY_VALUE"]?> ₽</div>
			</div>
		</div>
		<a href="<?=$item['DETAIL_PAGE_URL']?>" title="<?=$productTitle?>">
			<div class="product_basket">
				<svg width="26" class="basket" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M24.5556 0L25.8475 23.2558C25.9272 24.6895 24.8295 25.9163 23.3958 25.996C23.3237 25.9993 23.3237 25.9993 23.2515 26H2.6C1.16406 26 0 24.8359 0 23.4C0.000333719 23.3639 0.000500579 23.3459 0.00100097 23.3279C0.00150135 23.3098 0.00233526 23.2918 0.00400308 23.2558L1.29599 0H24.5556ZM3.75523 2.60008L2.59967 23.4001H23.2512L22.0957 2.60008H3.75523ZM9.02676 5.2002H6.42676V8.4502C6.42676 11.5711 9.44697 14.3002 12.9268 14.3002C16.4065 14.3002 19.4268 11.5711 19.4268 8.4502V5.2002H16.8268V8.4502C16.8268 10.0731 15.0261 11.7002 12.9268 11.7002C10.8274 11.7002 9.02676 10.0731 9.02676 8.4502V5.2002Z" fill="white"/>
				</svg>
			</div>
		</a>

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
