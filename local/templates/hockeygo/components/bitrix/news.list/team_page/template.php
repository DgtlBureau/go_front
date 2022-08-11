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


<?foreach($arResult['ITEMS'] as $arItem):?>
<div class="banner_video">
    <div class="bull_image<?=$arItem["PROPERTIES"]["ORANGE"]["VALUE"];?>">
        <div class="back_image<?=$arItem["PROPERTIES"]["ORANGE"]["VALUE"];?>"></div>
    </div>
    <div class="banner_block">
        <div class="player_img">
            <img src="<?=$arItem["DISPLAY_PROPERTIES"]["GAMER"]["FILE_VALUE"]["SRC"];?>" alt="<?=$arItem["NAME"];?>">
        </div>
        <div class="player_desc">
            <div class="banner_title">
                <h1 class="h1"><?=$arItem["NAME"];?>
                    <span class="player_num<?=$arItem["PROPERTIES"]["ORANGE"]["VALUE"];?>" data-text="<?=$arItem["PROPERTIES"]["GAMES"]["VALUE"];?>"><?=$arItem["PROPERTIES"]["GAMES"]["VALUE"];?></span>
                </h1>
            </div>
            <div class="banner_desc">
                <div class="property_block">
                    <div class="banner_property">
                        <span class="pos_name"><?=$arItem["PROPERTIES"]["POSITION"]["NAME"];?></span>
                        <div class="pos_value"><?=$arItem["PROPERTIES"]["POSITION"]["VALUE"];?></div>
                    </div>
                    <div class="banner_property">
                        <span class="pos_name"><?=$arItem["PROPERTIES"]["GRIP"]["NAME"];?></span>
                        <div class="pos_value"><?=$arItem["PROPERTIES"]["GRIP"]["VALUE"];?></div>
                    </div>
                    <div class="banner_property">
                        <span class="pos_name"><?=$arItem["PROPERTIES"]["QUALIFICATION"]["NAME"];?></span>
                        <div class="pos_value"><?=$arItem["PROPERTIES"]["QUALIFICATION"]["VALUE"];?></div>
                    </div>
                </div>
                <div class="property_block">
                    <div class="banner_property">
                        <span class="pos_name"><?=$arItem["PROPERTIES"]["HEIGHT"]["NAME"];?></span>
                        <div class="pos_value"><?=$arItem["PROPERTIES"]["HEIGHT"]["VALUE"];?></div>
                    </div>
                    <div class="banner_property">
                        <span class="pos_name"><?=$arItem["PROPERTIES"]["DATE_OF_BIRTH"]["NAME"];?></span>
                        <div class="pos_value"><?=$arItem["PROPERTIES"]["DATE_OF_BIRTH"]["VALUE"];?></div>
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
            <img src="img/arrow.png" alt="">
        </div>
    </div>
    <div class="numbers_block">
        <div class="number_items">
            <div class="item<?=$arItem["PROPERTIES"]["ORANGE"]["VALUE"];?>">
                <div class="text">Игры</div>
                <span class="stat_num<?=$arItem["PROPERTIES"]["ORANGE"]["VALUE"];?>" data-text="<?=$arItem["PROPERTIES"]["GAMES"]["VALUE"];?>"><?=$arItem["PROPERTIES"]["GAMES"]["VALUE"];?></span>
            </div>
            <div class="item<?=$arItem["PROPERTIES"]["ORANGE"]["VALUE"];?>">
                <div class="text">голы</div>
                <span class="stat_num<?=$arItem["PROPERTIES"]["ORANGE"]["VALUE"];?>" data-text="<?=$arItem["PROPERTIES"]["GOALS"]["VALUE"];?>"><?=$arItem["PROPERTIES"]["GOALS"]["VALUE"];?></span>
            </div>
            <div class="item<?=$arItem["PROPERTIES"]["ORANGE"]["VALUE"];?>">
                <div class="text">ассисты</div>
                <span class="stat_num<?=$arItem["PROPERTIES"]["ORANGE"]["VALUE"];?>" data-text="<?=$arItem["PROPERTIES"]["ASSISTS"]["VALUE"];?>"><?=$arItem["PROPERTIES"]["ASSISTS"]["VALUE"];?></span>
            </div>
            <div class="item<?=$arItem["PROPERTIES"]["ORANGE"]["VALUE"];?>">
                <div class="text">штрафные минуты</div>
                <span class="stat_num<?=$arItem["PROPERTIES"]["ORANGE"]["VALUE"];?>" data-text="<?=$arItem["PROPERTIES"]["PENALTY_MINUTES"]["VALUE"];?>"><?=$arItem["PROPERTIES"]["PENALTY_MINUTES"]["VALUE"];?></span>
            </div>
        </div>
    </div> 
    <div class="stat_title">
        <h1 class="stat_h1">Достижения</h1>
    </div>
    <div class="progress_block">
        <p class="prog_text">
		<?=$arItem["PROPERTIES"]["DESCRIPTION"]["VALUE"]["TEXT"];?>
        </p>
        <div class="champ_block">
            <img src="<?=$arItem["DISPLAY_PROPERTIES"]["ICON"]["FILE_VALUE"]["SRC"]?>" class="champ_icon" alt="">
            <div class="champ_res">
                <div class="champ_title"><?=$arItem["PROPERTIES"]["CHAMPIONSHIP"]["VALUE"];?></div>
                <div class="place"><?=$arItem["PROPERTIES"]["PLACE"]["VALUE"];?></div>
            </div>
        </div>
        <div class="champ_block">
            <img src="<?=$arItem["DISPLAY_PROPERTIES"]["ICON_T"]["FILE_VALUE"]["SRC"]?>" class="champ_icon" alt="">
            <div class="champ_res">
				<div class="champ_title"><?=$arItem["PROPERTIES"]["CHAMPIONSHIP"]["VALUE"];?></div>
                <div class="place"><?=$arItem["PROPERTIES"]["PLACE"]["VALUE"];?></div>
            </div>
        </div>
    </div>
</div>
<div class="photo_block">
    <div class="stat_title">
        <h1 class="stat_h1">Фото</h1>
    </div>
    <div class="regular slider">
		<?foreach($arItem["DISPLAY_PROPERTIES"]["SLIDER"]["FILE_VALUE"] as $arSlider):?>
			<div class="slider_img popup-open">
				<img src="<?=$arSlider["SRC"];?>" alt="">
			</div>
		<?endforeach;?>
    </div>
    <div class="variable slider">
		<?foreach($arItem["DISPLAY_PROPERTIES"]["SLIDER"]["FILE_VALUE"] as $arSlider):?>
			<div class="slider_img popup-open">
				<img src="<?=$arSlider["SRC"];?>" alt="">
			</div>
		<?endforeach;?>
    </div>
    <div class="popup-fade">
        <div class="popup">
            <a class="popup-close" href="#"><img src="<?=SITE_TEMPLATE_PATH?>/img/exit.png" alt=""></a>
            <div class="responsive slider">
				<?foreach($arItem["DISPLAY_PROPERTIES"]["SLIDER"]["FILE_VALUE"] as $arSlider):?>
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
<?endforeach;?>

<?

	// if( $USER->GetID() == 1 )
	// {
	// 	echo '<pre>';
	// 	print_r($arResult);
	// 	echo '</pre>';
	// }



?>