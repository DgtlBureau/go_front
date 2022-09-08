<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Localization\Loc;

?>
<div class="flexColumn container">
    <div class="captionWrapperSubscriptions">
        <h2 class="title"><?= Loc::getMessage('ABONEMENTS') ?></h2>
        <img class="arrowBlock" src="<?= SITE_TEMPLATE_PATH ?>/assets/go-fight/css/images/arrow.png" alt="arrow">
    </div>
    <div class="subscriptionsList">
        <?php foreach ($arResult['ITEMS'] as $item) { ?>
            <div class="subscriptionsItem" data-preview="<?= $item['PREVIEW_PICTURE']['SRC'] ?>" data-id="<?= $item['ID'] ?>" data-name="<?= $item['NAME'] ?>">
                <h3><?= $item['DISPLAY_NAME'] ?></h3>
                <h4><?= Loc::getMessage('INCLUDES') ?></h4>
                <?php foreach ($item['PROPERTIES']['OPTIONS']['VALUE'] as $option) { ?>
                    <span class="subscriptionsItemInclude"><?= $option ?></span>
                <?php } ?>
                <span class="priceSubscription"><?= $item['PRICES']['BASE']['PRINT_VALUE'] ?></span>
                <button class="defaultButton subscriptionsButton"><?= Loc::getMessage('BUY') ?></button>
            </div>
        <?php } ?>
    </div>
</div>
<div id="selectSubscriptionModal" class="modalWrapper">
    <div class="container">
        <img class="closeIcon" src="<?=SITE_TEMPLATE_PATH?>/assets/go-fight/css/images/close.svg"/>
        <div class="modalSelectSubscriptionContainer containerModal">
            <div class="modalSelectSubscriptionHeader">
                <span><?= Loc::getMessage('MODAL_CHOICE') ?></span>
                <img class="closeIconContainer" src="<?=SITE_TEMPLATE_PATH?>/assets/go-fight/css/images/close.svg"/>
            </div>
            <div class="modalSelectSubscriptionContent">
                <img class="subscriptionModalImage" src="" />
                <span class="subscriptionModalDescription"></span>
                <span class="subscriptionModalPrice"></span>
            </div>
            <div class="buttonSectionSubscriptionModal">
                <button id="buttonSectionSubscriptionModalClose" class="alternativeButton"><?= Loc::getMessage('MODAL_ANOTHER') ?></button>
                <button id="buttonSectionSubscriptionModalBuy" class="defaultButton"><?= Loc::getMessage('MODAL_BUY') ?></button>
            </div>
        </div>
    </div>
</div>
