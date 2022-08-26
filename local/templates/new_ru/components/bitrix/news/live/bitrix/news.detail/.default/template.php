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
$renderImageTeam1 = CFile::ResizeImageGet($arResult["PROPERTIES"]["LOGO_1"]["VALUE"], array('width'=>180, 'height'=>180), BX_RESIZE_IMAGE_EXACT, true);
$renderImageTeam2 = CFile::ResizeImageGet($arResult["PROPERTIES"]["LOGO_2"]["VALUE"], array('width'=>180, 'height'=>180), BX_RESIZE_IMAGE_EXACT, true);
?>
<div class="translation">
        <div class="translation__banner">
            <div class="translation__info">
                <div class="translation__date-and-place-block info-element">
                    <div class="translation__date">
					<?if($arResult["PROPERTIES"]["MATCHDATE"]["VALUE"]):?>
						<?echo FormatDate("d F H:i", MakeTimeStamp($arResult["PROPERTIES"]["MATCHDATE"]["VALUE"]));?>
					<?endif?>
					,
					</div>
                    <div class="translation__place"><?=$arResult["PROPERTIES"]["MATCH_PLACE"]["VALUE"];?></div>
                </div>
                <div class="translation__stage info-element"><?=$arResult["PROPERTIES"]["ETAP"]["VALUE"];?></div>
                <div class="translation__division info-element">
					<?if(!empty($arResult["PROPERTIES"]["DIVISION"]["VALUE"])):?>
						Дивизион: <?=$arResult["PROPERTIES"]["DIVISION"]["VALUE"];?>
					<?endif;?>	
				</div>
            </div>
            <div class="translation__result-block">
                <div class="translation__team">
                    <div class="translation__team-name"><?=$arResult["PROPERTIES"]["TITLE_TEAM_1"]["VALUE"];?></div>
                    <div class="translation__team-logo"><img src="<?=$renderImageTeam1['src']?>" alt="<?=$arResult["PROPERTIES"]["TITLE_TEAM_1"]["VALUE"];?>"></div>
                </div>
                <div class="translation__current-score"><?=$arResult["PROPERTIES"]["COUNT_TEAM_1"]["VALUE"];?></div>
                <div class="translation__current-score-mobile translation__inviz">
                    <div class="translation__current-score translation__inviz"><?=$arResult["PROPERTIES"]["COUNT_TEAM_1"]["VALUE"];?></div>
                    <div class="translation__current-score-separator translation__inviz">:</div>
                    <div class="translation__current-score translation__inviz"><?=$arResult["PROPERTIES"]["COUNT_TEAM_2"]["VALUE"];?></div>
                </div>
                <div class="translation__scores-block">
                    <div class="translation__periods-block">
                        <div class="translation__period">
                            <div class="translation__scores-block-txt">1</div>
                        </div>
                        <div class="translation__period">
                            <div class="translation__scores-block-txt">2</div>
                        </div>
                        <div class="translation__period">
                            <div class="translation__scores-block-txt">3</div>
                        </div>
                    </div>
                    <div class="translation__points-block">
                        <div class="translation__points">
                            <div class="translation__scores-block-txt">
								<?if(!empty($arResult["PROPERTIES"]["PUCK_1"]["VALUE"]) || $arResult["PROPERTIES"]["PUCK_1"]["VALUE"] == '0'):?>
									<?=$arResult["PROPERTIES"]["PUCK_1"]["VALUE"];?>
								<?else:?>
									-:-
								<?endif?>
							</div>
                        </div>
                        <div class="translation__points">
                            <div class="translation__scores-block-txt">
								<?if(!empty($arResult["PROPERTIES"]["PUCK_2"]["VALUE"])  || $arResult["PROPERTIES"]["PUCK_1"]["VALUE"] == '0'):?>
									<?=$arResult["PROPERTIES"]["PUCK_2"]["VALUE"];?>
								<?else:?>
									-:-
								<?endif?>
							</div>
                        </div>
                        <div class="translation__points">
                            <div class="translation__scores-block-txt">
								<?if(!empty($arResult["PROPERTIES"]["PUCK_3"]["VALUE"])  || $arResult["PROPERTIES"]["PUCK_1"]["VALUE"] == '0'):?>
									<?=$arResult["PROPERTIES"]["PUCK_3"]["VALUE"];?>
								<?else:?>
									-:-
								<?endif?>
							</div>
                        </div>
                    </div>
                </div>
                <div class="translation__current-score"><?=$arResult["PROPERTIES"]["COUNT_TEAM_2"]["VALUE"];?></div>
                <div class="translation__team reverse">
                    <div class="translation__team-name"><?=$arResult["PROPERTIES"]["TITLE_TEAM_2"]["VALUE"];?></div>
                    <div class="translation__team-logo"><img src="<?=$renderImageTeam2['src']?>" alt="<?=$arResult["PROPERTIES"]["TITLE_TEAM_2"]["VALUE"];?>">
                    </div>
                </div>
            </div>
            <div class="translation__scores-block-mobile">
                <div class="translation__scores-block">
                    <div class="translation__periods-block">
                        <div class="translation__period">
                            <div class="translation__scores-block-txt">1</div>
                        </div>
                        <div class="translation__period">
                            <div class="translation__scores-block-txt">2</div>
                        </div>
                        <div class="translation__period">
                            <div class="translation__scores-block-txt">3</div>
                        </div>
                    </div>
                    <div class="translation__points-block">
                        <div class="translation__points">
                            <div class="translation__scores-block-txt">
								<?if(!empty($arResult["PROPERTIES"]["PUCK_1"]["VALUE"])):?>
									<?=$arResult["PROPERTIES"]["PUCK_1"]["VALUE"];?>
								<?else:?>
									-:-
								<?endif?>
							</div>
                        </div>
                        <div class="translation__points">
                            <div class="translation__scores-block-txt">
								<?if(!empty($arResult["PROPERTIES"]["PUCK_2"]["VALUE"])):?>
									<?=$arResult["PROPERTIES"]["PUCK_2"]["VALUE"];?>
								<?else:?>
									-:-
								<?endif?>
							</div>
                        </div>
                        <div class="translation__points">
                            <div class="translation__scores-block-txt">
								<?if(!empty($arResult["PROPERTIES"]["PUCK_3"]["VALUE"])):?>
									<?=$arResult["PROPERTIES"]["PUCK_3"]["VALUE"];?>
								<?else:?>
									-:-
								<?endif?>
							</div>
                        </div>
                    </div>
                </div>
            </div>
			<?if(!empty($arResult["PROPERTIES"]["TRANSLATION"]["VALUE"])):?>
				<div class="translation__button-block">
					<a class="translation__button" target="_blank" href="<?=$arResult["PROPERTIES"]["TRANSLATION"]["VALUE"];?>">
						<div class="translation__button-txt">Трансляция</div>
						<div class="translation__button-image"><img src="/local/templates/new_ru/img/translation.png" alt="translation"></div>
					</a>
				</div>
			<?endif;?>
        </div>
		<?
			//вывод стенограммы матча
			$stenogrammID = $arResult["PROPERTIES"]["SOB"]["VALUE"];//ID раздела с элементами стенограммы
			$IBLOCK_ID = 26;//ID инф. блока
			$i =0; $p1=0; $p2=0; $p3=0;
			//Получем и формируем Масив всех эллементов
			$arSelect = Array("ID", "NAME", "PROPERTY_TIME","PROPERTY_PLAYER","PROPERTY_TEAM","PROPERTY_PERIODE");//какие параметры выбираем
			$arFilter = Array("IBLOCK_ID"=>$IBLOCK_ID, "SECTION_ID"=>$stenogrammID, "ACTIVE"=>"Y");
			$res = CIBlockElement::GetList(Array("property_TIME"=>"ASC"), $arFilter, false, false, $arSelect);
			while($ob = $res->GetNextElement())
			{
				$arFields = $ob->GetFields();
				$i++;
				$Stenogramm[$i] = $arFields;
			}
		?> 
		<?//разбиваем на 3 массива по периодам
		foreach($Stenogramm as $arItem):?>
			<?
			switch($arItem["PROPERTY_PERIODE_VALUE"])
			{
				case "1": 
					$FirstPeriod[$p1] = $arItem;
					$p1++;
					break;
				case "2": 
					$SecondPeriod[$p2] = $arItem;
					$p2++;
					break;
				case "3": 
					$ThirdPeriod[$p3] = $arItem;
					$p3++;
					break;
			}
			?>
		<?endforeach;?>
        <div class="match-progress-block">
            <div class="match-progress">
                <div class="match-progress__title">Ход игры</div>
                <div class="match-progress__subtitle">Период</div>	
				<?if(!empty($FirstPeriod)):?>
				<div class="block-items__periods">
                    <div class="block-item__count">
                        <div class="line"></div>
                        <div class="count">1</div>
                        <div class="line"></div>
                    </div>
					<div class="drawer-vert-line"></div>
					<div class="block-items__block">
					<?foreach($FirstPeriod as $key => $arPeriod):?>
						<?if($temp == 1):?>
							<?$temp = 0;?>
						<?else:?>
							<?//проверка на 2 события в 1 время у 2х разных команд
							if($arPeriod["PROPERTY_TIME_VALUE"] == $FirstPeriod[$key+1]["PROPERTY_TIME_VALUE"] && $arPeriod["PROPERTY_TEAM_VALUE"] != $FirstPeriod[$key+1]["PROPERTY_TEAM_VALUE"]):?>
								<?$temp = 1;?>
								<div class="block-item__event">
									<?if($arPeriod["PROPERTY_TEAM_VALUE"] == 1):?>
										<div class="block-item__first">
											<div class="block-item__title"><?=$arPeriod["NAME"]?></div>
											<div class="block-item__player"><?=$arPeriod["PROPERTY_PLAYER_VALUE"]?></div>
										</div>
										<div class="block-item__time"><?=$arPeriod["PROPERTY_TIME_VALUE"]?></div>
										<div class="block-item__second">
											<div class="block-item__title"><?=$FirstPeriod[$key+1]["NAME"]?></div>
											<div class="block-item__player"><?=$FirstPeriod[$key+1]["PROPERTY_PLAYER_VALUE"]?></div>
										</div>
									<?else:?>
										<div class="block-item__first">
											<div class="block-item__title"><?=$FirstPeriod[$key+1]["NAME"]?></div>
											<div class="block-item__player"><?=$FirstPeriod[$key+1]["PROPERTY_PLAYER_VALUE"]?></div>
										</div>
										<div class="block-item__time"><?=$arPeriod["PROPERTY_TIME_VALUE"]?></div>
										<div class="block-item__second">
											<div class="block-item__title"><?=$arPeriod["NAME"]?></div>
											<div class="block-item__player"><?=$arPeriod["PROPERTY_PLAYER_VALUE"]?></div>
										</div>
									<?endif?>
								</div>
							<?else:?>
								<div class="block-item__event">
									<div class="block-item__first <?if($arPeriod["PROPERTY_TEAM_VALUE"] != 1):?>black<?endif;?>">
										<div class="block-item__title"><?if($arPeriod["PROPERTY_TEAM_VALUE"] == 1):?><?=$arPeriod["NAME"]?><?endif;?></div>
										<div class="block-item__player"><?if($arPeriod["PROPERTY_TEAM_VALUE"] == 1):?><?=$arPeriod["PROPERTY_PLAYER_VALUE"]?><?endif;?></div>
									</div>
									<div class="block-item__time"><?=$arPeriod["PROPERTY_TIME_VALUE"]?></div>
									<div class="block-item__second <?if($arPeriod["PROPERTY_TEAM_VALUE"] != 2):?>black<?endif;?>">
										<div class="block-item__title"><?if($arPeriod["PROPERTY_TEAM_VALUE"] == 2):?><?=$arPeriod["NAME"]?><?endif;?></div>
										<div class="block-item__player"><?if($arPeriod["PROPERTY_TEAM_VALUE"] == 2):?><?=$arPeriod["PROPERTY_PLAYER_VALUE"]?><?endif;?></div>
									</div>
								</div>
							<?endif?>	
						<?endif?>	
					<?endforeach;?>
					</div>
				</div>			
			<?endif;?>
			<?if(!empty($SecondPeriod)):?>
				<?$temp = 0;?>
				<div class="block-items__periods">
                    <div class="block-item__count">
                        <div class="line"></div>
                        <div class="count">2</div>
                        <div class="line"></div>
                    </div>
					<div class="drawer-vert-line"></div>
					<div class="block-items__block">
					<?foreach($SecondPeriod as $key => $arPeriod):?>
						<?if($temp == 1):?>
							<?$temp = 0;?>
						<?else:?>
							<?if($arPeriod["PROPERTY_TIME_VALUE"] == $FirstPeriod[$key+1]["PROPERTY_TIME_VALUE"] && $arPeriod["PROPERTY_TEAM_VALUE"] != $FirstPeriod[$key+1]["PROPERTY_TEAM_VALUE"]):?>
								<?$temp = 1;?>
								<div class="block-item__event">
									<?if($arPeriod["PROPERTY_TEAM_VALUE"] == 1):?>
										<div class="block-item__first">
											<div class="block-item__title"><?=$arPeriod["NAME"]?></div>
											<div class="block-item__player"><?=$arPeriod["PROPERTY_PLAYER_VALUE"]?></div>
										</div>
										<div class="block-item__time"><?=$arPeriod["PROPERTY_TIME_VALUE"]?></div>
										<div class="block-item__second">
											<div class="block-item__title"><?=$FirstPeriod[$key+1]["NAME"]?></div>
											<div class="block-item__player"><?=$FirstPeriod[$key+1]["PROPERTY_PLAYER_VALUE"]?></div>
										</div>
									<?else:?>
										<div class="block-item__first">
											<div class="block-item__title"><?=$FirstPeriod[$key+1]["NAME"]?></div>
											<div class="block-item__player"><?=$FirstPeriod[$key+1]["PROPERTY_PLAYER_VALUE"]?></div>
										</div>
										<div class="block-item__time"><?=$arPeriod["PROPERTY_TIME_VALUE"]?></div>
										<div class="block-item__second">
											<div class="block-item__title"><?=$arPeriod["NAME"]?></div>
											<div class="block-item__player"><?=$arPeriod["PROPERTY_PLAYER_VALUE"]?></div>
										</div>
									<?endif?>
								</div>
							<?else:?>
								<div class="block-item__event">
									<div class="block-item__first <?if($arPeriod["PROPERTY_TEAM_VALUE"] != 1):?>black<?endif;?>">
										<div class="block-item__title"><?if($arPeriod["PROPERTY_TEAM_VALUE"] == 1):?><?=$arPeriod["NAME"]?><?endif;?></div>
										<div class="block-item__player"><?if($arPeriod["PROPERTY_TEAM_VALUE"] == 1):?><?=$arPeriod["PROPERTY_PLAYER_VALUE"]?><?endif;?></div>
									</div>
									<div class="block-item__time"><?=$arPeriod["PROPERTY_TIME_VALUE"]?></div>
									<div class="block-item__second <?if($arPeriod["PROPERTY_TEAM_VALUE"] != 2):?>black<?endif;?>">
										<div class="block-item__title"><?if($arPeriod["PROPERTY_TEAM_VALUE"] == 2):?><?=$arPeriod["NAME"]?><?endif;?></div>
										<div class="block-item__player"><?if($arPeriod["PROPERTY_TEAM_VALUE"] == 2):?><?=$arPeriod["PROPERTY_PLAYER_VALUE"]?><?endif;?></div>
									</div>
								</div>
							<?endif?>	
						<?endif?>	
					<?endforeach;?>
					</div>
				</div>			
			<?endif;?>
			<?if(!empty($ThirdPeriod)):?>
				<?$temp = 0;?>
				<div class="block-items__periods">
                    <div class="block-item__count">
                        <div class="line"></div>
                        <div class="count">3</div>
                        <div class="line"></div>
                    </div>
					<div class="drawer-vert-line"></div>
					<div class="block-items__block">
					<?foreach($ThirdPeriod as $key => $arPeriod):?>
						<?if($temp == 1):?>
							<?$temp = 0;?>
						<?else:?>
							<?if($arPeriod["PROPERTY_TIME_VALUE"] == $FirstPeriod[$key+1]["PROPERTY_TIME_VALUE"] && $arPeriod["PROPERTY_TEAM_VALUE"] != $FirstPeriod[$key+1]["PROPERTY_TEAM_VALUE"]):?>
								<?$temp = 1;?>
								<div class="block-item__event">
									<?if($arPeriod["PROPERTY_TEAM_VALUE"] == 1):?>
										<div class="block-item__first">
											<div class="block-item__title"><?=$arPeriod["NAME"]?></div>
											<div class="block-item__player"><?=$arPeriod["PROPERTY_PLAYER_VALUE"]?></div>
										</div>
										<div class="block-item__time"><?=$arPeriod["PROPERTY_TIME_VALUE"]?></div>
										<div class="block-item__second">
											<div class="block-item__title"><?=$FirstPeriod[$key+1]["NAME"]?></div>
											<div class="block-item__player"><?=$FirstPeriod[$key+1]["PROPERTY_PLAYER_VALUE"]?></div>
										</div>
									<?else:?>
										<div class="block-item__first">
											<div class="block-item__title"><?=$FirstPeriod[$key+1]["NAME"]?></div>
											<div class="block-item__player"><?=$FirstPeriod[$key+1]["PROPERTY_PLAYER_VALUE"]?></div>
										</div>
										<div class="block-item__time"><?=$arPeriod["PROPERTY_TIME_VALUE"]?></div>
										<div class="block-item__second">
											<div class="block-item__title"><?=$arPeriod["NAME"]?></div>
											<div class="block-item__player"><?=$arPeriod["PROPERTY_PLAYER_VALUE"]?></div>
										</div>
									<?endif?>
								</div>
							<?else:?>
								<div class="block-item__event">
									<div class="block-item__first <?if($arPeriod["PROPERTY_TEAM_VALUE"] != 1):?>black<?endif;?>">
										<div class="block-item__title"><?if($arPeriod["PROPERTY_TEAM_VALUE"] == 1):?><?=$arPeriod["NAME"]?><?endif;?></div>
										<div class="block-item__player"><?if($arPeriod["PROPERTY_TEAM_VALUE"] == 1):?><?=$arPeriod["PROPERTY_PLAYER_VALUE"]?><?endif;?></div>
									</div>
									<div class="block-item__time"><?=$arPeriod["PROPERTY_TIME_VALUE"]?></div>
									<div class="block-item__second <?if($arPeriod["PROPERTY_TEAM_VALUE"] != 2):?>black<?endif;?>">
										<div class="block-item__title"><?if($arPeriod["PROPERTY_TEAM_VALUE"] == 2):?><?=$arPeriod["NAME"]?><?endif;?></div>
										<div class="block-item__player"><?if($arPeriod["PROPERTY_TEAM_VALUE"] == 2):?><?=$arPeriod["PROPERTY_PLAYER_VALUE"]?><?endif;?></div>
									</div>
								</div>
							<?endif?>	
						<?endif?>	
					<?endforeach;?>
					</div>
				</div>			
			<?endif;?>
            </div>
        </div>
</div>