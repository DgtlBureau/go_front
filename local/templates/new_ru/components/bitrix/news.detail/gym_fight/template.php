<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Localization\Loc;

?>
<div class="topBackgroundHall"></div>
<div class="flexColumn container">
    <h2 class="title"><?= Loc::getMessage('OUR_GYM') ?></h2>
    <div class="hallContent">
        <div class="previewHall">
            <img class="mainImageHall" src="<?= $arResult['DETAIL_PICTURE'] ?>" alt="" />
            <div class="hallImageListWrapper">
                <div class="hallImageList">
                    <?php foreach ($arResult['PROPERTIES']['IMAGES']['LINKS'] as $index => $val) { ?>
                        <img class="hallImageItem" src="<?= $val ?>" alt="" data-slide-index="<?= $index ?>"/>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="flexColumn hallContentInfo">
            <?= $arResult['DETAIL_TEXT'] ?>
            <div class="flexColumn hallRowWrapper">
                <div class="hallRow">
                    <div class="flexColumn hallRowContent">
                        <h4><?= Loc::getMessage('ADDRESS') ?></h4>
                        <?= $arResult['PROPERTIES']['ADDRESS']['~VALUE']['TEXT'] ?? $arResult['PROPERTIES']['ADDRESS']['~VALUE'] ?>
                    </div>
                    <div class="flexColumn">
                        <h4><?= Loc::getMessage('SCHEDULE') ?></h4>
                        <?= $arResult['PROPERTIES']['SCHEDULE']['~VALUE']['TEXT'] ?? $arResult['PROPERTIES']['SCHEDULE']['~VALUE'] ?>
                    </div>
                </div>
                <div class="hallRow">
                    <div class="flexColumn">
                        <h4><?= Loc::getMessage('CONTACTS') ?></h4>
                        <?= $arResult['PROPERTIES']['CONTACTS']['~VALUE']['TEXT'] ?? $arResult['PROPERTIES']['CONTACTS']['~VALUE'] ?>
                    </div>
                    <div class="flexColumn">
                        <h4><?= Loc::getMessage('SOCIALS') ?></h4>
                        <div class="socialNetworks">
                            <?php foreach ($arResult['PROPERTIES']['SOCIALS']['VALUE'] as $index => $val) { ?>
                                <div class="socialNetworksWrapper">
                                    <a href="<?= $val ?>">
                                    <img
                                        class="<?= $arResult['PROPERTIES']['SOCIALS']['DESRIPTION'][$index] ?>"
                                        src="<?=SITE_TEMPLATE_PATH?>/assets/go-fight/css/images/<?= $arResult['PROPERTIES']['SOCIALS']['DESCRIPTION'][$index] ?>.svg"
                                        alt=""
                                    />
                                    </a>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
