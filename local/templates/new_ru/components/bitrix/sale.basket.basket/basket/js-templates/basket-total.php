<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Localization\Loc;

/**
 * @var array $arParams
 */
?>
<script>
    // document.addEventListener('DOMContentLoaded', function () {
    //     var quantityAll = document.querySelectorAll('.basket-item-amount-filed');
    //     var length = quantityAll.length;
    //     //console.log(length);
    //     var quantity = 0;
    //     for (var i = 1; i <= length; i++) {
    //         var quantityNum = Number(quantityAll[i - 1].value);
    //         //console.log(quantityNum);
    //         quantity = quantity + quantityNum;
    //     }
    //     var quantityValue = document.querySelectorAll('.info_num.quantity');
    //     // console.log(quantityValue);
    //     quantityValue[0].innerHTML = quantity;
    //
    //     var plus_btn = document.querySelectorAll('.basket-item-amount-btn-plus');
    //
    //     for (var j = 0; j <= plus_btn.length; j++) {
    //         // console.log(plus_btn[j - 1]);
    //         plus_btn[j].addEventListener("click", function () {
    //             var all_quantity_elem = document.querySelector('.info_num.quantity');
    //             var all_quantity = Number(all_quantity_elem.innerHTML) + 1;
    //             setTimeout(() => all_quantity_elem.innerHTML = all_quantity, 500);
    //         });
    //     }
    //
    //     var minus_btn = document.querySelectorAll('.basket-item-amount-btn-minus');
    //     for (var m = 0; m <= minus_btn.length; m++) {
    //         minus_btn[m].addEventListener("click", function () {
    //             var all_quantity_elem = document.querySelector('.info_num.quantity');
    //             var all_quantity = Number(all_quantity_elem.innerHTML) - 1;
    //             setTimeout(() => all_quantity_elem.innerHTML = all_quantity, 500);
    //         });
    //     }
    //
    // });
</script>

<script id="basket-total-template" type="text/html">
    <div class="basket-checkout-container" data-entity="basket-checkout-aligner">

        <div class="basket-coupon-section">
            <div class="info_name">???????????????????? ?? ????????????</div>
            <div class="count_block">
                <div class="count_name">?????????? ????????????</div>
                <div class="info_num">{{{PRICE_WITHOUT_DISCOUNT_FORMATED}}}</div>
            </div>
            <div class="count_block">
                <div class="count_name">???????????????????? ??????????????</div>
                <div class="info_num quantity">{{{COUNT_ITEMS}}}</div>
            </div>
            <?
            if ($arParams['HIDE_COUPON'] !== 'Y') {
                ?>
                <div class="basket-coupon-block-field">
                    <!-- <div class="basket-coupon-block-field-description">
						<?= Loc::getMessage('SBB_COUPON_ENTER') ?>:
					</div> -->
                    <div class="form">
                        <div class="form-group" style="position: relative;">
                            <input type="text" class="promo" id="" placeholder="????????????????"
                                   data-entity="basket-coupon-input">
                            <span class="basket-coupon-block-coupon-btn"></span>
                        </div>
                    </div>
                </div>
                <?
            }
            ?>
        </div>


        <?
        if ($arParams['HIDE_COUPON'] !== 'Y') {
            ?>
            <div class="basket-coupon-alert-section">
                <div class="basket-coupon-alert-inner">
                    {{#COUPON_LIST}}

                    <div class="basket-coupon-alert text-{{CLASS}}">
						<span class="basket-coupon-text">
							<?= Loc::getMessage('SBB_COUPON') ?> {{JS_CHECK_CODE}}
						</span>

                        <span class="close-link" data-entity="basket-coupon-delete" data-coupon="{{COUPON}}">
							<?= Loc::getMessage('SBB_DELETE') ?>
						</span>
                    </div>
                    {{/COUPON_LIST}}
                </div>
            </div>
            <?
        }
        ?>

        <div class="basket-checkout-section">
            {{#COUPON_LIST}}

            {{#DISCOUNT_PRICE_FORMATED}}
            <div class="basket-checkout-section-inner">
                <div class="basket-checkout-block">
                    <div class="count_name">
                        ????????????????: {{COUPON}}
                    </div>
                </div>
                <div class="basket-checkout-block">
                    <div class="info_num">- {{{DISCOUNT_PRICE_FORMATED}}}</div>
                </div>
            </div>
            {{/DISCOUNT_PRICE_FORMATED}}

            {{/COUPON_LIST}}


            <div class="basket-checkout-section-inner">
                <div class="basket-checkout-block basket-checkout-block-total">
                    <div class="basket-checkout-block-total-inner">
                        <div class="total_name"><?= Loc::getMessage('SBB_TOTAL') ?></div>
                        <div class="basket-checkout-block-total-description">
                            {{#WEIGHT_FORMATED}}
                            <?= Loc::getMessage('SBB_WEIGHT') ?>: {{{WEIGHT_FORMATED}}}
                            {{#SHOW_VAT}}<br>{{/SHOW_VAT}}
                            {{/WEIGHT_FORMATED}}
                            {{#SHOW_VAT}}
                            <?= Loc::getMessage('SBB_VAT') ?>: {{{VAT_SUM_FORMATED}}}
                            {{/SHOW_VAT}}
                        </div>
                    </div>
                </div>

                <div class="basket-checkout-block basket-checkout-block-total-price">
                    <div class="basket-checkout-block-total-price-inner">
                        <div class="total_num" data-entity="basket-total-price">
                            {{{PRICE_FORMATED}}}
                        </div>
                    </div>
                </div>


            </div>
            <div class="basket-checkout-block basket-checkout-block-btn">
                <button class="btn btn-lg btn-default basket-btn-checkout{{#DISABLE_CHECKOUT}} disabled{{/DISABLE_CHECKOUT}}"
                        data-entity="basket-checkout-button">
                    <?= Loc::getMessage('SBB_ORDER') ?>
                </button>
            </div>
        </div>


    </div>
</script>

