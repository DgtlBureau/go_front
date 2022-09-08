<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>


<?
if (!empty($arResult["ELEMENTS"])):?>
    <table class="title-search-result">
        <? foreach ($arResult["ELEMENTS"] as $arElement): ?>
            <tr>
                <?
                //                dump($arElement);
                if (!empty($arElement)):?>
                    <td class="title-search-item">
                        <a href="<?= $arElement["DETAIL_PAGE_URL"] ?>">
                            <?
                            if (is_array($arElement["PICTURE"])):?>
                                <img src="<?= $arElement["PICTURE"]["src"] ?>"
                                     width="<?= $arElement["PICTURE"]["width"] ?>"
                                     height="<?= $arElement["PICTURE"]["height"] ?>">
                            <? endif; ?>

                            <div>
                                <h5><?= $arElement["NAME"] ?></h5>
                                <? if (!empty($arElement['PROPERTY_ARTICLE_VALUE'])): ?>
                                    <p><?= 'Артикул: ' . $arElement['PROPERTY_ARTICLE_VALUE'] ?></p><?
                                endif; ?>
                                <? foreach ($arElement["PRICES"] as $code => $arPrice): ?>
                                    <? if ($arPrice["CAN_ACCESS"]): ?>
                                        <p class="title-search-price">
                                            Цена: <? if ($arPrice["DISCOUNT_VALUE"] < $arPrice["VALUE"]): ?>
                                                <s><?= $arPrice["PRINT_VALUE"] ?></s> <span
                                                        class="catalog-price"><?= $arPrice["PRINT_DISCOUNT_VALUE"] ?></span>
                                            <? else: ?><span
                                                    class="catalog-price"><?= $arPrice["PRINT_VALUE"] ?></span><? endif; ?>
                                        </p>
                                    <? endif; ?>
                                <? endforeach; ?>
                            </div>
                        </a>

                    </td>
                <? endif; ?>
            </tr>
        <? endforeach; ?>
    </table>
<? endif; ?>

<?

//if ($USER->GetID() == 1) {
//    echo '<pre>';
//    print_r($arResult);
//    echo '</pre>';
//}

?>