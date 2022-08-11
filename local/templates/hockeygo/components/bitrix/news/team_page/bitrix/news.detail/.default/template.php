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



<div class="banner_video">
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
                    <span class="player_num" data-text="<?=$arResult["PROPERTIES"]["NUMBER"]["VALUE"];?>"><?=$arResult["PROPERTIES"]["NUMBER"]["VALUE"];?></span>
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
        <div class="champ_block">
            <img src="<?=CFile::GetPath($arResult['DOSTIZH'][19][56]["PREVIEW_PICTURE"])?>" class="champ_icon" alt="">
            <div class="champ_res">
                <div class="champ_title"><?=$arResult["PROPERTIES"]["CHAMPIONSHIP"]["VALUE"];?></div>
                <div class="place"><?=$arResult["PROPERTIES"]["PLACE"]["VALUE"];?></div>
            </div>
        </div>
        <div class="champ_block">
            <img src="<?=$arResult["DISPLAY_PROPERTIES"]["ICON_T"]["FILE_VALUE"]["SRC"]?>" class="champ_icon" alt="">
            <div class="champ_res">
				<div class="champ_title"><?=$arResult["PROPERTIES"]["CHAMPIONSHIP"]["VALUE"];?></div>
                <div class="place"><?=$arResult["PROPERTIES"]["PLACE"]["VALUE"];?></div>
            </div>
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
		<?foreach($arResult["DISPLAY_PROPERTIES"]["SLIDER"]["FILE_VALUE"] as $arSlider):?>
			<div class="slider_img popup-open">
				<img src="<?=$arSlider["SRC"];?>" alt="">
			</div>
		<?endforeach;?>
    </div>
    <div class="popup-fade">
        <div class="popup">
            <a class="popup-close" href="#"><img src="<?=SITE_TEMPLATE_PATH?>/img/exit.png" alt=""></a>
            <div class="responsive slider">
				<?foreach($arResult["DISPLAY_PROPERTIES"]["SLIDER"]["FILE_VALUE"] as $arSlider):?>
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
        <div class="left_item">
            <div class="nav_arrow"><img src="<?=SITE_TEMPLATE_PATH?>/img/larrow.png" alt=""></div>
            <div class="nav_team_img"><img src="<?=SITE_TEMPLATE_PATH?>/img/team.png" alt=""></div>
            <div class="team_name">Виталий Румянцев</div>
        </div>
        <div class="center_item">
            <a href="#">все игроки</a>
        </div>
        <div class="right_item">
            <div class="team_name">Виталий Румянцев</div>
            <div class="nav_team_img"><img src="<?=SITE_TEMPLATE_PATH?>/img/team.png" alt=""></div>
            <div class="nav_arrow"><img src="<?=SITE_TEMPLATE_PATH?>/img/rarrow.png" alt=""></div>
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