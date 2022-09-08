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

//dump($item);
?>
<a class="products__item" href="<?= $item['DETAIL_PAGE_URL'] ?>" data-item-id="<?= $item['ID'] ?>">
    <div class="products__item-image scale">
        <div class="products__item-like">
            <img src="<?= SITE_TEMPLATE_PATH ?>/img/like.svg" alt="like">
            <img class="like-active" src="<?= SITE_TEMPLATE_PATH ?>/img/full_like.svg" alt="full_like">
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
        <img src="<?= $resize_image["src"] ?>">
    </div>
    <div class="products__item-footer">
        <div class="products__item-txt">
            <div class="products__item-name"><?= $item['NAME'] ?></div>
            <div class="products__item-price"><?
                if (empty($arResult['ITEM']['OFFERS'])) {
                    foreach ($item["ITEM_PRICES"] as $key => $price) {
                        echo $price["PRINT_RATIO_BASE_PRICE"];
                    }
                } else {
                    echo $arResult['ITEM']['OFFERS'][0]['ITEM_PRICES'][0]['PRINT_RATIO_BASE_PRICE'];
                }
                ?></div>
        </div>
        <div class="products__item-basket">
            <img src="<?= SITE_TEMPLATE_PATH ?>/img/basket.svg" alt="basket">
        </div>
    </div>
</a>