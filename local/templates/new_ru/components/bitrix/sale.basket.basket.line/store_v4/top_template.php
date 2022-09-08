<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

/**
 * @var array $arParams
 * @var array $arResult
 * @var string $cartId
 */

$compositeStub = ($arResult['COMPOSITE_STUB'] ?? 'N') === 'Y';
if ($arResult['NUM_PRODUCTS'] > 0) {
    ?>
    <a href="<?= $arParams['PATH_TO_BASKET'] ?>" id="<?=$arParams['cartId']?>" class="basket-image">
        <?php
        if (!$compositeStub) {
            if (
                $arParams['SHOW_NUM_PRODUCTS'] === 'Y'
                && ($arResult['NUM_PRODUCTS'] > 0 || $arParams['SHOW_EMPTY_VALUES'] === 'Y')
            ) {
                ?>
                <img class="basket-icon" src="<?= SITE_TEMPLATE_PATH ?>/img/black_basket.svg" alt="black_heart">
                <img class="basket-ellipse" src="<?= SITE_TEMPLATE_PATH ?>/img/black_ellipse.svg" alt="black_ellipse">
                <div class="basket-ellipse__txt"><?= $arResult['NUM_PRODUCTS'] ?></div>
                <?php
            }
        }
        ?>
    </a>
    <?php
}