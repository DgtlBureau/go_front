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
<div class="back-go-banner">
    <div class="container">
        <div class="go-banner">
            <div class="back-logo <?= ($TEAM == 7) ? 'orange' : '' ?>"></div>
            <div class="go-banner__container">
                <div class="go-banner__image">
                    <? $renderImage = CFile::ResizeImageGet($arResult["DETAIL_PICTURE"], array('width' => 435, 'height' => 490), BX_RESIZE_IMAGE_PROPORTIONAL, true); ?>
                    <img src="<?= $renderImage["src"] ?>" alt="<?= $arResult["NAME"]; ?>">
                </div>
                <div class="go-banner__info-block">
                    <div class="go-banner__info">
                        <div class="go-banner__title"><?= $arResult["NAME"]; ?>
                            <? // Номер игрока ?>
                            <? if (!empty($arResult["PROPERTIES"]["NUMBER"]["VALUE"])): ?>
                                <div class="go-banner-number_players <?= ($TEAM == 7) ? 'orange' : '' ?>"><span
                                            data-text="<?= $arResult["PROPERTIES"]["NUMBER"]["VALUE"]; ?>"><?= $arResult["PROPERTIES"]["NUMBER"]["VALUE"]; ?></span>
                                </div>
                            <? endif; ?>
                        </div>
                        <? //Параметры игрока ?>
                        <div class="go-banner__characteristics">
                            <div class="go-banner__char-section">
                                <? if (!empty($arResult["PROPERTIES"]["POSITION"]["VALUE"])) { ?>
                                    <div class="go-banner__char-item"><span
                                                class="go-banner__key"><?= $arResult["PROPERTIES"]["POSITION"]["NAME"]; ?></span>
                                        <div class="go-banner__meaning"><?= $arResult["PROPERTIES"]["POSITION"]["VALUE"]; ?></div>
                                    </div>
                                <? } ?>
                                <? if (!empty($arResult["PROPERTIES"]["KHVAT"]["VALUE"])) { ?>
                                    <div class="go-banner__char-item"><span
                                                class="go-banner__key"><?= $arResult["PROPERTIES"]["KHVAT"]["NAME"]; ?></span>
                                        <div class="go-banner__meaning"><?= $arResult["PROPERTIES"]["KHVAT"]["VALUE"]; ?></div>
                                    </div>
                                <? } ?>
                                <? if (!empty($arResult["PROPERTIES"]["QUALIFICATION"]["VALUE"])) { ?>
                                    <div class="go-banner__char-item"><span
                                                class="go-banner__key"><?= $arResult["PROPERTIES"]["QUALIFICATION"]["NAME"]; ?></span>
                                        <div class="go-banner__meaning"><?= $arResult["PROPERTIES"]["QUALIFICATION"]["VALUE"]; ?></div>
                                    </div>
                                <? } ?>
                            </div>
                            <div class="go-banner__char-section">
                                <? if (!empty($arResult["PROPERTIES"]["HEIGHT"]["VALUE"])) { ?>
                                    <div class="go-banner__char-item"><span
                                                class="go-banner__key"><?= $arResult["PROPERTIES"]["HEIGHT"]["NAME"]; ?></span>
                                        <div class="go-banner__meaning"><?= $arResult["PROPERTIES"]["HEIGHT"]["VALUE"]; ?></div>
                                    </div>
                                <? } ?>
                                <? if (!empty($arResult["PROPERTIES"]["DATE"]["VALUE"])) { ?>
                                    <div class="go-banner__char-item"><span
                                                class="go-banner__key"><?= $arResult["PROPERTIES"]["DATE"]["NAME"]; ?></span>
                                        <div class="go-banner__meaning"><?= $arResult["PROPERTIES"]["DATE"]["VALUE"]; ?></div>
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
    <div class="achiev_block">
        <div class="stat_title">
            <h1 class="stat_h1">Статистика</h1>
            <div class="arrow">
                <img src="<?= SITE_TEMPLATE_PATH ?>/img/arrow.png" alt="">
            </div>
        </div>


        <div class="numbers_block">
            <div class="number_items">
                <div class="item <?= ($TEAM == 7) ? 'orange' : '' ?>">
                    <div class="text">Игры</div>
                    <span class="stat_num"
                          data-text="<?= $arResult["PROPERTIES"]["GAME"]["VALUE"]; ?>"><?= $arResult["PROPERTIES"]["GAME"]["VALUE"]; ?></span>
                </div>
                <div class="item <?= ($TEAM == 7) ? 'orange' : '' ?>">
                    <div class="text">голы</div>
                    <span class="stat_num"
                          data-text="<?= $arResult["PROPERTIES"]["GOLE"]["VALUE"]; ?>"><?= $arResult["PROPERTIES"]["GOLE"]["VALUE"]; ?></span>
                </div>
                <div class="item <?= ($TEAM == 7) ? 'orange' : '' ?>">
                    <div class="text">ассисты</div>
                    <span class="stat_num"
                          data-text="<?= $arResult["PROPERTIES"]["ASSIST"]["VALUE"]; ?>"><?= $arResult["PROPERTIES"]["ASSIST"]["VALUE"]; ?></span>
                </div>
                <div class="item <?= ($TEAM == 7) ? 'orange' : '' ?>">
                    <div class="text">штрафные минуты</div>
                    <span class="stat_num"
                          data-text="<?= $arResult["PROPERTIES"]["SHTRAF"]["VALUE"]; ?>"><?= $arResult["PROPERTIES"]["SHTRAF"]["VALUE"]; ?></span>
                </div>
            </div>
        </div>

        <? if (!empty($arResult['DETAIL_TEXT']) || !empty($arResult['DOSTIZH']['SEASONS'])) { ?>
            <div class="stat_title">
                <h1 class="stat_h1">Достижения</h1>
            </div>
            <div class="achievements-block">
                <div class="achievements-block__text-block">
                    <div class="achievements-block__text">
                        <?= $arResult['DETAIL_TEXT'] ?>
                    </div>
                </div>
                <? // Достижения должны выводится по 2 в строчку?>
                <div class="achievements-block__achievements">
                    <? foreach ($arResult['DOSTIZH']['SEASONS'] as $keySeason => $arDOSTIZH): ?>
                        <? foreach ($arDOSTIZH as $arItemDOSTIZH): ?>
                            <div class="achievements-block__item">
                                <div class="achievements-block__item-image"><img
                                            src="<?= CFile::GetPath($arItemDOSTIZH["PROPERTY_IMG_VALUE"]) ?>"
                                            alt="<?= $arItemDOSTIZH["NAME"]; ?> - <?= $arItemDOSTIZH["PLACE"]; ?>">
                                </div>
                                <div class="achievements-block__item-text-block">
                                    <p class="achievements-block__item-text">
                                        <?= $arItemDOSTIZH["NAME"]; ?>
                                        <br>
                                        <span>
                                        <?= $arItemDOSTIZH["PLACE"]["VALUE"]; ?>
                                    </span>
                                    </p>
                                </div>
                            </div>
                        <? endforeach; ?>
                    <? endforeach; ?>
                </div>
            </div>
        <? } ?>
    </div>
</div>
<? if (!empty($arResult["DISPLAY_PROPERTIES"]["GALARY"]["FILE_VALUE"])) { ?>
    <div class="container">
        <div class="photo_block">
            <div class="stat_title">
                <h1 class="stat_h1">Фото</h1>
            </div>
            <div class="variable-block">
                <div class="variable">
                    <? foreach ($arResult["DISPLAY_PROPERTIES"]["GALARY"]["FILE_VALUE"] as $arSlider): ?>
                        <? //$renderSlider = CFile::ResizeImageGet($arSlider, array('width'=>424, 'height'=>300), BX_RESIZE_IMAGE_EXACT, true);?>
                        <div class="slider_img popup-open">
                            <img src="<?= $arSlider["SRC"]; ?>" alt="слайд">
                        </div>
                    <? endforeach; ?>
                </div>
            </div>
            <div class="popup-fade">
                <div class="popup">
                    <a class="popup-close" href="#"><img src="<?= SITE_TEMPLATE_PATH ?>/img/exit.png" alt="закрыть"></a>
                    <div class="popup-img" style="text-align:center;">

                    </div>
                </div>
            </div>
        </div>
    </div>
<? } ?>
<div class="back-nav_items">
    <div class="container">
        <div class="nav_team">
            <div class="nav_items">
                <a class="left_item"
                   href="/teams/<? if ($TEAM == 6): ?>team-go<? elseif ($TEAM == 7): ?>team-gohockey<? endif; ?>/players/?ELEMENT_ID=<?= $arResult['PREV_ELEMENT']['ID'] ?>">
                    <div class="nav_arrow"><img src="<?= SITE_TEMPLATE_PATH ?>/img/larrow.png" alt="назад"></div>
                    <div class="nav_team_img"><img src="<?= $arResult['PREV_ELEMENT']['IMG']['SRC']; ?>"
                                                   alt="<?= $arResult['PREV_ELEMENT']['NAME']; ?>"></div>
                    <div class="team_name"><?= $arResult['PREV_ELEMENT']['NAME'] ?></div>
                </a>
                <div class="center_item <?= ($TEAM == 7) ? 'orange' : '' ?>">
                    <a href="/teams/<? if ($TEAM == 6): ?>team-go<? elseif ($TEAM == 7): ?>team-gohockey<? endif; ?>/">все
                        игроки</a>
                </div>
                <a class="right_item"
                   href="/teams/<? if ($TEAM == 6): ?>team-go<? elseif ($TEAM == 7): ?>team-gohockey<? endif; ?>/players/?ELEMENT_ID=<?= $arResult['NEXT_ELEMENT']['ID'] ?>">
                    <div class="team_name"><?= $arResult['NEXT_ELEMENT']['NAME'] ?></div>
                    <div class="nav_team_img"><img src="<?= $arResult['NEXT_ELEMENT']['IMG']['SRC'] ?>"
                                                   alt="<?= $arResult['NEXT_ELEMENT']['NAME'] ?>"></div>
                    <div class="nav_arrow"><img src="<?= SITE_TEMPLATE_PATH ?>/img/rarrow.png" alt="дальше"></div>
                </a>
            </div>
        </div>
    </div>
</div>