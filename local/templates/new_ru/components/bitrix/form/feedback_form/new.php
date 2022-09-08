<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Localization\Loc;

?>
<section class="feedback">
    <div class="backgroundWrapper">
        <img class="headerBackground" src="<?=SITE_TEMPLATE_PATH?>/assets/go-fight/css/images/background_2.jpg" alt="header image"/>
    </div>
    <div class="container feedbackFormWrapper">
        <h2><?= Loc::getMessage('GOT_QUESTIONS') ?></h2>
        <form class="feedbackForm">
            <h3><?= Loc::getMessage('TELL_US') ?></h3>
            <input class="feedbackFormInput" name="name" placeholder="<?= Loc::getMessage('NAME') ?>*" required/>
            <input class="feedbackFormInput" name="lastName" placeholder="<?= Loc::getMessage('LAST_NAME') ?>*" required/>
            <input class="feedbackFormInput" type="text" name="phone" id="phone1" placeholder="<?= Loc::getMessage('PHONE') ?>*" required/>
            <input class="feedbackFormInput" name="email" placeholder="Email*" required/>
            <textarea name="comment" class="feedbackFormInput feedbackFormArea" placeholder="<?= Loc::getMessage('COMMENT') ?>"></textarea>
            <button class="defaultButton"><?= Loc::getMessage('SEND') ?></button>
        </form>
    </div>
</section>
