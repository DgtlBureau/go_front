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
                    <div class="translation__date"><?=$arResult["PROPERTIES"]["MATCH_DATE"]["VALUE"];?>,</div>
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
			$res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
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
	
				
				
                <div class="match-progress__period">
				
                    <div class="match-progress__period-number-block">
                        <div class="match-progress__vertical-border"></div>
                        <div class="match-progress__period-number">1</div>
                        <div class="match-progress__vertical-border"></div>
                    </div>
                    <div class="match-progress__period-content">
                        <div class="match-progress__horizontal-border"></div>
                        <div class="match-progress__event-block">
                            <div class="match-progress__event">
                                <div class="match-progress__event-name">Выход на площадку</div>
                                <div class="match-progress__player-name">Розенберг Никита 34</div>
                            </div>
                            <div class="match-progress__event black">
                                <div class="match-progress__event-name black">Проигрыш в вбрасывании</div>
                                <div class="match-progress__player-name black">Розенберг Никита 34</div>
                            </div>
                            <div class="match-progress__event">
                                <div class="match-progress__event-name">Бросок по воротам</div>
                                <div class="match-progress__player-name">Розенберг Никита 34</div>
                            </div>
                            <div class="match-progress__event">
                                <div class="match-progress__event-name">Победа в врасывании</div>
                                <div class="match-progress__player-name">Розенберг Никита 34</div>
                            </div>
                            <div class="match-progress__event">
                                <div class="match-progress__event-name">Отражен бросок</div>
                                <div class="match-progress__player-name">Розенберг Никита 34</div>
                            </div>
                        </div>
                        <div class="match-progress__time-block">
                            <div class="match-progress__time">22:22</div>
                            <div class="match-progress__time">22:22</div>
                            <div class="match-progress__time">22:22</div>
                            <div class="match-progress__time">22:22</div>
                            <div class="match-progress__time">22:22</div>
                        </div>
                        <div class="match-progress__event-block">
                            <div class="match-progress__event">
                                <div class="match-progress__event-name">Проигрыш в вбрасывании</div>
                                <div class="match-progress__player-name">Розенберг Никита 34</div>
                            </div>
                            <div class="match-progress__event">
                                <div class="match-progress__event-name">Выход на площадку</div>
                                <div class="match-progress__player-name">Розенберг Никита 34</div>
                            </div>
                            <div class="match-progress__event">
                                <div class="match-progress__event-name">Отражен бросок</div>
                                <div class="match-progress__player-name">Розенберг Никита 34</div>
                            </div>
                            <div class="match-progress__event">
                                <div class="match-progress__event-name">Победа в врасывании</div>
                                <div class="match-progress__player-name">Розенберг Никита 34</div>
                            </div>
                            <div class="match-progress__event black">
                                <div class="match-progress__event-name black">Бросок по воротам</div>
                                <div class="match-progress__player-name black">Розенберг Никита 34</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="match-progress__period">
                    <div class="match-progress__period-number-block">
                        <div class="match-progress__vertical-border"></div>
                        <div class="match-progress__period-number">2</div>
                        <div class="match-progress__vertical-border"></div>
                    </div>
                    <div class="match-progress__period-content">
                        <div class="match-progress__horizontal-border"></div>
                        <div class="match-progress__event-block">
                            <div class="match-progress__event">
                                <div class="match-progress__event-name">Выход на площадку</div>
                                <div class="match-progress__player-name">Розенберг Никита 34</div>
                            </div>
                            <div class="match-progress__event black">
                                <div class="match-progress__event-name black">Проигрыш в вбрасывании</div>
                                <div class="match-progress__player-name black">Розенберг Никита 34</div>
                            </div>
                            <div class="match-progress__event">
                                <div class="match-progress__event-name">Бросок по воротам</div>
                                <div class="match-progress__player-name">Розенберг Никита 34</div>
                            </div>
                            <div class="match-progress__event">
                                <div class="match-progress__event-name">Победа в врасывании</div>
                                <div class="match-progress__player-name">Розенберг Никита 34</div>
                            </div>
                            <div class="match-progress__event">
                                <div class="match-progress__event-name">Отражен бросок</div>
                                <div class="match-progress__player-name">Розенберг Никита 34</div>
                            </div>
                        </div>
                        <div class="match-progress__time-block">
                            <div class="match-progress__time">22:22</div>
                            <div class="match-progress__time">22:22</div>
                            <div class="match-progress__time">22:22</div>
                            <div class="match-progress__time">22:22</div>
                            <div class="match-progress__time">22:22</div>
                        </div>
                        <div class="match-progress__event-block">
                            <div class="match-progress__event">
                                <div class="match-progress__event-name">Проигрыш в вбрасывании</div>
                                <div class="match-progress__player-name">Розенберг Никита 34</div>
                            </div>
                            <div class="match-progress__event">
                                <div class="match-progress__event-name">Выход на площадку</div>
                                <div class="match-progress__player-name">Розенберг Никита 34</div>
                            </div>
                            <div class="match-progress__event">
                                <div class="match-progress__event-name">Отражен бросок</div>
                                <div class="match-progress__player-name">Розенберг Никита 34</div>
                            </div>
                            <div class="match-progress__event">
                                <div class="match-progress__event-name">Победа в врасывании</div>
                                <div class="match-progress__player-name">Розенберг Никита 34</div>
                            </div>
                            <div class="match-progress__event black">
                                <div class="match-progress__event-name black">Бросок по воротам</div>
                                <div class="match-progress__player-name black">Розенберг Никита 34</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="match-progress__period">
                    <div class="match-progress__period-number-block">
                        <div class="match-progress__vertical-border"></div>
                        <div class="match-progress__period-number">3</div>
                        <div class="match-progress__vertical-border"></div>
                    </div>
                    <div class="match-progress__period-content">
                        <div class="match-progress__horizontal-border"></div>
                        <div class="match-progress__event-block">
                            <div class="match-progress__event">
                                <div class="match-progress__event-name">Выход на площадку</div>
                                <div class="match-progress__player-name">Розенберг Никита 34</div>
                            </div>
                            <div class="match-progress__event black">
                                <div class="match-progress__event-name black">Проигрыш в вбрасывании</div>
                                <div class="match-progress__player-name black">Розенберг Никита 34</div>
                            </div>
                            <div class="match-progress__event">
                                <div class="match-progress__event-name">Бросок по воротам</div>
                                <div class="match-progress__player-name">Розенберг Никита 34</div>
                            </div>
                            <div class="match-progress__event">
                                <div class="match-progress__event-name">Победа в врасывании</div>
                                <div class="match-progress__player-name">Розенберг Никита 34</div>
                            </div>
                            <div class="match-progress__event">
                                <div class="match-progress__event-name">Отражен бросок</div>
                                <div class="match-progress__player-name">Розенберг Никита 34</div>
                            </div>
                        </div>
                        <div class="match-progress__time-block">
                            <div class="match-progress__time">22:22</div>
                            <div class="match-progress__time">22:22</div>
                            <div class="match-progress__time">22:22</div>
                            <div class="match-progress__time">22:22</div>
                            <div class="match-progress__time">22:22</div>
                        </div>
                        <div class="match-progress__event-block">
                            <div class="match-progress__event">
                                <div class="match-progress__event-name">Проигрыш в вбрасывании</div>
                                <div class="match-progress__player-name">Розенберг Никита 34</div>
                            </div>
                            <div class="match-progress__event">
                                <div class="match-progress__event-name">Выход на площадку</div>
                                <div class="match-progress__player-name">Розенберг Никита 34</div>
                            </div>
                            <div class="match-progress__event">
                                <div class="match-progress__event-name">Отражен бросок</div>
                                <div class="match-progress__player-name">Розенберг Никита 34</div>
                            </div>
                            <div class="match-progress__event">
                                <div class="match-progress__event-name">Победа в врасывании</div>
                                <div class="match-progress__player-name">Розенберг Никита 34</div>
                            </div>
                            <div class="match-progress__event black">
                                <div class="match-progress__event-name black">Бросок по воротам</div>
                                <div class="match-progress__player-name black">Розенберг Никита 34</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>