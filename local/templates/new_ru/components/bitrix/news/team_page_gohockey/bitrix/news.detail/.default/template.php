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
//echo '<pre>'; print_r($arResult); echo '</pre>';
?>
    <style>
        .item {
            background-color: #ff4c01;
        }
        .center_item a {
            color: #ff4c01;
        }
        .center_item a:hover {
            color: #fff;
        }
        span.stat_num {
            color: #ff4c01;
            -webkit-text-stroke: 0.16em #020553;
        }
    </style>
    <div class="banner_video">
        <div class="bull_image">
            <div class="back_image_orang"></div>
        </div>
        <div class="banner_block">
            <div class="player_img">
                <img src="<?=$arResult["DETAIL_PICTURE"]["SRC"];?>" alt="<?=$arResult["NAME"];?>">
            </div>
            <div class="player_desc">
                <div class="banner_title">
                    <h1 class="h1"><?=$arResult["NAME"];?>
                    </h1>
                </div>
                <div class="banner_desc">
                    <div class="property_block">
                        <div class="banner_property">
                            <span class="pos_name"><?=$arResult["PROPERTIES"]["POSITION"]["NAME"];?></span>
                            <div class="pos_value"><?=$arResult["PROPERTIES"]["POSITION"]["VALUE"];?></div>
                        </div>
                        <div class="banner_property">
                            <span class="pos_name"><?=$arResult["PROPERTIES"]["KHVAT"]["NAME"];?></span>
                            <div class="pos_value"><?=$arResult["PROPERTIES"]["KHVAT"]["VALUE"];?></div>
                        </div>
                        <div class="banner_property">
                            <span class="pos_name"><?=$arResult["PROPERTIES"]["QUALIFICATION"]["NAME"];?></span>
                            <div class="pos_value"><?=$arResult["PROPERTIES"]["QUALIFICATION"]["VALUE"];?></div>
                        </div>
                    </div>
                    <div class="property_block">
                        <div class="banner_property">
                            <span class="pos_name"><?=$arResult["PROPERTIES"]["HEIGHT"]["NAME"];?></span>
                            <div class="pos_value"><?=$arResult["PROPERTIES"]["HEIGHT"]["VALUE"];?></div>
                        </div>
                        <div class="banner_property">
                            <span class="pos_name"><?=$arResult["PROPERTIES"]["DATE"]["NAME"];?></span>
                            <div class="pos_value"><?=$arResult["PROPERTIES"]["DATE"]["VALUE"];?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="achiev_block">
        <div class="stat_title">
            <h1 class="stat_h1">Статистика</h1>
            <div class="arrow">
                <img src="<?=SITE_TEMPLATE_PATH?>/img/arrow.png" alt="">
            </div>
        </div>
        <div class="numbers_block">
            <div class="number_items">
                <div class="item">
                    <div class="text">Игры</div>
                    <span class="stat_num" data-text="<?=$arResult["PROPERTIES"]["GAME"]["VALUE"];?>"><?=$arResult["PROPERTIES"]["GAME"]["VALUE"];?></span>
                </div>
                <div class="item">
                    <div class="text">голы</div>
                    <span class="stat_num" data-text="<?=$arResult["PROPERTIES"]["GOLE"]["VALUE"];?>"><?=$arResult["PROPERTIES"]["GOLE"]["VALUE"];?></span>
                </div>
                <div class="item">
                    <div class="text">ассисты</div>
                    <span class="stat_num" data-text="<?=$arResult["PROPERTIES"]["ASSIST"]["VALUE"];?>"><?=$arResult["PROPERTIES"]["ASSIST"]["VALUE"];?></span>
                </div>
                <div class="item">
                    <div class="text">штрафные минуты</div>
                    <span class="stat_num" data-text="<?=$arResult["PROPERTIES"]["SHTRAF"]["VALUE"];?>"><?=$arResult["PROPERTIES"]["SHTRAF"]["VALUE"];?></span>
                </div>
            </div>
        </div>
        <div class="stat_title">
            <h1 class="stat_h1">Достижения</h1>
        </div>
        <div class="progress_block">
            <div class="prog_text">
                <?=$arResult['DETAIL_TEXT']?>
            </div>

            <div>
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
                    <h4><?=$keySeason?></h4><br>
                    <?foreach($arDOSTIZH as $arItemDOSTIZH):?>
                        <div class="champ_block" style="width: 100%;">
                            <img src="<?=CFile::GetPath($arItemDOSTIZH["PREVIEW_PICTURE"])?>" class="champ_icon" alt="">
                            <div class="champ_res">
                                <div class="champ_title"><?=$arItemDOSTIZH["NAME"];?></div>
                                <div class="place"><?=$arItemDOSTIZH["PLACE"];?></div>
                            </div>
                        </div>
                    <?endforeach;?>
                <?endforeach;?>

            </div>
        </div>
    </div>
    <div class="photo_block">
        <div class="stat_title">
            <h1 class="stat_h1">Фото</h1>
        </div>
        <div class="regular slider">
            <?foreach($arResult["DISPLAY_PROPERTIES"]["SLIDER"]["FILE_VALUE"] as $arSlider):?>
                <div class="slider_img popup-open">
                    <img src="<?=$arSlider["SRC"];?>" alt="">
                </div>
            <?endforeach;?>
        </div>
        <div class="variable slider">
            <?foreach($arResult["DISPLAY_PROPERTIES"]["GALARY"]["FILE_VALUE"] as $arSlider):?>
                <div class="slider_img popup-open">
                    <img src="<?=$arSlider["SRC"];?>" alt="">
                </div>
            <?endforeach;?>
        </div>
        <div class="popup-fade">
            <div class="popup">
                <a class="popup-close" href="#"><img src="<?=SITE_TEMPLATE_PATH?>/img/exit.png" alt=""></a>
                <div class="responsive slider">
                    <?foreach($arResult["DISPLAY_PROPERTIES"]["GALARY"]["FILE_VALUE"] as $arSlider):?>
                        <div class="popup_img">
                            <img src="<?=$arSlider["SRC"];?>" alt="">
                        </div>
                    <?endforeach;?>
                </div>
            </div>
        </div>
    </div>

    <div class="nav_team">
        <div class="nav_items">
            <?

            $arFilter = Array(
                "IBLOCK_ID"=>$arParams['IBLOCK_ID'],
                "!=ID"=>$arParams['ID'],
            );

            $res = CIBlockElement::GetList(Array("ID"=>"ASC"), $arFilter,false, false,  Array("ID", "PREVIEW_PICTURE", "CODE", "NAME"));
            if ($obRes = $res->GetNextElement()){
                $ar_fields = $obRes->GetFields();
                $pr_pic = CFile::GetFileArray($ar_fields["PREVIEW_PICTURE"]);

                ?>

                <a class="left_item" href="/team-page-gohockey/<?=$ar_fields['CODE']?>/">
                    <div class="nav_arrow"><img src="<?=SITE_TEMPLATE_PATH?>/img/larrow.png" alt="<?=$ar_fields['NAME']?>"></div>
                    <div class="nav_team_img"><img src="<?=$pr_pic["SRC"];?>" alt="<?=$ar_fields['NAME']?>"></div>
                    <div class="team_name"><?=$ar_fields['NAME']?></div>
                </a>

            <? }?>
            <div class="center_item">
                <a href="/teams/team-gohockey/">все игроки</a>
            </div>

            <?
            $res = CIBlockElement::GetList(Array("ID"=>"DESC"), $arFilter, false, false,  Array("ID", "PREVIEW_PICTURE", "CODE", "NAME"));
            if ($ar_fields = $res->GetNext()) {
                $pr_pic = CFile::GetFileArray($ar_fields["PREVIEW_PICTURE"]);
                ?>

                <a class="right_item" href="/team-page-gohockey/<?=$ar_fields['CODE']?>/">
                    <div class="team_name"><?=$ar_fields['NAME']?></div>
                    <div class="nav_team_img"><img src="<?=$pr_pic["SRC"];?>" alt="<?=$ar_fields['NAME']?>"></div>
                    <div class="nav_arrow"><img src="<?=SITE_TEMPLATE_PATH?>/img/rarrow.png" alt=""></div>
                </a>

            <? } ?>

        </div>
    </div>


    <style>
        .go-team__info {
            display: none;
        }

        .go-team__info-nav {
            display: none;
        }

        p {
            display: none;
        }
        .go-team__line-up {
            padding: 0;
        }
    </style>

<?
if( $USER->GetID() == 1 )
{
    echo '<pre>';
    print_r($arResult);
    echo '</pre>';
}
?>