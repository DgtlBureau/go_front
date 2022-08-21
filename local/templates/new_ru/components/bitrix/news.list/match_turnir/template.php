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
<div class="go-tournament__swiper-block">
    <div class="go-tournament__swiper">
		<?foreach($arResult['ITEMS'] as $arItem):?>
			<?
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>
			<?if($arItem["PROPERTIES"]["BTN_MATCH"]["VALUE"] == 'Трансляция'):?>
				<div class="match live" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			<?else:?>
				<div class="match" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
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
									<?if(!empty($arItem["PROPERTIES"]["COUNT_TEAM_1"]["VALUE"]) || $arItem["PROPERTIES"]["COUNT_TEAM_1"]["VALUE"] == "0"):?>
										<?=$arItem["PROPERTIES"]["COUNT_TEAM_1"]["VALUE"];?>
									<?else:?>
										-
									<?endif;?>
								</div>
								<div class="match__score-between">
									:
								</div>
								<div class="match__second-team-score">
									<?if(!empty($arItem["PROPERTIES"]["COUNT_TEAM_2"]["VALUE"]) || $arItem["PROPERTIES"]["COUNT_TEAM_2"]["VALUE"] == "0"):?>
										<?=$arItem["PROPERTIES"]["COUNT_TEAM_2"]["VALUE"];?>
									<?else:?>
										-
									<?endif;?>
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
	                   <?if($arItem["PROPERTIES"]["BTN_MATCH"]["VALUE"] != 'Превью матча'):?>
                        <a class="match__button live" href="<?=$arItem["DETAIL_PAGE_URL"]?>">
						<div class="match__button-txt">
							<?=$arItem["PROPERTIES"]["BTN_MATCH"]["VALUE"];?>
						</div>
							 <?if($arItem["PROPERTIES"]["BTN_MATCH"]["VALUE"] == 'Трансляция'):?>
								<div class="match__translation">
									<img alt="translation" src="/local/templates/new_ru/img/translation.png">
								</div> 
							<?endif;?>
							<?if($arItem["PROPERTIES"]["BTN_MATCH"]["VALUE"] == 'Обзор матча'):?>
								<div class="match__button-txt-arrow">→</div>
							<?endif;?>
                        </a>
                        <?else:?>
                            <div class="match__button">
    							<div class="match__button-txt">
    								 Превью матча
    							</div>
    							<div class="match__button-txt-arrow">→</div>
    						</div>
                        <?endif;?>
					</div>
				</div>
<?endforeach;?>
	</div>
</div>