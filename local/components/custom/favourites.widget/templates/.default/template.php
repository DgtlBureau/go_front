<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

?>
<a class="favorites-image <?= empty($arResult['FAVORITES']) ? 'hide' : '' ?>"
   href="<?= $arParams['PATH_TO_FAVORITES'] ?>" onclick="javascript:location.href='<?= $arParams['PATH_TO_FAVORITES'] ?>'">
    <img class="favorites-icon" src="<?= SITE_TEMPLATE_PATH ?>/img/black_heart.svg"
         alt="black_heart">
    <img class="basket-ellipse" src="<?= SITE_TEMPLATE_PATH ?>/img/black_ellipse.svg" alt="black_ellipse">
    <div class="basket-ellipse__txt"><?= count($arResult['FAVORITES']) ?></div>

</a>
