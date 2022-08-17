<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
?>
<div class="gohockey-trainer">
    <div class="<?if($arResult["PROPERTIES"]["TEAM"]["VALUE"] == 6):?>back-go-banner<?else:?>blue-go-banner<?endif;?>">
        <div class="container">
            <div class="go-banner">
                <div class="back-logo"></div>
                <div class="go-banner__container">
                    <div class="go-banner__image"><img src="<?=$arResult["DETAIL_PICTURE"]["SRC"];?>" alt="<?=$arResult["NAME"];?>"></div>
                    <div class="go-banner__info-block">
                        <div class="go-banner__info">
                            <div class="go-banner__title"><?=$arResult["NAME"];?></div>
                            <div class="go-banner__characteristics">
                                <div class="go-banner__char-section">
                                    <?if(!empty($arResult["PROPERTIES"]["DOL"]["VALUE"])) { ?>
                                    <div class="go-banner__char-item"><span class="go-banner__key"><?=$arResult["PROPERTIES"]["DOL"]["NAME"];?></span>
                                        <div class="go-banner__meaning"><?=$arResult["PROPERTIES"]["DOL"]["VALUE"];?></div>
                                    </div>
                                    <?}?>
                                    <?if(!empty($arResult["PROPERTIES"]["CLUB"]["VALUE"])) { ?>
                                    <div class="go-banner__char-item"><span class="go-banner__key"><?=$arResult["PROPERTIES"]["CLUB"]["NAME"];?></span>
                                        <div class="go-banner__meaning"><?=$arResult["PROPERTIES"]["CLUB"]["VALUE"];?></div>
                                    </div>
                                    <?}?>
                                </div>
                                <div class="go-banner__char-section">
                                    <?if(!empty($arResult["PROPERTIES"]["DATA"]["VALUE"])) { ?>
                                    <div class="go-banner__char-item"><span class="go-banner__key"><?=$arResult["PROPERTIES"]["DATA"]["NAME"];?></span>
                                        <div class="go-banner__meaning"><?=$arResult["PROPERTIES"]["DATA"]["VALUE"];?></div>
                                    </div>
                                    <?}?>
                                    <?if(!empty($arResult["PROPERTIES"]["OBR"]["VALUE"])) { ?>
                                    <div class="go-banner__char-item"><span class="go-banner__key"><?=$arResult["PROPERTIES"]["OBR"]["NAME"];?></span>
                                        <div class="go-banner__meaning"><?=$arResult["PROPERTIES"]["OBR"]["VALUE"];?></div>
                                    </div>
                                    <?}?>
                                </div>
                                <?if(!empty($arResult["PROPERTIES"]["INST"]["VALUE"])) { ?>
                                <div class="go-banner__char-imstagram"><img src="<?=SITE_TEMPLATE_PATH?>/img/instagram-link.svg" alt="banner_instagramm">
                                    <a target="_blank" href="https://www.instagram.com/<?=$arResult["PROPERTIES"]["INST"]["VALUE"];?>"><?=$arResult["PROPERTIES"]["INST"]["VALUE"];?></a>
                                </div>
                                <?}?>
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
                    <?=$arResult['DETAIL_TEXT']?>
                </div>
            </div>
        </div>
        <div class="go-trainer__achievements achievements">
            <div class="achievements__block-title">
                <h2 class="achievements__title">Достижения</h2>
                <div class="achievements__arrow">↖</div>
            </div>
            <?foreach($arResult["DOSTIZH"][19] as $arDOSTIZH):?>

                <?
                $arFilter = Array("IBLOCK_ID"=>19, "ID"=>$arDOSTIZH["ID"]);
                $res_dostizh = CIBlockElement::GetList(Array(), $arFilter); // с помощью метода CIBlockElement::GetList вытаскиваем все значения из нужного элемента
                if ($dostizh = $res_dostizh->GetNextElement()){; // переходим к след элементу, если такой есть
                    $arDostizhProps = $dostizh->GetProperties(); // свойства элемента
                    $res_seson = CIBlockElement::GetByID($arDostizhProps["SESON"]["VALUE"]);
                    if ($seson = $res_seson->GetNext()){
                        $seasons[$seson["NAME"]][] = $arDOSTIZH;
                    }
                }
                ?>

            <?endforeach;?>
            <?foreach($seasons as $keySeason => $arDOSTIZH):?>
                <div class="achievements__season season">
                    <div class="season__data">
                        <p><?=$keySeason?></p>
                    </div>
                    <?foreach($arDOSTIZH as $arItemDOSTIZH):?>
                        <div class="season__item">
                            <div class="season__img"><img src="<?=CFile::GetPath($arItemDOSTIZH["PREVIEW_PICTURE"])?>" alt="<?=$arItemDOSTIZH["NAME"];?>"></div>
                            <div class="season__block-text">
                                <p class="season__text"><?=$arItemDOSTIZH["NAME"];?> <span> <?=$arItemDOSTIZH["PLACE"];?></span></p>
                            </div>
                        </div>
                    <?endforeach;?>
                </div>
            <?endforeach;?>
            <div class="achievements__season season">
                <div class="season__data">
                    <p>Сезон 2021/22</p>
                </div>
                <div class="season__item">
                    <div class="season__img"><img src="/local/templates/new_ru/img/cub-image.png" alt="cub-image"></div>
                    <div class="season__block-text">
                        <p class="season__text">Серебряные призеры регулярного чемпионата ЛХЛ-77<span> (дивизион
                                «Тактик»)</span></p>
                    </div>
                </div>
                <div class="season__item">
                    <div class="season__img"><img src="/local/templates/new_ru/img/cub-image.png" alt="lhl-image"></div>
                    <div class="season__block-text">
                        <p class="season__text">Чемпионы чемпионата ЛХЛ-77 <span>(дивизион «Тактик»)</span></p>
                    </div>
                </div>
                <div class="season__item">
                    <div class="season__img"><img src="/local/templates/new_ru/img/cub-image.png" alt="lhl-image"></div>
                    <div class="season__block-text">
                        <p class="season__text">Чемпионы чемпионата ЛХЛ-77 <span>(дивизион «Тактик»)</span></p>
                    </div>
                </div>
            </div>
            <div class="achievements__season season">
                <div class="season__data">
                    <p>Сезон 2021/22</p>
                </div>
                <div class="season__item">
                    <div class="season__img"><img src="/local/templates/new_ru/img/cub-image.png" alt="cub-image"></div>
                    <div class="season__block-text">
                        <p class="season__text">Серебряные призеры регулярного чемпионата ЛХЛ-77<span> (дивизион
                                «Тактик»)</span></p>
                    </div>
                </div>
                <div class="season__item">
                    <div class="season__img"><img src="/local/templates/new_ru/img/cub-image.png" alt="lhl-image"></div>
                    <div class="season__block-text">
                        <p class="season__text">Чемпионы чемпионата ЛХЛ-77 <span>(дивизион «Тактик»)</span></p>
                    </div>
                </div>
                <div class="season__item">
                    <div class="season__img"><img src="/local/templates/new_ru/img/cub-image.png" alt="lhl-image"></div>
                    <div class="season__block-text">
                        <p class="season__text">Чемпионы чемпионата ЛХЛ-77 <span>(дивизион «Тактик»)</span></p>
                    </div>
                </div>
            </div>
            <div class="achievements__season season">
                <div class="season__data">
                    <p>Сезон 2016/17</p>
                </div>
                <div class="season__item">
                    <div class="season__img"><img src="/local/templates/new_ru/img/cub-orange-image.png" alt="cub-orange-image">
                    </div>
                    <div class="season__block-text">
                        <p class="season__text">Бронзовые призеры регулярного чемпионата<span> (дивизион
                                «Тактик»)</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="back-nav_team">
            <div class="container">
                <div class="nav_team">
                <a href="#">
                    <div class="nav_items">
                            <div class="arrow_left">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/larrow.png" alt="">
                            </div>
                            <div class="nav_team_img"><img src="/upload/iblock/106/eae1bcqsrnug2swbnz3qo4px8s97dafy.png" alt="Назад"></div>
                            <div class="team_name">Виталий Румянцев</div>   
                    </div>
                    </a>
                    <a href="#" class="all_team">
                    <div class="center_item">
                        все тренера
                    </div>
                    </a>
                    <a href="#">
                    <div class="nav_items">
                            <div class="team_name">Виталий Румянцев</div>
                            <div class="nav_team_img"><img src="/upload/iblock/106/eae1bcqsrnug2swbnz3qo4px8s97dafy.png" alt="Вперед"></div>
                            <div class="arrow_left">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/rarrow.png" alt="">
                            </div>
                    </div>
                    </a>
                </div>
            </div>
        </div>
</div>
