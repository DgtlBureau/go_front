<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<?
if (!empty($arResult["ELEMENTS"])):?>
    <table class="title-search-result">
        <? foreach ($arResult["ELEMENTS"] as $i => $arElement): ?>
            <tr>
                <?
                if (!empty($arElement)):?>
                    <td class="title-search-item">
                        <a href="<?= $arElement["DETAIL_PAGE_URL"] ?>"><?
                            if (is_array($arElement["PICTURE"])):?>
                                <img src="<?= $arElement["PICTURE"]["src"] ?>"
                                     width="<?= $arElement["PICTURE"]["width"] ?>"
                                     height="<?= $arElement["PICTURE"]["height"] ?>">
                            <? endif; ?><?= $arElement["NAME"] ?></a>
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