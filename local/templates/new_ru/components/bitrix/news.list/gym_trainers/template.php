<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Localization\Loc;

?>
<div class="flexColumn container">
    <div class="captionWrapperTrainers">
        <h2 class="title"><?= Loc::getMessage('TRAINERS') ?></h2>
        <img class="arrowBlock" src="<?=SITE_TEMPLATE_PATH?>/assets/go-fight/css/images/arrow.png" alt="arrow" />
    </div>
    <div class="trainersList">
        <?php foreach ($arResult['ITEMS'] as $index => $item) { ?>
            <div class="trainerCard" data-trainer-id="<?= $index ?>" data-name="<?= $item['NAME'] ?>" data-type="<?= $item['SECTION_NAME'] ?>">
                <div class="trainerImageWrapper">
                    <img src="<?= $item['PREVIEW_PICTURE']['SRC'] ?>" alt="" />
                </div>
                <div class="trainerName"><?= $item['NAME'] ?></div>
                <div class="trainerInfo" style="display: none;"><?= $item['DETAIL_TEXT'] ?></div>
            </div>
        <?php } ?>
    </div>
</div>
<div id="trainerModal" class="modalWrapper">
    <div class="container">
        <div class="modalTrainerContainerWrapper">
            <img class="closeIcon" src="<?=SITE_TEMPLATE_PATH?>/assets/go-fight/css/images/close.svg"/>
            <div class="modalTrainerContainer containerModal">
                <div class="trainerAvatarWrapper">
                    <img class="modalTrainerAvatar" src="" alt=""/>
                </div>
                <div class="modalTrainerInfo">
                    <div class="modalTrainerInfoName"></div>
                    <div class="modalTrainerInfoDetails"></div>
                    <button id="signUpWorkout" class="defaultButton"><?= Loc::getMessage('SIGNUP') ?></button>
                </div>
            </div>
        </div>
    </div>
</div>
