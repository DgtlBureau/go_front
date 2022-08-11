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
<!-- <div class="swiper-slide"> -->
	<div class="match-item">
		<p class="match-item__time">
			<?=$arItem["PROPERTIES"]["MATCH_DATE"]["VALUE"];?>
		</p>
		<span class="match-item__location">
			<?=$arItem["PROPERTIES"]["MATCH_PLACE"]["VALUE"];?>
		</span>
		<div class="match-item__teamvs">
			<div class="match-item-teamvs">
				<div class="match-item-teamvs__team">
					<img src="<?=$arItem["DISPLAY_PROPERTIES"]["LOGO_1"]["FILE_VALUE"]["SRC"];?>" alt="">
					<p>
						<?=$arItem["PROPERTIES"]["TITLE_TEAM_1"]["VALUE"];?>
					</p>
				</div>
				<div class="match-item-teamvs__vs">
					<h3>
						<?=$arItem["PROPERTIES"]["COUNT_TEAM_1"]["VALUE"];?> : <?=$arItem["PROPERTIES"]["COUNT_TEAM_2"]["VALUE"];?>
					</h3>
				</div>
				<div class="match-item-teamvs__team">
					<img src="<?=$arItem["DISPLAY_PROPERTIES"]["LOGO_2"]["FILE_VALUE"]["SRC"];?>" alt="">
					<p>
						<?=$arItem["PROPERTIES"]["TITLE_TEAM_2"]["VALUE"];?>
					</p>
				</div>
			</div>
		</div>
		<button type="button" class="btn_primary full-width btn" name="button">
			<?if($arItem["PROPERTIES"]["BTN_MATCH"]["VALUE"] == 'Трансляция'):?>
				<?=$arItem["PROPERTIES"]["BTN_MATCH"]["VALUE"];?><span alt="" class="match_team_live"></span>
			<?else:?>
				<?=$arItem["PROPERTIES"]["BTN_MATCH"]["VALUE"];?><span alt="" class="match_team">→</span>
			<?endif;?>
		</button>
	</div>
<!-- </div> -->
<?endforeach;?>