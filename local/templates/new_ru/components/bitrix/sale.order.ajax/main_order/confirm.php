<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Localization\Loc;

/**
 * @var array $arParams
 * @var array $arResult
 * @var $APPLICATION CMain
 */

if ($arParams["SET_TITLE"] == "Y") {
    $APPLICATION->SetTitle(Loc::getMessage("SOA_ORDER_COMPLETE"));
}

//dump($arResult);
?>
<main class="shop">
    <div class="order__confirm">
        <?
        ?>
        <div class="product-confirm__modal " id="product-confirm__modal">
            <div class="product-confirm__content">
                <div class="product-confirm__title-block">
                    <div class="product-confirm__title">Спсибо за заказ!</div>
                </div>
                <div class="product-confirm__info">
                    Номер вашего заказа # <?= $arResult["ORDER"]["ACCOUNT_NUMBER"] ?>
                </div>
                <div class="product-confirm__info">
                    Все данные по заказу мы отправили на почту <?= $arResult['USER']['EMAIL'] ?>
                </div>
                <div class="product-confirm__btn-block">
                    <a href="/shop/catalog/odezhda/" class="product-confirm__btn confirm-confirm <?= ($arResult['IS_PAID'] ) ? 'margin-left' : ''?>">
                        <div class="product-confirm__btn-txt">В каталог</div>
                    </a>
                    <?
                    if (!$arResult['IS_PAID'] && !empty($arResult['URL_TO_PAY'])):
                        ?>
                        <a href="<?=$arResult['URL_TO_PAY']?>" class="product-confirm__btn confirm-confirm">
                            <div class="product-confirm__btn-txt">Оплатить</div>
                        </a>
                    <?
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
    <?
/*
    if (!empty($arResult["ORDER"])): ?>

        <table class="sale_order_full_table">
            <tr>
                <td>
                    <?= Loc::getMessage("SOA_ORDER_SUC", array(
                        "#ORDER_DATE#" => $arResult["ORDER"]["DATE_INSERT"]->toUserTime()->format('d.m.Y H:i'),
                        "#ORDER_ID#" => $arResult["ORDER"]["ACCOUNT_NUMBER"]
                    )) ?>
                    <? if (!empty($arResult['ORDER']["PAYMENT_ID"])): ?>
                        <?= Loc::getMessage("SOA_PAYMENT_SUC", array(
                            "#PAYMENT_ID#" => $arResult['PAYMENT'][$arResult['ORDER']["PAYMENT_ID"]]['ACCOUNT_NUMBER']
                        )) ?>
                    <? endif ?>
                    <? if ($arParams['NO_PERSONAL'] !== 'Y'): ?>
                        <br/><br/>
                        <?= Loc::getMessage('SOA_ORDER_SUC1', ['#LINK#' => $arParams['PATH_TO_PERSONAL']]) ?>
                    <? endif; ?>
                </td>
            </tr>
        </table>

        <?
        if ($arResult["ORDER"]["IS_ALLOW_PAY"] === 'Y') {
            if (!empty($arResult["PAYMENT"])) {
                foreach ($arResult["PAYMENT"] as $payment) {
                    if ($payment["PAID"] != 'Y') {
                        if (!empty($arResult['PAY_SYSTEM_LIST'])
                            && array_key_exists($payment["PAY_SYSTEM_ID"], $arResult['PAY_SYSTEM_LIST'])
                        ) {
                            $arPaySystem = $arResult['PAY_SYSTEM_LIST_BY_PAYMENT_ID'][$payment["ID"]];

                            if (empty($arPaySystem["ERROR"])) {
                                ?>
                                <br/><br/>

                                <table class="sale_order_full_table">
                                    <tr>
                                        <td class="ps_logo">
                                            <div class="pay_name"><?= Loc::getMessage("SOA_PAY") ?></div>
                                            <?= CFile::ShowImage($arPaySystem["LOGOTIP"], 100, 100, "border=0\" style=\"width:100px\"", "", false) ?>
                                            <div class="paysystem_name"><?= $arPaySystem["NAME"] ?></div>
                                            <br/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="wwwww">


                                            <? if ($arPaySystem["ACTION_FILE"] <> '' && $arPaySystem["NEW_WINDOW"] == "Y" && $arPaySystem["IS_CASH"] != "Y"): ?>
                                                <?
                                                $orderAccountNumber = urlencode(urlencode($arResult["ORDER"]["ACCOUNT_NUMBER"]));
                                                $paymentAccountNumber = $payment["ACCOUNT_NUMBER"];
                                                ?>
                                                <?
//                                                dump([$arParams["PATH_TO_PAYMENT"],$orderAccountNumber,$paymentAccountNumber]);
                                                ?>

                                                <script>
                                                    //window.open('<?//=$arParams["PATH_TO_PAYMENT"]?>//?ORDER_ID=<?//=$orderAccountNumber?>//&PAYMENT_ID=<?//=$paymentAccountNumber?>//');

                                                    BX.ready(function () {
                                                        console.log($('.btn.btn-lg.btn-success')[0]);

                                                        $('.btn.btn-lg.btn-success')[0].click();
                                                    });

                                                </script>
                                            <?= Loc::getMessage("SOA_PAY_LINK", array("#LINK#" => $arParams["PATH_TO_PAYMENT"] . "?ORDER_ID=" . $orderAccountNumber . "&PAYMENT_ID=" . $paymentAccountNumber)) ?>
                                            <? if (CSalePdf::isPdfAvailable() && $arPaySystem['IS_AFFORD_PDF']): ?>
                                            <br/>
                                                <?= Loc::getMessage("SOA_PAY_PDF", array("#LINK#" => $arParams["PATH_TO_PAYMENT"] . "?ORDER_ID=" . $orderAccountNumber . "&pdf=1&DOWNLOAD=Y")) ?>
                                            <? endif ?>
                                            <? else: ?>
                                                <?= $arPaySystem["BUFFERED_OUTPUT"] ?>
                                            <? endif ?>
                                        </td>
                                    </tr>
                                </table>

                                <?
                            } else {
                                ?>
                                <span style="color:red;"><?= Loc::getMessage("SOA_ORDER_PS_ERROR") ?></span>
                                <?
                            }
                        } else {
                            ?>
                            <span style="color:red;"><?= Loc::getMessage("SOA_ORDER_PS_ERROR") ?></span>
                            <?
                        }
                    }
                }
            }
        } else {
            ?>
            <br/><strong><?= $arParams['MESS_PAY_SYSTEM_PAYABLE_ERROR'] ?></strong>
            <?
        }
        ?>

    <? else: ?>

        <b><?= Loc::getMessage("SOA_ERROR_ORDER") ?></b>
        <br/><br/>

        <table class="sale_order_full_table">
            <tr>
                <td>
                    <?= Loc::getMessage("SOA_ERROR_ORDER_LOST", ["#ORDER_ID#" => htmlspecialcharsbx($arResult["ACCOUNT_NUMBER"])]) ?>
                    <?= Loc::getMessage("SOA_ERROR_ORDER_LOST1") ?>
                </td>
            </tr>
        </table>

    <? endif
    */
    ?>
</main>

