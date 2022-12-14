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


$resize_image = CFile::ResizeImageGet($item["PREVIEW_PICTURE"]['ID'],
    array("width" => 465, "height" => 520),
    BX_RESIZE_IMAGE_EXACT, false);
?>
    <div class="shop__swiper-item-image scale" data-item-id="<?= $item['ID'] ?>">
        <div class="shop__swiper-item-like products__item-like">
            <img src="<?= SITE_TEMPLATE_PATH ?>/img/like.svg" alt="like">
            <img class="like-active <?= (in_array($item['ID'], $arResult['FAVORITES']) ? '' : 'hide')?>" src="<?= SITE_TEMPLATE_PATH ?>/img/full_like.svg" alt="full_like">
        </div>
        <a href="<?= $item['DETAIL_PAGE_URL'] ?>">
            <img src="<?= $resize_image["src"] ?>" alt="<?= $imgTitle ?>">
        </a>
    </div>
    <div class="shop__swiper-item-footer">
        <div class="shop__swiper-item-txt">
            <a href="<?= $item['DETAIL_PAGE_URL'] ?>">
                <div class="shop__swiper-item-name"><?= $item['NAME'] ?></div>
                <div class="shop__swiper-item-price"><?= $item['PRICES']['BASE']['PRINT_VALUE_VAT'] ?>
                    <? if ($item['PROPERTIES']['OLD_PRICE']['VALUE'] > 0): ?>
                        <del class="shop__swiper-item-old-price"><?= $item['PROPERTIES']['OLD_PRICE']['VALUE'] . ' ₽' ?></del>
                    <? endif; ?>
                </div>
            </a>
        </div>
        <div class="shop__swiper-item-basket">
            <a href="<?= $item['DETAIL_PAGE_URL'] ?>">
                <img src="<?= SITE_TEMPLATE_PATH ?>/img/basket.svg" alt="basket">
            </a>
        </div>
    </div>
<?

// if( $USER->GetID() == 1  && $item['ID'] == 64)
// {
// 	echo '<pre>';
// 	print_r($item);
// 	echo '</pre>';
//
//     die();
// }
?>