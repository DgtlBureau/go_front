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
	<?if($arItem["PROPERTIES"]["BTN_MATCH"]["VALUE"] == 'Трансляция'):?>
                <div class="match live">
	<?else:?>
				<div class="match">
    <?endif;?>            
					<div class="match__block" id="next-match__block">
						<div class="match__date-and-area">
							<div class="match__date">
								<?=$arItem["PROPERTIES"]["MATCH_DATE"]["VALUE"];?>
							</div>
							<div class="match__area">
								<?=$arItem["PROPERTIES"]["MATCH_PLACE"]["VALUE"];?>
							</div>
						</div>
						<div class="match__versus">
							<div class="match__first-team">
								<div class="match__first-team-logo">
									<img alt="<?=$arItem["PROPERTIES"]["TITLE_TEAM_1"]["VALUE"];?>" src="<?=CFile::GetPath($arItem["PROPERTIES"]["LOGO_1"]["VALUE"]);?>">
								</div>
								<div class="match__first-team-name" id="GO-first">
									<?=$arItem["PROPERTIES"]["TITLE_TEAM_1"]["VALUE"];?>
								</div>
							</div>
							<div class="match__score">
								<div class="match__first-team-score">
									-
								</div>
								<div class="match__score-between">
									:
								</div>
								<div class="match__second-team-score">
									-
								</div>
							</div>
							<div class="match__second-team">
								<div class="match__second-team-logo">
									<img alt="<?=$arItem["PROPERTIES"]["COUNT_TEAM_2"]["VALUE"];?>" src="<?=CFile::GetPath($arItem["PROPERTIES"]["LOGO_2"]["VALUE"]);?>">
								</div>
								<div class="match__second-team-name">
									<?=$arItem["PROPERTIES"]["TITLE_TEAM_2"]["VALUE"];?>
								</div>
							</div>
						</div>
	                   <?if($arItem["PROPERTIES"]["BTN_MATCH"]["VALUE"] == 'Трансляция'):?>
                        <a class="match__button live" href="/live/">
						<div class="match__button-txt">
							Трансляция
						</div>
						<div class="match__translation">
							<img alt="translation" src="/local/templates/new_ru/img/translation.png">
						</div> 
                        </a>
                        <?else:?>
                            <div class="match__button">
    							<div class="match__button-txt">
    								 Превью матча
    							</div>
    							<div class="match__button-txt-arrow">
    								→
    							</div>
    						</div>
                        <?endif;?>
					</div>
				</div>
<?endforeach;?>

<?foreach($arResult['ITEMS'] as $arItem):?>
<!-- <div class="swiper-slide"> --
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
-- </div> -->
<?endforeach;?>