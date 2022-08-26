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

<div class="block-with-matchs__swiper">
<?foreach($arResult['ITEMS'] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
			
	<?if($arItem["PROPERTIES"]["BTN_MATCH"]["VALUE"] == 'Трансляция'):?>
        <div class="match live">
	<?else:?>
		<div class="match">
	<?endif;?>            
					<div class="match__block" id="next-match__block">
						<div class="match__date-and-area">
							<div class="match__date">
								<?if($arItem["PROPERTIES"]["MATCHDATE"]["VALUE"]):?>
									<?echo FormatDate("d F H:i", MakeTimeStamp($arItem["PROPERTIES"]["MATCHDATE"]["VALUE"]));?>
								<?endif?>
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
                            <div class="match__button" id="match__button<?=$arItem["ID"]?>">
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

<?foreach($arResult['ITEMS'] as $arItem):?>
<?if($arItem["PROPERTIES"]["BTN_MATCH"]["VALUE"] == 'Превью матча'):?>	
<?$machID = $arItem["ID"];?>
	<script>
		$('#match__button<?=$machID?>').not('.live').on('click', function () {
			//var previewId = $(this).attr("preview-match")
			$('#preview__modal_mach_<?=$machID;?>').addClass("flex")
			$("body").addClass("overflow-no");
			$("html").addClass("overflow-no")
			return false;
		});
		$(document).mouseup(function (e) {
        var div = $(".popup__modal-block");
        //var previewId = $(".match__button").attr("preview-match")
        if (!div.is(e.target) &&
            div.has(e.target).length === 0) {
            $('#preview__modal_mach_<?=$machID;?>').removeClass("flex");
            $("body").removeClass("overflow-no")
            $("html").removeClass("overflow-no")
        }
    });
	</script>				
	<div class="popup__modal-window" id="preview__modal_mach_<?=$machID;?>">
        <div class="popup__modal-close-block">
            <div class="popup__modal-close-button"><img src="/local/templates/new_ru/img/close.png" alt="close"></div>
        </div>
        <div class="popup__modal-block">
            <div class="popup__modal">
                <div class="popup__modal-content">
                    <div class="preview__info">
                        <div class="preview__date-and-place-block info-element">
                            <div class="preview__date">
								<?if($arItem["PROPERTIES"]["MATCHDATE"]["VALUE"]):?>
									<?echo FormatDate("d F H:i", MakeTimeStamp($arItem["PROPERTIES"]["MATCHDATE"]["VALUE"]));?>
								<?endif?>,
							</div>
                            <div class="preview__place"><?=$arItem["PROPERTIES"]["MATCH_PLACE"]["VALUE"];?></div>
                        </div>
                        <div class="preview__stage info-element"><?=$arItem["PROPERTIES"]["ETAP"]["VALUE"];?></div>
                        <div class="preview__division info-element">Дивизион: <?=$arItem["PROPERTIES"]["DIVISION"]["VALUE"];?></div>
                        <div class="preview__stage info-element inviz"><?=$arItem["PROPERTIES"]["ETAP"]["VALUE"];?></div>
                    </div>
                    <div class="preview__versus">
                        <div class="preview__team" style="justify-content: flex-end;">
                            <div class="preview__team-name"><?=$arItem["PROPERTIES"]["TITLE_TEAM_1"]["VALUE"];?></div>
                            <div class="preview__team-logo"><img src="<?=CFile::GetPath($arItem["PROPERTIES"]["LOGO_1"]["VALUE"]);?>" alt="<?=$arItem["PROPERTIES"]["TITLE_TEAM_1"]["VALUE"];?>"></div>
                        </div>
                        <div class="preview__score-block">
                            <div class="preview__score">
								<?if(!empty($arItem["PROPERTIES"]["COUNT_TEAM_1"]["VALUE"]) || $arItem["PROPERTIES"]["COUNT_TEAM_1"]["VALUE"] == "0"):?>
										<?=$arItem["PROPERTIES"]["COUNT_TEAM_1"]["VALUE"];?>
								<?else:?>
										-
								<?endif;?>
							</div>
                            <div class="preview__score-separator">:</div>
                            <div class="preview__score">
								<?if(!empty($arItem["PROPERTIES"]["COUNT_TEAM_2"]["VALUE"]) || $arItem["PROPERTIES"]["COUNT_TEAM_2"]["VALUE"] == "0"):?>
										<?=$arItem["PROPERTIES"]["COUNT_TEAM_2"]["VALUE"];?>
								<?else:?>
										-
								<?endif;?>
							</div>
                        </div>
                        <div class="preview__team">
                            <div class="preview__team-logo"><img src="<?=CFile::GetPath($arItem["PROPERTIES"]["LOGO_2"]["VALUE"]);?>"
                                                                 alt="<?=$arItem["PROPERTIES"]["TITLE_TEAM_2"]["VALUE"];?>"></div>
                            <div class="preview__team-name"><?=$arItem["PROPERTIES"]["TITLE_TEAM_2"]["VALUE"];?></div>
                        </div>
                    </div>
                    <div class="matchs-history">
                        <div class="matchs-history__title">История встреч</div>
						<?
							//вывод истории встреч
							$IBLOCK_ID = 3;//ID инф. блока матчей
							$team1 = $arItem["PROPERTIES"]["TITLE_TEAM_1"]["VALUE"];
							$team2 = $arItem["PROPERTIES"]["TITLE_TEAM_2"]["VALUE"];
							//какие параметры выбираем
							$arSelect = Array(
								"ID", 
								"PROPERTY_MATCHDATE", 
								"PROPERTY_MATCH_PLACE", 
								"PROPERTY_LOGO_1", 
								"PROPERTY_LOGO_2", 
								"PROPERTY_TITLE_TEAM_1", 
								"PROPERTY_TITLE_TEAM_2", 
								"PROPERTY_COUNT_TEAM_1", 
								"PROPERTY_COUNT_TEAM_2",
								"PROPERTY_BTN_MATCH",
								"DETAIL_PAGE_URL"
							);
							//фильтр по названиям команд и статусу матча
							$arFilter = Array(
								"IBLOCK_ID"=>$IBLOCK_ID, 
								"ACTIVE"=>"Y", 
								"PROPERTY_BTN_MATCH_VALUE"=>"Обзор матча", 
								"PROPERTY_TITLE_TEAM_1"=>array($team1,$team2),
								"PROPERTY_TITLE_TEAM_2"=>array($team1,$team2)
							);
							$res = CIBlockElement::GetList(Array("property_MATCHDATE"=>"desc"), $arFilter, false, false, $arSelect);
							while($ob = $res->GetNextElement())
							{
								$arFields = $ob->GetFields();
								?>
								
								<div class="matchs-history__past-match-block">
									<div class="matchs-history__date-and-area-block">
										<div class="matchs-history__date"><?=$arFields["PROPERTY_MATCH_DATE_VALUE"]?>
										<?if($arFields["PROPERTY_MATCHDATE_VALUE"]):?>
											<?echo FormatDate("d F Y H:i", MakeTimeStamp($arFields["PROPERTY_MATCHDATE_VALUE"]));?>
										<?endif?>
										</div>
										<div class="matchs-history__area"><?=$arFields["PROPERTY_MATCH_PLACE_VALUE"]?></div>
									</div>
									<div class="matchs-history__versus-block">
										<div class="matchs-history__team">
											<div class="matchs-history__team-name"><?=$arFields["PROPERTY_TITLE_TEAM_1_VALUE"]?></div>
											<div class="matchs-history__team-logo"><img src="<?=CFile::GetPath($arFields["PROPERTY_LOGO_1_VALUE"])?>" alt="<?=$arFields["PROPERTY_TITLE_TEAM_1_VALUE"]?>"></div>
										</div>
										
										<div class="matchs-history__score-block">
											<div class="matchs-history__score"><?=$arFields["PROPERTY_COUNT_TEAM_1_VALUE"]?></div>
											<div class="matchs-history__separator">:</div>
											<div class="matchs-history__score"><?=$arFields["PROPERTY_COUNT_TEAM_2_VALUE"]?></div>
										</div>
										<div class="matchs-history__team">
											<div class="matchs-history__team-logo"><img src="<?=CFile::GetPath($arFields["PROPERTY_LOGO_2_VALUE"])?>" alt="<?=$arFields["PROPERTY_TITLE_TEAM_2_VALUE"]?>"></div>
											<div class="matchs-history__team-name"><?=$arFields["PROPERTY_TITLE_TEAM_2_VALUE"]?></div>
										</div>
									</div>
										<a class="matchs-history__button" href="<?=$arFields["DETAIL_PAGE_URL"]?>">
										<div class="matchs-history__button-txt">Обзор матча</div>
									</a>
								</div>
							<?	
							}
							?> 		
                    </div>
                </div>
            </div>
        </div>
    </div>				
<?endif;?>	
<?endforeach;?>