<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
$TEAM = $arParams['ADD_PROPERTY_TEAM'];
?>
<div class="gohockey-trainer">
    <div class="<? if ($arResult["PROPERTIES"]["TEAM"]["VALUE"] == 6): ?>back-go-banner<? else: ?>blue-go-banner<? endif; ?>">
        <div class="container">
            <div class="go-banner">
                <div class="back-logo <?= ($TEAM == 7) ? 'orange' : '' ?>"></div>
                <div class="go-banner__container">
                    <div class="go-banner__image"><img src="<?= $arResult["DETAIL_PICTURE"]["SRC"]; ?>"
                                                       alt="<?= $arResult["NAME"]; ?>"></div>
                    <div class="go-banner__info-block">
                        <div class="go-banner__info">
                            <div class="go-banner__title"><?= $arResult["NAME"]; ?></div>
                            <div class="go-banner__characteristics">
                                <div class="go-banner__char-section">
                                    <? if (!empty($arResult["PROPERTIES"]["DOL"]["VALUE"])) { ?>
                                        <div class="go-banner__char-item"><span
                                                    class="go-banner__key"><?= $arResult["PROPERTIES"]["DOL"]["NAME"]; ?></span>
                                            <div class="go-banner__meaning"><?= $arResult["PROPERTIES"]["DOL"]["VALUE"]; ?></div>
                                        </div>
                                    <? } ?>
                                    <? if (!empty($arResult["PROPERTIES"]["CLUB"]["VALUE"])) { ?>
                                        <div class="go-banner__char-item"><span
                                                    class="go-banner__key"><?= $arResult["PROPERTIES"]["CLUB"]["NAME"]; ?></span>
                                            <div class="go-banner__meaning"><?= $arResult["PROPERTIES"]["CLUB"]["VALUE"]; ?></div>
                                        </div>
                                    <? } ?>
                                </div>
                                <div class="go-banner__char-section">
                                    <? if (!empty($arResult["PROPERTIES"]["DATA"]["VALUE"])) { ?>
                                        <div class="go-banner__char-item"><span
                                                    class="go-banner__key"><?= $arResult["PROPERTIES"]["DATA"]["NAME"]; ?></span>
                                            <div class="go-banner__meaning"><?= $arResult["PROPERTIES"]["DATA"]["VALUE"]; ?></div>
                                        </div>
                                    <? } ?>
                                    <? if (!empty($arResult["PROPERTIES"]["OBR"]["VALUE"])) { ?>
                                        <div class="go-banner__char-item"><span
                                                    class="go-banner__key"><?= $arResult["PROPERTIES"]["OBR"]["NAME"]; ?></span>
                                            <div class="go-banner__meaning"><?= $arResult["PROPERTIES"]["OBR"]["VALUE"]; ?></div>
                                        </div>
                                    <? } ?>
                                </div>
                                <? if (!empty($arResult["PROPERTIES"]["INST"]["VALUE"])) { ?>
                                    <div class="go-banner__char-imstagram">
                                        <img src="<?= SITE_TEMPLATE_PATH ?><?= ($TEAM == 7) ? '/img/instagram-link_orange.svg' : '/img/instagram-link.svg' ?>"
                                             alt="banner_instagramm">
                                        <a target="_blank"
                                           href="https://www.instagram.com/<?= $arResult["PROPERTIES"]["INST"]["VALUE"]; ?>"><?= $arResult["PROPERTIES"]["INST"]["VALUE"]; ?></a>
                                    </div>
                                <? } ?>
                                <? if (!empty($arResult["PROPERTIES"]["VK"]["VALUE"])) { ?>
                                    <div class="go-banner__char-imstagram">
                                        <img src="<?= SITE_TEMPLATE_PATH ?><?= ($TEAM == 7) ? '/img/vk-link_orange.svg' : '/img/vk-link.svg' ?>"
                                             alt="banner_instagramm">
                                        <a target="_blank"
                                           href="https://vk.com/<?= $arResult["PROPERTIES"]["VK"]["VALUE"]; ?>"><?= $arResult["PROPERTIES"]["VK"]["VALUE"]; ?></a>
                                    </div>
                                <? } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="go-trainer__content">
            <div class="go-trainer__biography biography">
                <div class="biography__block-title">
                    <h2 class="biography__title">Биография</h2>
                </div>
                <div class="biography__text-block">
                    <div class="biography__text">
                        <?= $arResult['DETAIL_TEXT'] ?>
                    </div>
                </div>
            </div>
            <? if (!empty($arResult['SEAZON_ELEMENT'])): ?>
                <div class="go-trainer__achievements achievements">
                    <div class="achievements__block-title">
                        <h2 class="achievements__title">Достижения</h2>
                        <div class="achievements__arrow">↖</div>
                    </div>
                    <? // вывод достижений?>
                    <? foreach ($arResult['SEAZON_ELEMENT'] as $Seazongroup): ?>
                        <div class="achievements__season season">
                            <div class="season__data">
                                <p><?= $Seazongroup["NAME"] ?></p>
                            </div>


                            <? foreach ($Seazongroup['DOSTIJ'] as $dostij): ?>
                                <div class="season__item">
                                    <div class="season__img">
                                        <? $renderImage = CFile::ResizeImageGet($dostij["PREVIEW_PICTURE"], array('width' => 100, 'height' => 100), BX_RESIZE_IMAGE_PROPORTIONAL, true); ?>
                                        <img src="<?= $renderImage["src"] ?>" alt="<?= $dostij["NAME"] ?>">
                                    </div>
                                    <div class="season__block-text">
                                        <p class="season__text">
                                            <?= $dostij["NAME"] ?>
                                            <span> <?= $dostij["PROPERTY_DEVIZ_VALUE"] ?></span>
                                        </p>
                                    </div>
                                </div>
                            <? endforeach; ?>
                        </div>
                    <? endforeach; ?>
                </div>
            <? endif; ?>
        </div>
    </div>
    <? // вывод навигации?>
    <div class="back-nav_team">
        <div class="container">
            <div class="nav_team">
                <a class="left_item"
                   href="/teams/<? if ($TEAM == 6): ?>team-go<? elseif ($TEAM == 7): ?>team-gohockey<? endif; ?>/trainer/?ELEMENT_ID=<?= $arResult['PREV_ELEMENT']['ID'] ?>">
                    <div class="nav_items">
                        <div class="arrow_left">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/larrow.png" alt="">
                        </div>
                        <div class="nav_team_img"><img src="<?= $arResult['PREV_ELEMENT']['IMG']['SRC']; ?>"
                                                       alt="<?= $arResult['PREV_ELEMENT']['NAME']; ?>"
                                                       alt="<?= $arResult['PREV_ELEMENT']['NAME'] ?>"></div>
                        <div class="team_name"><?= $arResult['PREV_ELEMENT']['NAME'] ?></div>
                    </div>
                </a>
                <div class="center_item <?= ($TEAM == 7) ? 'orange' : '' ?>">
                    <a href="/teams/<? if ($TEAM == 6): ?>team-go<? elseif ($TEAM == 7): ?>team-gohockey<? endif; ?>/"
                       class="all_team">
                        все тренера
                    </a>
                </div>

                <a href="/teams/<? if ($TEAM == 6): ?>team-go<? elseif ($TEAM == 7): ?>team-gohockey<? endif; ?>/trainer/?ELEMENT_ID=<?= $arResult['NEXT_ELEMENT']['ID'] ?>">
                    <div class="nav_items">
                        <div class="team_name"><?= $arResult['NEXT_ELEMENT']['NAME'] ?></div>
                        <div class="nav_team_img"><img src="<?= $arResult['NEXT_ELEMENT']['IMG']['SRC'] ?>"
                                                       alt="<?= $arResult['NEXT_ELEMENT']['NAME'] ?>"></div>
                        <div class="arrow_left">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/rarrow.png" alt="">
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>


