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

$APPLICATION->SetTitle("GO");

$this->addExternalCss("/team-page/style.css");
$this->addExternalJS("/team-page/index.js");
?>
<div class="back-go-banner">
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
                                <div class="go-banner__char-item"><span class="go-banner__key"><?=$arResult["PROPERTIES"]["POSITION"]["NAME"];?></span>
                                    <div class="go-banner__meaning"><?=$arResult["PROPERTIES"]["POSITION"]["VALUE"];?></div>
                                </div>
                                <div class="go-banner__char-item"><span class="go-banner__key"><?=$arResult["PROPERTIES"]["KHVAT"]["NAME"];?></span>
                                    <div class="go-banner__meaning"><?=$arResult["PROPERTIES"]["KHVAT"]["VALUE"];?></div>
                                </div>
                            </div>
                            <div class="go-banner__char-section">
                                <div class="go-banner__char-item"><span class="go-banner__key"><?=$arResult["PROPERTIES"]["QUALIFICATION"]["NAME"];?></span>
                                    <div class="go-banner__meaning"><?=$arResult["PROPERTIES"]["QUALIFICATION"]["VALUE"];?></div>
                                </div>
                                <div class="go-banner__char-item"><span class="go-banner__key"><?=$arResult["PROPERTIES"]["POSITION"]["NAME"];?></span>
                                    <div class="go-banner__meaning"><?=$arResult["PROPERTIES"]["KHVAT"]["VALUE"];?></div>
                                </div>
                            </div>

                            <div class="go-banner__char-imstagram"><img src="<?=SITE_TEMPLATE_PATH?>/img/instagram-link.svg"
                                                                        alt="banner_instagramm"><a target="_blank" href="https://www.instagram.com/<?=$arResult["PROPERTIES"]["INST"]["VALUE"];?>"><?=$arResult["PROPERTIES"]["INST"]["VALUE"];?></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--
<div class="banner_video" style="display:none;">
    <div class="bull_image">
        <div class="back_image"></div>
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
                <div class="property_block">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/instagram-link.svg" class="property_img_inst">
                    <a href="//instagram.com/<?=$arResult["PROPERTIES"]["INST"]["VALUE"];?>" target="_blank" class="property_a_inst"><?=$arResult["PROPERTIES"]["INST"]["VALUE"];?></a>
                </div>
            </div>
        </div>
    </div>
</div>
-->
<div class="container">
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

        <div class="achievements-block">
            <div class="achievements-block__text-block">
                <div class="achievements-block__text">
                    <?=$arResult['DETAIL_TEXT']?>
                </div>
            </div>
            <div class="achievements-block__achievements">
                <?foreach($arResult['DOSTIZH']['SEASONS'] as $keySeason => $arDOSTIZH):?>
                <!--  <h4><?=$keySeason?></h4><br>--->
                    <?foreach($arDOSTIZH as $arItemDOSTIZH):?>
                        <div class="achievements-block__item">
                            <div class="achievements-block__item-image"><img src="<?=CFile::GetPath($arItemDOSTIZH["PROPERTY_IMG_VALUE"])?>" alt="<?=$arItemDOSTIZH["NAME"];?> - <?=$arItemDOSTIZH["PLACE"];?>"></div>
                            <div class="achievements-block__item-text-block">
                                <p class="achievements-block__item-text">
                                    <?=$arItemDOSTIZH["NAME"];?>
                                    <br>
                                    <span>
                                        <?=$arItemDOSTIZH["PLACE"]["VALUE"];?>
                                    </span>
                                </p>
                            </div>
                        </div>
                    <?endforeach;?>
                <?endforeach;?>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="photo_block">
        <div class="stat_title">
            <h1 class="stat_h1">Фото</h1>
        </div>
        <div class="variable-block">
            <div class="variable">
                <?foreach($arResult["DISPLAY_PROPERTIES"]["GALARY"]["FILE_VALUE"] as $arSlider):?>
                <div class="slider_img popup-open">
                    <img src="<?=$arSlider["SRC"];?>" alt="слайд">
                </div>
                <?endforeach;?>
            </div>
        </div>
        <!--
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
        -->
        <div class="popup-fade">
            <div class="popup">
                <a class="popup-close" href="#"><img src="<?=SITE_TEMPLATE_PATH?>/img/exit.png" alt="закрыть"></a>
                <div class="popup-img">

                </div>
            </div>		
        </div>
    </div>
</div>
<div class="back-nav_items">
    <div class="container">
        <div class="nav_team">
            <div class="nav_items">
                    <a class="left_item" href="/team-page/<?=$arResult['PREV_ELEMENT']['CODE']?>/">
                        <div class="nav_arrow"><img src="<?=SITE_TEMPLATE_PATH?>/img/larrow.png" alt="назад"></div>
                        <div class="nav_team_img"><img src="<?=$arResult['PREV_ELEMENT']['IMG']['SRC'];?>" alt="<?=$arResult['PREV_ELEMENT']['NAME'];?>"></div>
                        <div class="team_name"><?=$arResult['PREV_ELEMENT']['NAME']?></div>
                    </a>
                <div class="center_item">
                    <a href="/teams/team-go/">все игроки</a>
                </div>
                    <a class="right_item" href="/team-page/<?=$arResult['NEXT_ELEMENT']['CODE']?>/">
                        <div class="team_name"><?=$arResult['NEXT_ELEMENT']['NAME']?></div>
                        <div class="nav_team_img"><img src="<?=$arResult['NEXT_ELEMENT']['IMG']['SRC']?>" alt="<?=$arResult['NEXT_ELEMENT']['NAME']?>"></div>
                        <div class="nav_arrow"><img src="<?=SITE_TEMPLATE_PATH?>/img/rarrow.png" alt="дальше"></div>
                    </a>
            </div>
        </div>
    </div>
</div>


<style>
	.go-team__info {
    	display: none;
	}

	.go-team__info-nav {
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