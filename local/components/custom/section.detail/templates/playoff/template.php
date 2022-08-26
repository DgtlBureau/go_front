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
<?foreach($arResult['ITEMS'] as $key => $arItem):?>
	<?
	switch ($arItem["PROPERTIES"]["PRINT"]["VALUE"]) {
		case 'Лево верх':
			$LeftTop = $key;
			break;
		case 'Лево низ':
			$LeftBot = $key;
			break;
		case 'Право верх':
			$RightTop = $key;
			break;
		case 'Право низ':
			$RightBot = $key;
			break;
		case 'Лево 1/2':
			$Left = $key;
			break;
		case 'Право 1/2':
			$Right = $key;
			break;
	}
	switch ($arItem["PROPERTIES"]["ETAP"]["VALUE"]) {
		case 'Финал':
			$Finish = $key;
			break;
		case 'Игра за 3е место':
			$Loser = $key;
			break;
	}	
	?>
<?endforeach;?>
<?


//.go-final-bracket__score_winner

//echo '<pre>'; print_r($arResult); echo '</pre>';
//if($USER->IsAdmin()) {echo '<pre>'; print_r($arResult); echo '</pre>';}
?>
            <div class="go-final-bracket">
                <div class="go-final-bracket__stage">
                    <div class="go-final-bracket__txt active-stage">1/4</div>
                    <div class="go-final-bracket__separator-block">
                        <div class="go-final-bracket__separator white-border"></div>
                    </div>
                    <div class="go-final-bracket__txt active-stage">1/2</div>
                    <div class="go-final-bracket__separator-block">
                        <div class="go-final-bracket__separator white-border"></div>
                    </div>
                    <div class="go-final-bracket__txt active-stage">ФИНАЛ</div>
                    <div class="go-final-bracket__separator-block">
                        <div class="go-final-bracket__separator white-border"></div>
                    </div>
                    <div class="go-final-bracket__txt active-stage">1/2</div>
                    <div class="go-final-bracket__separator-block">
                        <div class="go-final-bracket__separator white-border"></div>
                    </div>
                    <div class="go-final-bracket__txt active-stage">1/4</div>
                </div>
                <div class="go-final-bracket__results-block">
                    <div class="go-final-bracket__results">
                        <div class="go-final-bracket__content">
                            <div class="go-final-bracket__quarter-result">
							<?//Левый верхний?>
                                <div class="go-final-bracket__game">
                                    <div class="go-final-bracket__team">
                                        <div class="go-final-bracket__team-info">
                                            <div class="go-final-bracket__team-logo">
											<img src="<?=CFile::GetPath($arResult['ITEMS'][$LeftTop]["PROPERTIES"]["LOGO_1"]["VALUE"])?>" alt="<?=$arResult['ITEMS'][$LeftTop]["PROPERTIES"]["TITLE_TEAM_1"]["VALUE"]?>"></div>
                                        </div>
                                        <div class="go-final-bracket__score 
										<?if($arResult['ITEMS'][$LeftTop]["PROPERTIES"]["COUNT_TEAM_1"]["VALUE"] > $arResult['ITEMS'][$LeftTop]["PROPERTIES"]["COUNT_TEAM_2"]["VALUE"]):?>
											go-final-bracket__score_winner
										<?else:?>
											quarter
										<?endif?>
										borders">
                                            <div class="go-final-bracket__score-txt"><?=$arResult['ITEMS'][$LeftTop]["PROPERTIES"]["COUNT_TEAM_1"]["VALUE"]?></div>
                                        </div>
										<?if(!empty($arResult['ITEMS'][$LeftTop]["PROPERTIES"]["COUNT2_TEAM_1"]["VALUE"]) || $arResult['ITEMS'][$LeftTop]["PROPERTIES"]["COUNT2_TEAM_1"]["VALUE"] == '0'):?> 
											<div class="go-final-bracket__score borders <?if($arResult['ITEMS'][$LeftTop]["PROPERTIES"]["COUNT2_TEAM_1"]["VALUE"] > $arResult['ITEMS'][$LeftTop]["PROPERTIES"]["COUNT2_TEAM_2"]["VALUE"]):?>go-final-bracket__score_winner<?endif?>">
												<div class="go-final-bracket__score-txt"><?=$arResult['ITEMS'][$LeftTop]["PROPERTIES"]["COUNT2_TEAM_1"]["VALUE"]?></div>
											</div>
										<?endif;?>
										<?if(!empty($arResult['ITEMS'][$LeftTop]["PROPERTIES"]["COUNT3_TEAM_1"]["VALUE"]) || $arResult['ITEMS'][$LeftTop]["PROPERTIES"]["COUNT3_TEAM_1"]["VALUE"] == '0'):?> 
											<div class="go-final-bracket__score borders <?if($arResult['ITEMS'][$LeftTop]["PROPERTIES"]["COUNT3_TEAM_1"]["VALUE"] > $arResult['ITEMS'][$LeftTop]["PROPERTIES"]["COUNT3_TEAM_2"]["VALUE"]):?>go-final-bracket__score_winner<?endif?>">
												<div class="go-final-bracket__score-txt"><?=$arResult['ITEMS'][$LeftTop]["PROPERTIES"]["COUNT3_TEAM_1"]["VALUE"]?></div>
											</div>
										<?endif;?>
                                    </div>
                                    <div class="go-final-bracket__team">
                                        <div class="go-final-bracket__team-info">
                                            <div class="go-final-bracket__team-logo">
												<img src="<?=CFile::GetPath($arResult['ITEMS'][$LeftTop]["PROPERTIES"]["LOGO_2"]["VALUE"])?>" alt="<?=$arResult['ITEMS'][$LeftTop]["PROPERTIES"]["TITLE_TEAM_1"]["VALUE"]?>"></div>
                                        </div>
                                        <div class="go-final-bracket__score
										<?if($arResult['ITEMS'][$LeftTop]["PROPERTIES"]["COUNT_TEAM_2"]["VALUE"] > $arResult['ITEMS'][$LeftTop]["PROPERTIES"]["COUNT_TEAM_1"]["VALUE"]):?>
											go-final-bracket__score_winner
										<?else:?>
											quarter
										<?endif?>
										borders">
                                            <div class="go-final-bracket__score-txt"><?=$arResult['ITEMS'][$LeftTop]["PROPERTIES"]["COUNT_TEAM_2"]["VALUE"]?></div>
                                        </div>
										<?if(!empty($arResult['ITEMS'][$LeftTop]["PROPERTIES"]["COUNT2_TEAM_2"]["VALUE"]) || $arResult['ITEMS'][$LeftTop]["PROPERTIES"]["COUNT2_TEAM_2"]["VALUE"] == '0'):?> 
											<div class="go-final-bracket__score borders <?if($arResult['ITEMS'][$LeftTop]["PROPERTIES"]["COUNT2_TEAM_2"]["VALUE"] > $arResult['ITEMS'][$LeftTop]["PROPERTIES"]["COUNT2_TEAM_1"]["VALUE"]):?>go-final-bracket__score_winner<?endif?>">
												<div class="go-final-bracket__score-txt"><?=$arResult['ITEMS'][$LeftTop]["PROPERTIES"]["COUNT2_TEAM_2"]["VALUE"]?></div>
											</div>
										<?endif;?>
										<?if(!empty($arResult['ITEMS'][$LeftTop]["PROPERTIES"]["COUNT3_TEAM_2"]["VALUE"]) || $arResult['ITEMS'][$LeftTop]["PROPERTIES"]["COUNT3_TEAM_2"]["VALUE"] == '0'):?> 
											<div class="go-final-bracket__score borders <?if($arResult['ITEMS'][$LeftTop]["PROPERTIES"]["COUNT3_TEAM_2"]["VALUE"] > $arResult['ITEMS'][$LeftTop]["PROPERTIES"]["COUNT3_TEAM_1"]["VALUE"]):?>go-final-bracket__score_winner<?endif?>">
												<div class="go-final-bracket__score-txt"><?=$arResult['ITEMS'][$LeftTop]["PROPERTIES"]["COUNT3_TEAM_2"]["VALUE"]?></div>
											</div>
										<?endif;?>
                                    </div>
                                </div>
                                <div class="go-final-bracket__game">
                                    <div class="go-final-bracket__team">
                                        <div class="go-final-bracket__team-info">
                                            <div class="go-final-bracket__team-logo">
											<img src="<?=CFile::GetPath($arResult['ITEMS'][$LeftBot]["PROPERTIES"]["LOGO_1"]["VALUE"])?>" alt="<?=$arResult['ITEMS'][$LeftBot]["PROPERTIES"]["TITLE_TEAM_1"]["VALUE"]?>"></div>
                                        </div>
                                        <div class="go-final-bracket__score
										<?if($arResult['ITEMS'][$LeftBot]["PROPERTIES"]["COUNT_TEAM_1"]["VALUE"] > $arResult['ITEMS'][$LeftBot]["PROPERTIES"]["COUNT_TEAM_2"]["VALUE"]):?>
											go-final-bracket__score_winner
										<?else:?>
											quarter
										<?endif?>
										borders">
                                            <div class="go-final-bracket__score-txt"><?=$arResult['ITEMS'][$LeftBot]["PROPERTIES"]["COUNT_TEAM_1"]["VALUE"]?></div>
                                        </div>
										<?if(!empty($arResult['ITEMS'][$LeftBot]["PROPERTIES"]["COUNT2_TEAM_1"]["VALUE"]) || $arResult['ITEMS'][$LeftBot]["PROPERTIES"]["COUNT2_TEAM_1"]["VALUE"] == '0'):?> 
											<div class="go-final-bracket__score borders <?if($arResult['ITEMS'][$LeftBot]["PROPERTIES"]["COUNT2_TEAM_1"]["VALUE"] > $arResult['ITEMS'][$LeftBot]["PROPERTIES"]["COUNT2_TEAM_2"]["VALUE"]):?>go-final-bracket__score_winner<?endif?>">
												<div class="go-final-bracket__score-txt"><?=$arResult['ITEMS'][$LeftBot]["PROPERTIES"]["COUNT2_TEAM_1"]["VALUE"]?></div>
											</div>
										<?endif;?>
										<?if(!empty($arResult['ITEMS'][$LeftBot]["PROPERTIES"]["COUNT3_TEAM_1"]["VALUE"]) || $arResult['ITEMS'][$LeftBot]["PROPERTIES"]["COUNT3_TEAM_1"]["VALUE"] == '0'):?> 
											<div class="go-final-bracket__score borders <?if($arResult['ITEMS'][$LeftBot]["PROPERTIES"]["COUNT3_TEAM_1"]["VALUE"] > $arResult['ITEMS'][$LeftBot]["PROPERTIES"]["COUNT3_TEAM_2"]["VALUE"]):?>go-final-bracket__score_winner<?endif?>">
												<div class="go-final-bracket__score-txt"><?=$arResult['ITEMS'][$LeftBot]["PROPERTIES"]["COUNT3_TEAM_1"]["VALUE"]?></div>
											</div>
										<?endif;?>
                                    </div>
                                    <div class="go-final-bracket__team">
                                        <div class="go-final-bracket__team-info">
                                            <div class="go-final-bracket__team-logo">
											<img src="<?=CFile::GetPath($arResult['ITEMS'][$LeftBot]["PROPERTIES"]["LOGO_2"]["VALUE"])?>" alt="<?=$arResult['ITEMS'][$LeftBot]["PROPERTIES"]["TITLE_TEAM_2"]["VALUE"]?>" alt="bull"></div>
                                        </div>
                                        <div class="go-final-bracket__score
										<?if($arResult['ITEMS'][$LeftBot]["PROPERTIES"]["COUNT_TEAM_2"]["VALUE"] > $arResult['ITEMS'][$LeftBot]["PROPERTIES"]["COUNT_TEAM_1"]["VALUE"]):?>
											go-final-bracket__score_winner
										<?else:?>
											quarter
										<?endif?>
										borders">
                                            <div class="go-final-bracket__score-txt"><?=$arResult['ITEMS'][$LeftBot]["PROPERTIES"]["COUNT_TEAM_2"]["VALUE"]?></div>
                                        </div>
										<?if(!empty($arResult['ITEMS'][$LeftBot]["PROPERTIES"]["COUNT2_TEAM_2"]["VALUE"]) || $arResult['ITEMS'][$LeftBot]["PROPERTIES"]["COUNT2_TEAM_2"]["VALUE"] == '0'):?> 
											<div class="go-final-bracket__score borders <?if($arResult['ITEMS'][$LeftBot]["PROPERTIES"]["COUNT2_TEAM_2"]["VALUE"] > $arResult['ITEMS'][$LeftBot]["PROPERTIES"]["COUNT2_TEAM_1"]["VALUE"]):?>go-final-bracket__score_winner<?endif?>">
												<div class="go-final-bracket__score-txt"><?=$arResult['ITEMS'][$LeftBot]["PROPERTIES"]["COUNT2_TEAM_2"]["VALUE"]?></div>
											</div>
										<?endif;?>
										<?if(!empty($arResult['ITEMS'][$LeftBot]["PROPERTIES"]["COUNT3_TEAM_2"]["VALUE"]) || $arResult['ITEMS'][$LeftBot]["PROPERTIES"]["COUNT3_TEAM_2"]["VALUE"] == '0'):?> 
											<div class="go-final-bracket__score borders <?if($arResult['ITEMS'][$LeftBot]["PROPERTIES"]["COUNT3_TEAM_2"]["VALUE"] > $arResult['ITEMS'][$LeftBot]["PROPERTIES"]["COUNT3_TEAM_1"]["VALUE"]):?>go-final-bracket__score_winner<?endif?>">
												<div class="go-final-bracket__score-txt"><?=$arResult['ITEMS'][$LeftBot]["PROPERTIES"]["COUNT3_TEAM_2"]["VALUE"]?></div>
											</div>
										<?endif;?>
                                    </div>
                                </div>
                            </div>
                            <div class="go-final-bracket__connecting-block">
                                <div class="go-final-bracket__connecting vertical-connecting"><img
                                            src="/local/templates/new_ru/img/vertLineCurved.png" alt="vertLine"></div>
                                <div class="go-final-bracket__connecting vertical-connecting"><img
                                            src="/local/templates/new_ru/img/vertLineCurved.png" alt="vertLine"></div>
                            </div>
                            <div class="go-final-bracket__connecting-block">
                                <div class="go-final-bracket__connecting gorizontal-connecting"><img
                                            src="/local/templates/new_ru/img/gorLine.png" alt="gorLine"></div>
                            </div>
                            <div class="go-final-bracket__quarter-result">
							<?// 1/2 левый блок?>
                                <div class="go-final-bracket__game semi-match-block">
                                    <div class="go-final-bracket__team">
                                        <div class="go-final-bracket__team-info">
                                            <div class="go-final-bracket__team-logo"><img src="<?=CFile::GetPath($arResult['ITEMS'][$Left]["PROPERTIES"]["LOGO_1"]["VALUE"])?>" alt="<?=$arResult['ITEMS'][$Left]["PROPERTIES"]["TITLE_TEAM_1"]["VALUE"]?>"></div>
                                        </div>
                                        <div class="go-final-bracket__score
										<?if($arResult['ITEMS'][$Left]["PROPERTIES"]["COUNT_TEAM_1"]["VALUE"] > $arResult['ITEMS'][$Left]["PROPERTIES"]["COUNT_TEAM_2"]["VALUE"]):?>
											go-final-bracket__score_winner
										<?else:?>
											quarter
										<?endif?>
										borders">
                                            <div class="go-final-bracket__score-txt"><?=$arResult['ITEMS'][$Left]["PROPERTIES"]["COUNT_TEAM_1"]["VALUE"]?></div>
                                        </div>
										<?if(!empty($arResult['ITEMS'][$Left]["PROPERTIES"]["COUNT2_TEAM_1"]["VALUE"]) || $arResult['ITEMS'][$Left]["PROPERTIES"]["COUNT2_TEAM_1"]["VALUE"] == '0'):?> 
											<div class="go-final-bracket__score borders <?if($arResult['ITEMS'][$Left]["PROPERTIES"]["COUNT2_TEAM_1"]["VALUE"] > $arResult['ITEMS'][$Left]["PROPERTIES"]["COUNT2_TEAM_2"]["VALUE"]):?>go-final-bracket__score_winner<?endif?>">
												<div class="go-final-bracket__score-txt"><?=$arResult['ITEMS'][$Left]["PROPERTIES"]["COUNT2_TEAM_1"]["VALUE"]?></div>
											</div>
										<?endif;?>
										<?if(!empty($arResult['ITEMS'][$Left]["PROPERTIES"]["COUNT3_TEAM_1"]["VALUE"]) || $arResult['ITEMS'][$Left]["PROPERTIES"]["COUNT3_TEAM_1"]["VALUE"] == '0'):?> 
											<div class="go-final-bracket__score borders <?if($arResult['ITEMS'][$Left]["PROPERTIES"]["COUNT3_TEAM_1"]["VALUE"] > $arResult['ITEMS'][$Left]["PROPERTIES"]["COUNT3_TEAM_2"]["VALUE"]):?>go-final-bracket__score_winner<?endif?>">
												<div class="go-final-bracket__score-txt"><?=$arResult['ITEMS'][$Left]["PROPERTIES"]["COUNT3_TEAM_1"]["VALUE"]?></div>
											</div>
										<?endif;?>
                                    </div>
                                    <div class="go-final-bracket__team">
                                        <div class="go-final-bracket__team-info">
                                            <div class="go-final-bracket__team-logo"><img src="<?=CFile::GetPath($arResult['ITEMS'][$Left]["PROPERTIES"]["LOGO_2"]["VALUE"])?>" alt="<?=$arResult['ITEMS'][$Left]["PROPERTIES"]["TITLE_TEAM_2"]["VALUE"]?>"></div>
                                        </div>
                                        <div class="go-final-bracket__score
										<?if($arResult['ITEMS'][$Left]["PROPERTIES"]["COUNT_TEAM_2"]["VALUE"] > $arResult['ITEMS'][$Left]["PROPERTIES"]["COUNT_TEAM_1"]["VALUE"]):?>
											go-final-bracket__score_winner
										<?else:?>
											quarter
										<?endif?>
										borders">
                                            <div class="go-final-bracket__score-txt"><?=$arResult['ITEMS'][$Left]["PROPERTIES"]["COUNT_TEAM_2"]["VALUE"]?></div>
                                        </div>
										<?if(!empty($arResult['ITEMS'][$Left]["PROPERTIES"]["COUNT2_TEAM_2"]["VALUE"]) || $arResult['ITEMS'][$Left]["PROPERTIES"]["COUNT2_TEAM_2"]["VALUE"] == '0'):?> 
											<div class="go-final-bracket__score borders <?if($arResult['ITEMS'][$Left]["PROPERTIES"]["COUNT2_TEAM_2"]["VALUE"] > $arResult['ITEMS'][$Left]["PROPERTIES"]["COUNT2_TEAM_1"]["VALUE"]):?>go-final-bracket__score_winner<?endif?>">
												<div class="go-final-bracket__score-txt"><?=$arResult['ITEMS'][$Left]["PROPERTIES"]["COUNT2_TEAM_2"]["VALUE"]?></div>
											</div>
										<?endif;?>
										<?if(!empty($arResult['ITEMS'][$Left]["PROPERTIES"]["COUNT3_TEAM_2"]["VALUE"]) || $arResult['ITEMS'][$Left]["PROPERTIES"]["COUNT3_TEAM_2"]["VALUE"] == '0'):?> 
											<div class="go-final-bracket__score borders <?if($arResult['ITEMS'][$Left]["PROPERTIES"]["COUNT3_TEAM_2"]["VALUE"] > $arResult['ITEMS'][$Left]["PROPERTIES"]["COUNT3_TEAM_1"]["VALUE"]):?>go-final-bracket__score_winner<?endif?>">
												<div class="go-final-bracket__score-txt"><?=$arResult['ITEMS'][$Left]["PROPERTIES"]["COUNT3_TEAM_2"]["VALUE"]?></div>
											</div>
										<?endif;?>
                                    </div>
                                </div>
                            </div>
                            <div class="go-final-bracket__connecting-block">
                                <div class="go-final-bracket__connecting gorizontal-connecting"><img
                                            src="/local/templates/new_ru/img/gorLine.png" alt="gorLine"></div>
                            </div>
                        </div>
                        <div class="go-final-bracket__final-game-block">
                            <div class="go-final-bracket__cup-block">
                                <div class="go-final-bracket__cup-image"><img
                                            src="/local/templates/new_ru/img/whiteCup.png" alt="whiteCup"></div>
                                <div class="go-final-bracket__cup-name">
									<?=$arResult['ITEMS'][0]["PROPERTIES"]["NAMEKUB"]["VALUE"]?>
								</div>
                            </div>
							<?//Финал ?>
                            <div class="go-final-bracket__final-teams-block">
                                <div class="go-final-bracket__final-teams">
                                    <div class="go-final-bracket__final-game-player">
                                        <div class="go-final-bracket__logo-block">
                                            <div class="go-final-bracket__logo">
												<img src="<?=CFile::GetPath($arResult['ITEMS'][$Finish]["PROPERTIES"]["LOGO_1"]["VALUE"])?>" alt="<?=$arResult['ITEMS'][$Finish]["PROPERTIES"]["TITLE_TEAM_1"]["VALUE"]?>">
											</div>
                                        </div>
                                        <div class="go-final-bracket__final-score-block 
										<?if($arResult['ITEMS'][$Finish]["PROPERTIES"]["COUNT_TEAM_1"]["VALUE"] > $arResult['ITEMS'][$Finish]["PROPERTIES"]["COUNT_TEAM_2"]["VALUE"]):?>
											go-final-bracket__score_winner
										<?endif?>">
                                            <div class="go-final-bracket__score-txt"><?=$arResult['ITEMS'][$Finish]["PROPERTIES"]["COUNT_TEAM_1"]["VALUE"]?></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="go-final-bracket__final-teams">
                                    <div class="go-final-bracket__final-game-player">
                                        <div class="go-final-bracket__logo-block">
                                            <div class="go-final-bracket__logo">
												<img src="<?=CFile::GetPath($arResult['ITEMS'][$Finish]["PROPERTIES"]["LOGO_2"]["VALUE"])?>" alt="<?=$arResult['ITEMS'][$Finish]["PROPERTIES"]["TITLE_TEAM_2"]["VALUE"]?>">
											</div>
                                        </div>
                                        <div class="go-final-bracket__final-score-block 
										<?if($arResult['ITEMS'][$Finish]["PROPERTIES"]["COUNT_TEAM_2"]["VALUE"] > $arResult['ITEMS'][$Finish]["PROPERTIES"]["COUNT_TEAM_1"]["VALUE"]):?>
											go-final-bracket__score_winner
										<?endif?>">
                                            <div class="go-final-bracket__score-txt"><?=$arResult['ITEMS'][$Finish]["PROPERTIES"]["COUNT_TEAM_2"]["VALUE"]?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="go-final-bracket__final-teams-title">3 место</div>
                            <div class="go-final-bracket__final-teams-block">
                                <div class="go-final-bracket__final-teams">
                                    <div class="go-final-bracket__final-game-player">
                                        <div class="go-final-bracket__logo-block">
                                            <div class="go-final-bracket__logo">
												<img src="<?=CFile::GetPath($arResult['ITEMS'][$Loser]["PROPERTIES"]["LOGO_1"]["VALUE"])?>" alt="<?=$arResult['ITEMS'][$Loser]["PROPERTIES"]["TITLE_TEAM_1"]["VALUE"]?>">
											</div>
                                        </div>
                                        <div class="go-final-bracket__final-score-block 
										<?if($arResult['ITEMS'][$Loser]["PROPERTIES"]["COUNT_TEAM_1"]["VALUE"] > $arResult['ITEMS'][$Loser]["PROPERTIES"]["COUNT_TEAM_2"]["VALUE"]):?>
											go-final-bracket__score_winner
										<?endif?>">		
                                            <div class="go-final-bracket__score-txt"><?=$arResult['ITEMS'][$Loser]["PROPERTIES"]["COUNT_TEAM_1"]["VALUE"]?></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="go-final-bracket__final-teams">
                                    <div class="go-final-bracket__final-game-player">
                                        <div class="go-final-bracket__logo-block">
                                            <div class="go-final-bracket__logo">
												<img src="<?=CFile::GetPath($arResult['ITEMS'][$Loser]["PROPERTIES"]["LOGO_2"]["VALUE"])?>" alt="<?=$arResult['ITEMS'][$Loser]["PROPERTIES"]["TITLE_TEAM_2"]["VALUE"]?>">
											</div>
                                        </div>
                                        <div class="go-final-bracket__final-score-block
										<?if($arResult['ITEMS'][$Loser]["PROPERTIES"]["COUNT_TEAM_2"]["VALUE"] > $arResult['ITEMS'][$Loser]["PROPERTIES"]["COUNT_TEAM_1"]["VALUE"]):?>
											go-final-bracket__score_winner
										<?endif?>">	
                                            <div class="go-final-bracket__score-txt"><?=$arResult['ITEMS'][$Loser]["PROPERTIES"]["COUNT_TEAM_2"]["VALUE"]?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="go-final-bracket__content mirror">
                            <div class="go-final-bracket__quarter-result rotate">
							<?//Правый блок?>
                                <div class="go-final-bracket__game">
                                    <div class="go-final-bracket__team">
										<?if(!empty($arResult['ITEMS'][$RightTop]["PROPERTIES"]["COUNT3_TEAM_1"]["VALUE"]) || $arResult['ITEMS'][$RightTop]["PROPERTIES"]["COUNT3_TEAM_1"]["VALUE"] == '0'):?> 
											<div class="go-final-bracket__score borders <?if($arResult['ITEMS'][$RightTop]["PROPERTIES"]["COUNT3_TEAM_1"]["VALUE"] > $arResult['ITEMS'][$RightTop]["PROPERTIES"]["COUNT3_TEAM_2"]["VALUE"]):?>go-final-bracket__score_winner<?endif?>">
												<div class="go-final-bracket__score-txt"><?=$arResult['ITEMS'][$RightTop]["PROPERTIES"]["COUNT3_TEAM_1"]["VALUE"]?></div>
											</div>
										<?endif;?>
										<?if(!empty($arResult['ITEMS'][$RightTop]["PROPERTIES"]["COUNT2_TEAM_1"]["VALUE"]) || $arResult['ITEMS'][$RightTop]["PROPERTIES"]["COUNT2_TEAM_1"]["VALUE"] == '0'):?> 
											<div class="go-final-bracket__score borders <?if($arResult['ITEMS'][$RightTop]["PROPERTIES"]["COUNT2_TEAM_1"]["VALUE"] > $arResult['ITEMS'][$RightTop]["PROPERTIES"]["COUNT2_TEAM_2"]["VALUE"]):?>go-final-bracket__score_winner<?endif?>">
												<div class="go-final-bracket__score-txt"><?=$arResult['ITEMS'][$RightTop]["PROPERTIES"]["COUNT2_TEAM_1"]["VALUE"]?></div>
											</div>
										<?endif;?>
                                        <div class="go-final-bracket__score 
										<?if($arResult['ITEMS'][$RightTop]["PROPERTIES"]["COUNT_TEAM_1"]["VALUE"] > $arResult['ITEMS'][$RightTop]["PROPERTIES"]["COUNT_TEAM_2"]["VALUE"]):?>
											go-final-bracket__score_winner
										<?else:?>
											quarter
										<?endif?>
												borders">
                                            <div class="go-final-bracket__score-txt"><?=$arResult['ITEMS'][$RightTop]["PROPERTIES"]["COUNT_TEAM_1"]["VALUE"]?></div>
                                        </div>
                                        <div class="go-final-bracket__team-info">
                                            <div class="go-final-bracket__team-logo">
											<img src="<?=CFile::GetPath($arResult['ITEMS'][$RightTop]["PROPERTIES"]["LOGO_1"]["VALUE"])?>" alt="<?=$arResult['ITEMS'][$RightTop]["PROPERTIES"]["TITLE_TEAM_1"]["VALUE"]?>"></div>
                                        </div>
                                    </div>
                                    <div class="go-final-bracket__team">
										<?if(!empty($arResult['ITEMS'][$RightTop]["PROPERTIES"]["COUNT3_TEAM_2"]["VALUE"]) || $arResult['ITEMS'][$RightTop]["PROPERTIES"]["COUNT3_TEAM_2"]["VALUE"] == '0'):?> 
											<div class="go-final-bracket__score borders <?if($arResult['ITEMS'][$RightTop]["PROPERTIES"]["COUNT3_TEAM_2"]["VALUE"] > $arResult['ITEMS'][$RightTop]["PROPERTIES"]["COUNT3_TEAM_1"]["VALUE"]):?>go-final-bracket__score_winner<?endif?>">
												<div class="go-final-bracket__score-txt"><?=$arResult['ITEMS'][$RightTop]["PROPERTIES"]["COUNT3_TEAM_2"]["VALUE"]?></div>
											</div>
										<?endif;?>
										<?if(!empty($arResult['ITEMS'][$RightTop]["PROPERTIES"]["COUNT2_TEAM_2"]["VALUE"]) || $arResult['ITEMS'][$RightTop]["PROPERTIES"]["COUNT2_TEAM_2"]["VALUE"] == '0'):?> 
											<div class="go-final-bracket__score borders <?if($arResult['ITEMS'][$RightTop]["PROPERTIES"]["COUNT2_TEAM_2"]["VALUE"] > $arResult['ITEMS'][$RightTop]["PROPERTIES"]["COUNT2_TEAM_1"]["VALUE"]):?>go-final-bracket__score_winner<?endif?>">
												<div class="go-final-bracket__score-txt"><?=$arResult['ITEMS'][$RightTop]["PROPERTIES"]["COUNT2_TEAM_2"]["VALUE"]?></div>
											</div>
										<?endif;?>
                                        <div class="go-final-bracket__score
										<?if($arResult['ITEMS'][$RightTop]["PROPERTIES"]["COUNT_TEAM_2"]["VALUE"] > $arResult['ITEMS'][$RightTop]["PROPERTIES"]["COUNT_TEAM_1"]["VALUE"]):?>
											go-final-bracket__score_winner
										<?else:?>
											quarter
										<?endif?>
										borders">
                                            <div class="go-final-bracket__score-txt"><?=$arResult['ITEMS'][$RightTop]["PROPERTIES"]["COUNT_TEAM_2"]["VALUE"]?></div>
                                        </div>
                                        <div class="go-final-bracket__team-info">
                                            <div class="go-final-bracket__team-logo"><img
                                                        src="<?=CFile::GetPath($arResult['ITEMS'][$RightTop]["PROPERTIES"]["LOGO_2"]["VALUE"])?>" alt="<?=$arResult['ITEMS'][$RightTop]["PROPERTIES"]["TITLE_TEAM_1"]["VALUE"]?>"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="go-final-bracket__game">
                                    <div class="go-final-bracket__team">
										<?if(!empty($arResult['ITEMS'][$RightBot]["PROPERTIES"]["COUNT3_TEAM_1"]["VALUE"]) || $arResult['ITEMS'][$RightBot]["PROPERTIES"]["COUNT3_TEAM_1"]["VALUE"] == '0'):?> 
											<div class="go-final-bracket__score borders <?if($arResult['ITEMS'][$RightBot]["PROPERTIES"]["COUNT3_TEAM_1"]["VALUE"] > $arResult['ITEMS'][$RightBot]["PROPERTIES"]["COUNT3_TEAM_2"]["VALUE"]):?>go-final-bracket__score_winner<?endif?>">
												<div class="go-final-bracket__score-txt"><?=$arResult['ITEMS'][$RightBot]["PROPERTIES"]["COUNT3_TEAM_1"]["VALUE"]?></div>
											</div>
										<?endif;?>
										<?if(!empty($arResult['ITEMS'][$RightBot]["PROPERTIES"]["COUNT2_TEAM_1"]["VALUE"]) || $arResult['ITEMS'][$RightBot]["PROPERTIES"]["COUNT2_TEAM_1"]["VALUE"] == '0'):?> 
											<div class="go-final-bracket__score borders <?if($arResult['ITEMS'][$RightBot]["PROPERTIES"]["COUNT2_TEAM_1"]["VALUE"] > $arResult['ITEMS'][$RightBot]["PROPERTIES"]["COUNT2_TEAM_2"]["VALUE"]):?>go-final-bracket__score_winner<?endif?>">
												<div class="go-final-bracket__score-txt"><?=$arResult['ITEMS'][$RightBot]["PROPERTIES"]["COUNT2_TEAM_1"]["VALUE"]?></div>
											</div>
										<?endif;?>
                                        <div class="go-final-bracket__score 
										<?if($arResult['ITEMS'][$RightBot]["PROPERTIES"]["COUNT_TEAM_1"]["VALUE"] > $arResult['ITEMS'][$RightBot]["PROPERTIES"]["COUNT_TEAM_2"]["VALUE"]):?>
											go-final-bracket__score_winner
										<?else:?>
											quarter
										<?endif?>
										borders">
                                            <div class="go-final-bracket__score-txt"><?=$arResult['ITEMS'][$RightBot]["PROPERTIES"]["COUNT_TEAM_1"]["VALUE"]?></div>
                                        </div>
                                       
                                        <div class="go-final-bracket__team-info">
                                            <div class="go-final-bracket__team-logo"><img src="<?=CFile::GetPath($arResult['ITEMS'][$RightBot]["PROPERTIES"]["LOGO_1"]["VALUE"])?>" alt="<?=$arResult['ITEMS'][$RightBot]["PROPERTIES"]["TITLE_TEAM_1"]["VALUE"]?>"></div>
                                        </div>
                                    </div>
                                    <div class="go-final-bracket__team">
										<?if(!empty($arResult['ITEMS'][$RightBot]["PROPERTIES"]["COUNT3_TEAM_2"]["VALUE"]) || $arResult['ITEMS'][$RightBot]["PROPERTIES"]["COUNT3_TEAM_2"]["VALUE"] == '0'):?> 
											<div class="go-final-bracket__score borders <?if($arResult['ITEMS'][$RightBot]["PROPERTIES"]["COUNT3_TEAM_2"]["VALUE"] > $arResult['ITEMS'][$RightBot]["PROPERTIES"]["COUNT3_TEAM_1"]["VALUE"]):?>go-final-bracket__score_winner<?endif?>">
												<div class="go-final-bracket__score-txt"><?=$arResult['ITEMS'][$RightBot]["PROPERTIES"]["COUNT3_TEAM_2"]["VALUE"]?></div>
											</div>
										<?endif;?>
										<?if(!empty($arResult['ITEMS'][$RightBot]["PROPERTIES"]["COUNT2_TEAM_2"]["VALUE"]) || $arResult['ITEMS'][$RightBot]["PROPERTIES"]["COUNT2_TEAM_2"]["VALUE"] == '0'):?> 
											<div class="go-final-bracket__score borders <?if($arResult['ITEMS'][$RightBot]["PROPERTIES"]["COUNT2_TEAM_2"]["VALUE"] > $arResult['ITEMS'][$RightBot]["PROPERTIES"]["COUNT2_TEAM_1"]["VALUE"]):?>go-final-bracket__score_winner<?endif?>">
												<div class="go-final-bracket__score-txt"><?=$arResult['ITEMS'][$RightBot]["PROPERTIES"]["COUNT2_TEAM_2"]["VALUE"]?></div>
											</div>
										<?endif;?>
                                        <div class="go-final-bracket__score
										<?if($arResult['ITEMS'][$RightBot]["PROPERTIES"]["COUNT_TEAM_2"]["VALUE"] > $arResult['ITEMS'][$RightBot]["PROPERTIES"]["COUNT_TEAM_1"]["VALUE"]):?>
											go-final-bracket__score_winner
										<?else:?>
											quarter
										<?endif?>
										borders">
                                            <div class="go-final-bracket__score-txt"><?=$arResult['ITEMS'][$RightBot]["PROPERTIES"]["COUNT_TEAM_2"]["VALUE"]?></div>
                                        </div>
                                        <div class="go-final-bracket__team-info">
                                            <div class="go-final-bracket__team-logo"><img src="<?=CFile::GetPath($arResult['ITEMS'][$RightBot]["PROPERTIES"]["LOGO_2"]["VALUE"])?>" alt="<?=$arResult['ITEMS'][$RightBot]["PROPERTIES"]["TITLE_TEAM_2"]["VALUE"]?>"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="go-final-bracket__connecting-block">
                                <div class="go-final-bracket__connecting vertical-connecting"><img
                                            src="/local/templates/new_ru/img/vertLineCurved.png" alt="vertLine"></div>
                                <div class="go-final-bracket__connecting vertical-connecting"><img
                                            src="/local/templates/new_ru/img/vertLineCurved.png" alt="vertLine"></div>
                            </div>
                            <div class="go-final-bracket__connecting-block">
                                <div class="go-final-bracket__connecting gorizontal-connecting"><img
                                            src="/local/templates/new_ru/img/gorLine.png" alt="gorLine"></div>
                            </div>
							<?// 1/2 правый блок?>
                            <div class="go-final-bracket__quarter-result rotate">
                                <div class="go-final-bracket__game semi-match-block">
                                    <div class="go-final-bracket__team">
										<?if(!empty($arResult['ITEMS'][$Right]["PROPERTIES"]["COUNT3_TEAM_1"]["VALUE"]) || $arResult['ITEMS'][$Right]["PROPERTIES"]["COUNT3_TEAM_1"]["VALUE"] == '0'):?> 
											<div class="go-final-bracket__score borders <?if($arResult['ITEMS'][$Right]["PROPERTIES"]["COUNT3_TEAM_1"]["VALUE"] > $arResult['ITEMS'][$Right]["PROPERTIES"]["COUNT3_TEAM_2"]["VALUE"]):?>go-final-bracket__score_winner<?endif?>">
												<div class="go-final-bracket__score-txt"><?=$arResult['ITEMS'][$Right]["PROPERTIES"]["COUNT3_TEAM_1"]["VALUE"]?></div>
											</div>
										<?endif;?>
										<?if(!empty($arResult['ITEMS'][$Right]["PROPERTIES"]["COUNT2_TEAM_1"]["VALUE"]) || $arResult['ITEMS'][$Right]["PROPERTIES"]["COUNT2_TEAM_1"]["VALUE"] == '0'):?> 
											<div class="go-final-bracket__score borders <?if($arResult['ITEMS'][$Right]["PROPERTIES"]["COUNT2_TEAM_1"]["VALUE"] > $arResult['ITEMS'][$Right]["PROPERTIES"]["COUNT2_TEAM_2"]["VALUE"]):?>go-final-bracket__score_winner<?endif?>">
												<div class="go-final-bracket__score-txt"><?=$arResult['ITEMS'][$Right]["PROPERTIES"]["COUNT2_TEAM_1"]["VALUE"]?></div>
											</div>
										<?endif;?>
                                        <div class="go-final-bracket__score
										<?if($arResult['ITEMS'][$Right]["PROPERTIES"]["COUNT_TEAM_1"]["VALUE"] > $arResult['ITEMS'][$Right]["PROPERTIES"]["COUNT_TEAM_2"]["VALUE"]):?>
											go-final-bracket__score_winner
										<?else:?>
											quarter
										<?endif?>
										borders">
                                            <div class="go-final-bracket__score-txt"><?=$arResult['ITEMS'][$Right]["PROPERTIES"]["COUNT_TEAM_1"]["VALUE"]?></div>
                                        </div>
                                        <div class="go-final-bracket__team-info">
                                            <div class="go-final-bracket__team-logo"><img src="<?=CFile::GetPath($arResult['ITEMS'][$Right]["PROPERTIES"]["LOGO_1"]["VALUE"])?>" alt="<?=$arResult['ITEMS'][$Right]["PROPERTIES"]["TITLE_TEAM_1"]["VALUE"]?>"></div>
                                        </div>
                                    </div>
                                    <div class="go-final-bracket__team">
                                       <?if(!empty($arResult['ITEMS'][$Right]["PROPERTIES"]["COUNT3_TEAM_2"]["VALUE"]) || $arResult['ITEMS'][$Right]["PROPERTIES"]["COUNT3_TEAM_2"]["VALUE"] == '0'):?> 
											<div class="go-final-bracket__score borders <?if($arResult['ITEMS'][$Right]["PROPERTIES"]["COUNT3_TEAM_2"]["VALUE"] > $arResult['ITEMS'][$Right]["PROPERTIES"]["COUNT3_TEAM_1"]["VALUE"]):?>go-final-bracket__score_winner<?endif?>">
												<div class="go-final-bracket__score-txt"><?=$arResult['ITEMS'][$Right]["PROPERTIES"]["COUNT3_TEAM_2"]["VALUE"]?></div>
											</div>
										<?endif;?>
										<?if(!empty($arResult['ITEMS'][$Right]["PROPERTIES"]["COUNT2_TEAM_2"]["VALUE"]) || $arResult['ITEMS'][$Right]["PROPERTIES"]["COUNT2_TEAM_2"]["VALUE"] == '0'):?> 
											<div class="go-final-bracket__score borders <?if($arResult['ITEMS'][$Right]["PROPERTIES"]["COUNT2_TEAM_2"]["VALUE"] > $arResult['ITEMS'][$Right]["PROPERTIES"]["COUNT2_TEAM_1"]["VALUE"]):?>go-final-bracket__score_winner<?endif?>">
												<div class="go-final-bracket__score-txt"><?=$arResult['ITEMS'][$Right]["PROPERTIES"]["COUNT2_TEAM_2"]["VALUE"]?></div>
											</div>
										<?endif;?>
                                        <div class="go-final-bracket__score
										<?if($arResult['ITEMS'][$Right]["PROPERTIES"]["COUNT_TEAM_2"]["VALUE"] > $arResult['ITEMS'][$Right]["PROPERTIES"]["COUNT_TEAM_1"]["VALUE"]):?>
											go-final-bracket__score_winner
										<?else:?>
											quarter
										<?endif?>
										borders">
                                            <div class="go-final-bracket__score-txt"><?=$arResult['ITEMS'][$Right]["PROPERTIES"]["COUNT_TEAM_2"]["VALUE"]?></div>
                                        </div>
                                        <div class="go-final-bracket__team-info">
                                            <div class="go-final-bracket__team-logo"><img src="<?=CFile::GetPath($arResult['ITEMS'][$Right]["PROPERTIES"]["LOGO_2"]["VALUE"])?>" alt="<?=$arResult['ITEMS'][$Right]["PROPERTIES"]["TITLE_TEAM_2"]["VALUE"]?>"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="go-final-bracket__connecting-block">
                                <div class="go-final-bracket__connecting gorizontal-connecting"><img
                                            src="/local/templates/new_ru/img/gorLine.png" alt="gorLine"></div>
                            </div>
                        </div>
                    </div>
					<?// Мобильная часть ?>
                    <div class="go-final-bracket__mobile-result">
                        <div class="go-final-bracket__stage-mobile">
                            <div class="go-final-bracket__current-stage">1/4</div>
                            <div class="go-final-bracket__quarter-result-block">
                                <div class="go-final-bracket__quarter-result">
                                    <div class="go-final-bracket__game">
										<div class="go-final-bracket__team">
											<div class="go-final-bracket__team-info">
												<div class="go-final-bracket__team-logo">
												<img src="<?=CFile::GetPath($arResult['ITEMS'][$LeftTop]["PROPERTIES"]["LOGO_1"]["VALUE"])?>" alt="<?=$arResult['ITEMS'][$LeftTop]["PROPERTIES"]["TITLE_TEAM_1"]["VALUE"]?>"></div>
											</div>
											<div class="go-final-bracket__score 
											<?if($arResult['ITEMS'][$LeftTop]["PROPERTIES"]["COUNT_TEAM_1"]["VALUE"] > $arResult['ITEMS'][$LeftTop]["PROPERTIES"]["COUNT_TEAM_2"]["VALUE"]):?>
												go-final-bracket__score_winner
											<?else:?>
												quarter
											<?endif?>
											borders">
												<div class="go-final-bracket__score-txt"><?=$arResult['ITEMS'][$LeftTop]["PROPERTIES"]["COUNT_TEAM_1"]["VALUE"]?></div>
											</div>
											<?if(!empty($arResult['ITEMS'][$LeftTop]["PROPERTIES"]["COUNT2_TEAM_1"]["VALUE"]) || $arResult['ITEMS'][$LeftTop]["PROPERTIES"]["COUNT2_TEAM_1"]["VALUE"] == '0'):?> 
												<div class="go-final-bracket__score borders <?if($arResult['ITEMS'][$LeftTop]["PROPERTIES"]["COUNT2_TEAM_1"]["VALUE"] > $arResult['ITEMS'][$LeftTop]["PROPERTIES"]["COUNT2_TEAM_2"]["VALUE"]):?>go-final-bracket__score_winner<?endif?>">
													<div class="go-final-bracket__score-txt"><?=$arResult['ITEMS'][$LeftTop]["PROPERTIES"]["COUNT2_TEAM_1"]["VALUE"]?></div>
												</div>
											<?endif;?>
											<?if(!empty($arResult['ITEMS'][$LeftTop]["PROPERTIES"]["COUNT3_TEAM_1"]["VALUE"]) || $arResult['ITEMS'][$LeftTop]["PROPERTIES"]["COUNT3_TEAM_1"]["VALUE"] == '0'):?> 
												<div class="go-final-bracket__score borders <?if($arResult['ITEMS'][$LeftTop]["PROPERTIES"]["COUNT3_TEAM_1"]["VALUE"] > $arResult['ITEMS'][$LeftTop]["PROPERTIES"]["COUNT3_TEAM_2"]["VALUE"]):?>go-final-bracket__score_winner<?endif?>">
													<div class="go-final-bracket__score-txt"><?=$arResult['ITEMS'][$LeftTop]["PROPERTIES"]["COUNT3_TEAM_1"]["VALUE"]?></div>
												</div>
											<?endif;?>
										</div>
										<div class="go-final-bracket__team">
											<div class="go-final-bracket__team-info">
												<div class="go-final-bracket__team-logo">
													<img src="<?=CFile::GetPath($arResult['ITEMS'][$LeftTop]["PROPERTIES"]["LOGO_2"]["VALUE"])?>" alt="<?=$arResult['ITEMS'][$LeftTop]["PROPERTIES"]["TITLE_TEAM_1"]["VALUE"]?>"></div>
											</div>
											<div class="go-final-bracket__score
											<?if($arResult['ITEMS'][$LeftTop]["PROPERTIES"]["COUNT_TEAM_2"]["VALUE"] > $arResult['ITEMS'][$LeftTop]["PROPERTIES"]["COUNT_TEAM_1"]["VALUE"]):?>
												go-final-bracket__score_winner
											<?else:?>
												quarter
											<?endif?>
											borders">
												<div class="go-final-bracket__score-txt"><?=$arResult['ITEMS'][$LeftTop]["PROPERTIES"]["COUNT_TEAM_2"]["VALUE"]?></div>
											</div>
											<?if(!empty($arResult['ITEMS'][$LeftTop]["PROPERTIES"]["COUNT2_TEAM_2"]["VALUE"]) || $arResult['ITEMS'][$LeftTop]["PROPERTIES"]["COUNT2_TEAM_2"]["VALUE"] == '0'):?> 
											<div class="go-final-bracket__score borders <?if($arResult['ITEMS'][$LeftTop]["PROPERTIES"]["COUNT2_TEAM_2"]["VALUE"] > $arResult['ITEMS'][$LeftTop]["PROPERTIES"]["COUNT2_TEAM_1"]["VALUE"]):?>go-final-bracket__score_winner<?endif?>">
												<div class="go-final-bracket__score-txt"><?=$arResult['ITEMS'][$LeftTop]["PROPERTIES"]["COUNT2_TEAM_2"]["VALUE"]?></div>
											</div>
										<?endif;?>
										<?if(!empty($arResult['ITEMS'][$LeftTop]["PROPERTIES"]["COUNT3_TEAM_2"]["VALUE"]) || $arResult['ITEMS'][$LeftTop]["PROPERTIES"]["COUNT3_TEAM_2"]["VALUE"] == '0'):?> 
											<div class="go-final-bracket__score borders <?if($arResult['ITEMS'][$LeftTop]["PROPERTIES"]["COUNT3_TEAM_2"]["VALUE"] > $arResult['ITEMS'][$LeftTop]["PROPERTIES"]["COUNT3_TEAM_1"]["VALUE"]):?>go-final-bracket__score_winner<?endif?>">
												<div class="go-final-bracket__score-txt"><?=$arResult['ITEMS'][$LeftTop]["PROPERTIES"]["COUNT3_TEAM_2"]["VALUE"]?></div>
											</div>
										<?endif;?>
										</div>
                                    </div>
                                    <div class="go-final-bracket__game">
										<div class="go-final-bracket__team">
											<div class="go-final-bracket__team-info">
												<div class="go-final-bracket__team-logo">
												<img src="<?=CFile::GetPath($arResult['ITEMS'][$LeftBot]["PROPERTIES"]["LOGO_1"]["VALUE"])?>" alt="<?=$arResult['ITEMS'][$LeftBot]["PROPERTIES"]["TITLE_TEAM_1"]["VALUE"]?>"></div>
											</div>
											<div class="go-final-bracket__score
											<?if($arResult['ITEMS'][$LeftBot]["PROPERTIES"]["COUNT_TEAM_1"]["VALUE"] > $arResult['ITEMS'][$LeftBot]["PROPERTIES"]["COUNT_TEAM_2"]["VALUE"]):?>
												go-final-bracket__score_winner
											<?else:?>
												quarter
											<?endif?>
											borders">
												<div class="go-final-bracket__score-txt"><?=$arResult['ITEMS'][$LeftBot]["PROPERTIES"]["COUNT_TEAM_1"]["VALUE"]?></div>
											</div>
											<?if(!empty($arResult['ITEMS'][$LeftBot]["PROPERTIES"]["COUNT2_TEAM_1"]["VALUE"]) || $arResult['ITEMS'][$LeftBot]["PROPERTIES"]["COUNT2_TEAM_1"]["VALUE"] == '0'):?> 
												<div class="go-final-bracket__score borders <?if($arResult['ITEMS'][$LeftBot]["PROPERTIES"]["COUNT2_TEAM_1"]["VALUE"] > $arResult['ITEMS'][$LeftBot]["PROPERTIES"]["COUNT2_TEAM_2"]["VALUE"]):?>go-final-bracket__score_winner<?endif?>">
													<div class="go-final-bracket__score-txt"><?=$arResult['ITEMS'][$LeftBot]["PROPERTIES"]["COUNT2_TEAM_1"]["VALUE"]?></div>
												</div>
											<?endif;?>
											<?if(!empty($arResult['ITEMS'][$LeftBot]["PROPERTIES"]["COUNT3_TEAM_1"]["VALUE"]) || $arResult['ITEMS'][$LeftBot]["PROPERTIES"]["COUNT3_TEAM_1"]["VALUE"] == '0'):?> 
												<div class="go-final-bracket__score borders <?if($arResult['ITEMS'][$LeftBot]["PROPERTIES"]["COUNT3_TEAM_1"]["VALUE"] > $arResult['ITEMS'][$LeftBot]["PROPERTIES"]["COUNT3_TEAM_2"]["VALUE"]):?>go-final-bracket__score_winner<?endif?>">
													<div class="go-final-bracket__score-txt"><?=$arResult['ITEMS'][$LeftBot]["PROPERTIES"]["COUNT3_TEAM_1"]["VALUE"]?></div>
												</div>
											<?endif;?>
										</div>
										<div class="go-final-bracket__team">
											<div class="go-final-bracket__team-info">
												<div class="go-final-bracket__team-logo">
												<img src="<?=CFile::GetPath($arResult['ITEMS'][$LeftBot]["PROPERTIES"]["LOGO_2"]["VALUE"])?>" alt="<?=$arResult['ITEMS'][$LeftBot]["PROPERTIES"]["TITLE_TEAM_2"]["VALUE"]?>" alt="bull"></div>
											</div>
											<div class="go-final-bracket__score
											<?if($arResult['ITEMS'][$LeftBot]["PROPERTIES"]["COUNT_TEAM_2"]["VALUE"] > $arResult['ITEMS'][$LeftBot]["PROPERTIES"]["COUNT_TEAM_1"]["VALUE"]):?>
												go-final-bracket__score_winner
											<?else:?>
												quarter
											<?endif?>
											borders">
												<div class="go-final-bracket__score-txt"><?=$arResult['ITEMS'][$LeftBot]["PROPERTIES"]["COUNT_TEAM_2"]["VALUE"]?></div>
											</div>
											<?if(!empty($arResult['ITEMS'][$LeftBot]["PROPERTIES"]["COUNT2_TEAM_2"]["VALUE"]) || $arResult['ITEMS'][$LeftBot]["PROPERTIES"]["COUNT2_TEAM_2"]["VALUE"] == '0'):?> 
												<div class="go-final-bracket__score borders <?if($arResult['ITEMS'][$LeftBot]["PROPERTIES"]["COUNT2_TEAM_2"]["VALUE"] > $arResult['ITEMS'][$LeftBot]["PROPERTIES"]["COUNT2_TEAM_1"]["VALUE"]):?>go-final-bracket__score_winner<?endif?>">
													<div class="go-final-bracket__score-txt"><?=$arResult['ITEMS'][$LeftBot]["PROPERTIES"]["COUNT2_TEAM_2"]["VALUE"]?></div>
												</div>
											<?endif;?>
											<?if(!empty($arResult['ITEMS'][$LeftBot]["PROPERTIES"]["COUNT3_TEAM_2"]["VALUE"]) || $arResult['ITEMS'][$LeftBot]["PROPERTIES"]["COUNT3_TEAM_2"]["VALUE"] == '0'):?> 
												<div class="go-final-bracket__score borders <?if($arResult['ITEMS'][$LeftBot]["PROPERTIES"]["COUNT3_TEAM_2"]["VALUE"] > $arResult['ITEMS'][$LeftBot]["PROPERTIES"]["COUNT3_TEAM_1"]["VALUE"]):?>go-final-bracket__score_winner<?endif?>">
													<div class="go-final-bracket__score-txt"><?=$arResult['ITEMS'][$LeftBot]["PROPERTIES"]["COUNT3_TEAM_2"]["VALUE"]?></div>
												</div>
											<?endif;?>
										</div>
                                    </div>
                                </div>
                                <div class="go-final-bracket__dividing-line"><img class="mobile-vert-line"
                                                                                  src="/local/templates/new_ru/img/vertLine.png" alt="Line"><img
                                            class="line1-ellipse ellipse" src="/local/templates/new_ru/img/ellipseMini.png"
                                            alt="EllipseMini"><img class="line2-ellipse ellipse"
                                                                   src="/local/templates/new_ru/img/ellipseMini.png" alt="EllipseMini"><img
                                            class="line3-ellipse ellipse" src="/local/templates/new_ru/img/ellipseMini.png"
                                            alt="EllipseMini"><img class="line4-ellipse ellipse"
                                                                   src="/local/templates/new_ru/img/ellipseMini.png" alt="EllipseMini"></div>
                                <div class="go-final-bracket__quarter-result snuggle-left">
                                    <div class="go-final-bracket__game">
										<div class="go-final-bracket__team">
											<?if(!empty($arResult['ITEMS'][$RightTop]["PROPERTIES"]["COUNT3_TEAM_1"]["VALUE"]) || $arResult['ITEMS'][$RightTop]["PROPERTIES"]["COUNT3_TEAM_1"]["VALUE"] == '0'):?> 
												<div class="go-final-bracket__score borders <?if($arResult['ITEMS'][$RightTop]["PROPERTIES"]["COUNT3_TEAM_1"]["VALUE"] > $arResult['ITEMS'][$RightTop]["PROPERTIES"]["COUNT3_TEAM_2"]["VALUE"]):?>go-final-bracket__score_winner<?endif?>">
													<div class="go-final-bracket__score-txt"><?=$arResult['ITEMS'][$RightTop]["PROPERTIES"]["COUNT3_TEAM_1"]["VALUE"]?></div>
												</div>
											<?endif;?>
											<?if(!empty($arResult['ITEMS'][$RightTop]["PROPERTIES"]["COUNT2_TEAM_1"]["VALUE"]) || $arResult['ITEMS'][$RightTop]["PROPERTIES"]["COUNT2_TEAM_1"]["VALUE"] == '0'):?> 
												<div class="go-final-bracket__score borders <?if($arResult['ITEMS'][$RightTop]["PROPERTIES"]["COUNT2_TEAM_1"]["VALUE"] > $arResult['ITEMS'][$RightTop]["PROPERTIES"]["COUNT2_TEAM_2"]["VALUE"]):?>go-final-bracket__score_winner<?endif?>">
													<div class="go-final-bracket__score-txt"><?=$arResult['ITEMS'][$RightTop]["PROPERTIES"]["COUNT2_TEAM_1"]["VALUE"]?></div>
												</div>
										<?endif;?>
											<div class="go-final-bracket__score 
											<?if($arResult['ITEMS'][$RightTop]["PROPERTIES"]["COUNT_TEAM_1"]["VALUE"] > $arResult['ITEMS'][$RightTop]["PROPERTIES"]["COUNT_TEAM_2"]["VALUE"]):?>
												go-final-bracket__score_winner
											<?else:?>
												quarter
											<?endif?>
													borders">
												<div class="go-final-bracket__score-txt"><?=$arResult['ITEMS'][$RightTop]["PROPERTIES"]["COUNT_TEAM_1"]["VALUE"]?></div>
											</div>
											<div class="go-final-bracket__team-info">
												<div class="go-final-bracket__team-logo">
												<img src="<?=CFile::GetPath($arResult['ITEMS'][$RightTop]["PROPERTIES"]["LOGO_1"]["VALUE"])?>" alt="<?=$arResult['ITEMS'][$RightTop]["PROPERTIES"]["TITLE_TEAM_1"]["VALUE"]?>"></div>
											</div>
										</div>
										<div class="go-final-bracket__team">
											<?if(!empty($arResult['ITEMS'][$RightTop]["PROPERTIES"]["COUNT3_TEAM_2"]["VALUE"]) || $arResult['ITEMS'][$RightTop]["PROPERTIES"]["COUNT3_TEAM_2"]["VALUE"] == '0'):?> 
												<div class="go-final-bracket__score borders <?if($arResult['ITEMS'][$RightTop]["PROPERTIES"]["COUNT3_TEAM_2"]["VALUE"] > $arResult['ITEMS'][$RightTop]["PROPERTIES"]["COUNT3_TEAM_1"]["VALUE"]):?>go-final-bracket__score_winner<?endif?>">
													<div class="go-final-bracket__score-txt"><?=$arResult['ITEMS'][$RightTop]["PROPERTIES"]["COUNT3_TEAM_2"]["VALUE"]?></div>
												</div>
											<?endif;?>
											<?if(!empty($arResult['ITEMS'][$RightTop]["PROPERTIES"]["COUNT2_TEAM_2"]["VALUE"]) || $arResult['ITEMS'][$RightTop]["PROPERTIES"]["COUNT2_TEAM_2"]["VALUE"] == '0'):?> 
												<div class="go-final-bracket__score borders <?if($arResult['ITEMS'][$RightTop]["PROPERTIES"]["COUNT2_TEAM_2"]["VALUE"] > $arResult['ITEMS'][$RightTop]["PROPERTIES"]["COUNT2_TEAM_1"]["VALUE"]):?>go-final-bracket__score_winner<?endif?>">
													<div class="go-final-bracket__score-txt"><?=$arResult['ITEMS'][$RightTop]["PROPERTIES"]["COUNT2_TEAM_2"]["VALUE"]?></div>
												</div>
											<?endif;?>
											<div class="go-final-bracket__score
											<?if($arResult['ITEMS'][$RightTop]["PROPERTIES"]["COUNT_TEAM_2"]["VALUE"] > $arResult['ITEMS'][$RightTop]["PROPERTIES"]["COUNT_TEAM_1"]["VALUE"]):?>
												go-final-bracket__score_winner
											<?else:?>
												quarter
											<?endif?>
											borders">
												<div class="go-final-bracket__score-txt"><?=$arResult['ITEMS'][$RightTop]["PROPERTIES"]["COUNT_TEAM_2"]["VALUE"]?></div>
											</div>
											<div class="go-final-bracket__team-info">
												<div class="go-final-bracket__team-logo"><img
															src="<?=CFile::GetPath($arResult['ITEMS'][$RightTop]["PROPERTIES"]["LOGO_2"]["VALUE"])?>" alt="<?=$arResult['ITEMS'][$RightTop]["PROPERTIES"]["TITLE_TEAM_1"]["VALUE"]?>"></div>
											</div>
										</div>
                                    </div>
                                    <div class="go-final-bracket__game">
										<div class="go-final-bracket__team">
											<?if(!empty($arResult['ITEMS'][$RightBot]["PROPERTIES"]["COUNT3_TEAM_1"]["VALUE"]) || $arResult['ITEMS'][$RightBot]["PROPERTIES"]["COUNT3_TEAM_1"]["VALUE"] == '0'):?> 
												<div class="go-final-bracket__score borders <?if($arResult['ITEMS'][$RightBot]["PROPERTIES"]["COUNT3_TEAM_1"]["VALUE"] > $arResult['ITEMS'][$RightBot]["PROPERTIES"]["COUNT3_TEAM_2"]["VALUE"]):?>go-final-bracket__score_winner<?endif?>">
													<div class="go-final-bracket__score-txt"><?=$arResult['ITEMS'][$RightBot]["PROPERTIES"]["COUNT3_TEAM_1"]["VALUE"]?></div>
												</div>
											<?endif;?>
											<?if(!empty($arResult['ITEMS'][$RightBot]["PROPERTIES"]["COUNT2_TEAM_1"]["VALUE"]) || $arResult['ITEMS'][$RightBot]["PROPERTIES"]["COUNT2_TEAM_1"]["VALUE"] == '0'):?> 
												<div class="go-final-bracket__score borders <?if($arResult['ITEMS'][$RightBot]["PROPERTIES"]["COUNT2_TEAM_1"]["VALUE"] > $arResult['ITEMS'][$RightBot]["PROPERTIES"]["COUNT2_TEAM_2"]["VALUE"]):?>go-final-bracket__score_winner<?endif?>">
													<div class="go-final-bracket__score-txt"><?=$arResult['ITEMS'][$RightBot]["PROPERTIES"]["COUNT2_TEAM_1"]["VALUE"]?></div>
												</div>
											<?endif;?>
											<div class="go-final-bracket__score 
											<?if($arResult['ITEMS'][$RightBot]["PROPERTIES"]["COUNT_TEAM_1"]["VALUE"] > $arResult['ITEMS'][$RightBot]["PROPERTIES"]["COUNT_TEAM_2"]["VALUE"]):?>
												go-final-bracket__score_winner
											<?else:?>
												quarter
											<?endif?>
											borders">
												<div class="go-final-bracket__score-txt"><?=$arResult['ITEMS'][$RightBot]["PROPERTIES"]["COUNT_TEAM_1"]["VALUE"]?></div>
											</div>
										   
											<div class="go-final-bracket__team-info">
												<div class="go-final-bracket__team-logo"><img src="<?=CFile::GetPath($arResult['ITEMS'][$RightBot]["PROPERTIES"]["LOGO_1"]["VALUE"])?>" alt="<?=$arResult['ITEMS'][$RightBot]["PROPERTIES"]["TITLE_TEAM_1"]["VALUE"]?>"></div>
											</div>
										</div>
										<div class="go-final-bracket__team">
											<?if(!empty($arResult['ITEMS'][$RightBot]["PROPERTIES"]["COUNT3_TEAM_2"]["VALUE"]) || $arResult['ITEMS'][$RightBot]["PROPERTIES"]["COUNT3_TEAM_2"]["VALUE"] == '0'):?> 
												<div class="go-final-bracket__score borders <?if($arResult['ITEMS'][$RightBot]["PROPERTIES"]["COUNT3_TEAM_2"]["VALUE"] > $arResult['ITEMS'][$RightBot]["PROPERTIES"]["COUNT3_TEAM_1"]["VALUE"]):?>go-final-bracket__score_winner<?endif?>">
													<div class="go-final-bracket__score-txt"><?=$arResult['ITEMS'][$RightBot]["PROPERTIES"]["COUNT3_TEAM_2"]["VALUE"]?></div>
												</div>
											<?endif;?>
											<?if(!empty($arResult['ITEMS'][$RightBot]["PROPERTIES"]["COUNT2_TEAM_2"]["VALUE"]) || $arResult['ITEMS'][$RightBot]["PROPERTIES"]["COUNT2_TEAM_2"]["VALUE"] == '0'):?> 
												<div class="go-final-bracket__score borders <?if($arResult['ITEMS'][$RightBot]["PROPERTIES"]["COUNT2_TEAM_2"]["VALUE"] > $arResult['ITEMS'][$RightBot]["PROPERTIES"]["COUNT2_TEAM_1"]["VALUE"]):?>go-final-bracket__score_winner<?endif?>">
													<div class="go-final-bracket__score-txt"><?=$arResult['ITEMS'][$RightBot]["PROPERTIES"]["COUNT2_TEAM_2"]["VALUE"]?></div>
												</div>
											<?endif;?>
											<div class="go-final-bracket__score
											<?if($arResult['ITEMS'][$RightBot]["PROPERTIES"]["COUNT_TEAM_2"]["VALUE"] > $arResult['ITEMS'][$RightBot]["PROPERTIES"]["COUNT_TEAM_1"]["VALUE"]):?>
												go-final-bracket__score_winner
											<?else:?>
												quarter
											<?endif?>
											borders">
												<div class="go-final-bracket__score-txt"><?=$arResult['ITEMS'][$RightBot]["PROPERTIES"]["COUNT_TEAM_2"]["VALUE"]?></div>
											</div>
											<div class="go-final-bracket__team-info">
												<div class="go-final-bracket__team-logo"><img src="<?=CFile::GetPath($arResult['ITEMS'][$RightBot]["PROPERTIES"]["LOGO_2"]["VALUE"])?>" alt="<?=$arResult['ITEMS'][$RightBot]["PROPERTIES"]["TITLE_TEAM_2"]["VALUE"]?>"></div>
											</div>
										</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="go-final-bracket__stage-mobile">
                            <div class="go-final-bracket__current-stage margin-top-10">1/2</div>
                            <div class="go-final-bracket__quarter-result-block go-final-bracket__quarter-result-block-semi">
                                <div class="go-final-bracket__quarter-result">
                                    <div class="go-final-bracket__game">
										<div class="go-final-bracket__team">
											<div class="go-final-bracket__team-info">
												<div class="go-final-bracket__team-logo"><img src="<?=CFile::GetPath($arResult['ITEMS'][$Left]["PROPERTIES"]["LOGO_1"]["VALUE"])?>" alt="<?=$arResult['ITEMS'][$Left]["PROPERTIES"]["TITLE_TEAM_1"]["VALUE"]?>"></div>
											</div>
											<div class="go-final-bracket__score
											<?if($arResult['ITEMS'][$Left]["PROPERTIES"]["COUNT_TEAM_1"]["VALUE"] > $arResult['ITEMS'][$Left]["PROPERTIES"]["COUNT_TEAM_2"]["VALUE"]):?>
												go-final-bracket__score_winner
											<?else:?>
												quarter
											<?endif?>
											borders">
												<div class="go-final-bracket__score-txt"><?=$arResult['ITEMS'][$Left]["PROPERTIES"]["COUNT_TEAM_1"]["VALUE"]?></div>
											</div>
											<?if(!empty($arResult['ITEMS'][$Left]["PROPERTIES"]["COUNT2_TEAM_1"]["VALUE"]) || $arResult['ITEMS'][$Left]["PROPERTIES"]["COUNT2_TEAM_1"]["VALUE"] == '0'):?> 
												<div class="go-final-bracket__score borders <?if($arResult['ITEMS'][$Left]["PROPERTIES"]["COUNT2_TEAM_1"]["VALUE"] > $arResult['ITEMS'][$Left]["PROPERTIES"]["COUNT2_TEAM_2"]["VALUE"]):?>go-final-bracket__score_winner<?endif?>">
													<div class="go-final-bracket__score-txt"><?=$arResult['ITEMS'][$Left]["PROPERTIES"]["COUNT2_TEAM_1"]["VALUE"]?></div>
												</div>
											<?endif;?>
											<?if(!empty($arResult['ITEMS'][$Left]["PROPERTIES"]["COUNT3_TEAM_1"]["VALUE"]) || $arResult['ITEMS'][$Left]["PROPERTIES"]["COUNT3_TEAM_1"]["VALUE"] == '0'):?> 
												<div class="go-final-bracket__score borders <?if($arResult['ITEMS'][$Left]["PROPERTIES"]["COUNT3_TEAM_1"]["VALUE"] > $arResult['ITEMS'][$Left]["PROPERTIES"]["COUNT3_TEAM_2"]["VALUE"]):?>go-final-bracket__score_winner<?endif?>">
													<div class="go-final-bracket__score-txt"><?=$arResult['ITEMS'][$Left]["PROPERTIES"]["COUNT3_TEAM_1"]["VALUE"]?></div>
												</div>
											<?endif;?>
										</div>
										<div class="go-final-bracket__team">
											<div class="go-final-bracket__team-info">
												<div class="go-final-bracket__team-logo"><img src="<?=CFile::GetPath($arResult['ITEMS'][$Left]["PROPERTIES"]["LOGO_2"]["VALUE"])?>" alt="<?=$arResult['ITEMS'][$Left]["PROPERTIES"]["TITLE_TEAM_2"]["VALUE"]?>"></div>
											</div>
											<div class="go-final-bracket__score
											<?if($arResult['ITEMS'][$Left]["PROPERTIES"]["COUNT_TEAM_2"]["VALUE"] > $arResult['ITEMS'][$Left]["PROPERTIES"]["COUNT_TEAM_1"]["VALUE"]):?>
												go-final-bracket__score_winner
											<?else:?>
												quarter
											<?endif?>
											borders">
												<div class="go-final-bracket__score-txt"><?=$arResult['ITEMS'][$Left]["PROPERTIES"]["COUNT_TEAM_2"]["VALUE"]?></div>
											</div>
											<?if(!empty($arResult['ITEMS'][$Left]["PROPERTIES"]["COUNT2_TEAM_2"]["VALUE"]) || $arResult['ITEMS'][$Left]["PROPERTIES"]["COUNT2_TEAM_2"]["VALUE"] == '0'):?> 
												<div class="go-final-bracket__score borders <?if($arResult['ITEMS'][$Left]["PROPERTIES"]["COUNT2_TEAM_2"]["VALUE"] > $arResult['ITEMS'][$LeftBot]["PROPERTIES"]["COUNT2_TEAM_1"]["VALUE"]):?>go-final-bracket__score_winner<?endif?>">
													<div class="go-final-bracket__score-txt"><?=$arResult['ITEMS'][$Left]["PROPERTIES"]["COUNT2_TEAM_2"]["VALUE"]?></div>
												</div>
											<?endif;?>
											<?if(!empty($arResult['ITEMS'][$Left]["PROPERTIES"]["COUNT3_TEAM_2"]["VALUE"]) || $arResult['ITEMS'][$Left]["PROPERTIES"]["COUNT3_TEAM_2"]["VALUE"] == '0'):?> 
												<div class="go-final-bracket__score borders <?if($arResult['ITEMS'][$Left]["PROPERTIES"]["COUNT3_TEAM_2"]["VALUE"] > $arResult['ITEMS'][$Left]["PROPERTIES"]["COUNT3_TEAM_1"]["VALUE"]):?>go-final-bracket__score_winner<?endif?>">
													<div class="go-final-bracket__score-txt"><?=$arResult['ITEMS'][$Left]["PROPERTIES"]["COUNT3_TEAM_2"]["VALUE"]?></div>
												</div>
											<?endif;?>
										</div>
                                    </div>
                                </div>
                                <div
                                        class="go-final-bracket__dividing-line go-final-bracket__dividing-line-short">
                                    <img class="mobile-vert-line" src="/local/templates/new_ru/img/vertLine.png"
                                         alt="Line"><img class="line1-ellipse ellipse"
                                                         src="/local/templates/new_ru/img/ellipseMini.png" alt="EllipseMini"><img
                                            class="line2-ellipse ellipse" src="/local/templates/new_ru/img/ellipseMini.png"
                                            alt="EllipseMini"><img class="line3-ellipse ellipse"
                                                                   src="/local/templates/new_ru/img/ellipseMini.png" alt="EllipseMini"><img
                                            class="line4-ellipse ellipse" src="/local/templates/new_ru/img/ellipseMini.png"
                                            alt="EllipseMini"></div>
                                <div class="go-final-bracket__quarter-result snuggle-left">
                                    <div class="go-final-bracket__game">
                                        <div class="go-final-bracket__team">
											<?if(!empty($arResult['ITEMS'][$Right]["PROPERTIES"]["COUNT3_TEAM_1"]["VALUE"]) || $arResult['ITEMS'][$Right]["PROPERTIES"]["COUNT3_TEAM_1"]["VALUE"] == '0'):?> 
												<div class="go-final-bracket__score borders <?if($arResult['ITEMS'][$Right]["PROPERTIES"]["COUNT3_TEAM_1"]["VALUE"] > $arResult['ITEMS'][$Right]["PROPERTIES"]["COUNT3_TEAM_2"]["VALUE"]):?>go-final-bracket__score_winner<?endif?>">
													<div class="go-final-bracket__score-txt"><?=$arResult['ITEMS'][$Right]["PROPERTIES"]["COUNT3_TEAM_1"]["VALUE"]?></div>
												</div>
											<?endif;?>
											<?if(!empty($arResult['ITEMS'][$Right]["PROPERTIES"]["COUNT2_TEAM_1"]["VALUE"]) || $arResult['ITEMS'][$Right]["PROPERTIES"]["COUNT2_TEAM_1"]["VALUE"] == '0'):?> 
												<div class="go-final-bracket__score borders <?if($arResult['ITEMS'][$Right]["PROPERTIES"]["COUNT2_TEAM_1"]["VALUE"] > $arResult['ITEMS'][$Right]["PROPERTIES"]["COUNT2_TEAM_2"]["VALUE"]):?>go-final-bracket__score_winner<?endif?>">
													<div class="go-final-bracket__score-txt"><?=$arResult['ITEMS'][$Right]["PROPERTIES"]["COUNT2_TEAM_1"]["VALUE"]?></div>
												</div>
											<?endif;?>
											<div class="go-final-bracket__score
											<?if($arResult['ITEMS'][$Right]["PROPERTIES"]["COUNT_TEAM_1"]["VALUE"] > $arResult['ITEMS'][$Right]["PROPERTIES"]["COUNT_TEAM_2"]["VALUE"]):?>
												go-final-bracket__score_winner
											<?else:?>
												quarter
											<?endif?>
											borders">
												<div class="go-final-bracket__score-txt"><?=$arResult['ITEMS'][$Right]["PROPERTIES"]["COUNT_TEAM_1"]["VALUE"]?></div>
											</div>
											<div class="go-final-bracket__team-info">
												<div class="go-final-bracket__team-logo"><img src="<?=CFile::GetPath($arResult['ITEMS'][$Right]["PROPERTIES"]["LOGO_1"]["VALUE"])?>" alt="<?=$arResult['ITEMS'][$Right]["PROPERTIES"]["TITLE_TEAM_1"]["VALUE"]?>"></div>
											</div>
										</div>
										<div class="go-final-bracket__team">
										   <?if(!empty($arResult['ITEMS'][$Right]["PROPERTIES"]["COUNT3_TEAM_2"]["VALUE"]) || $arResult['ITEMS'][$Right]["PROPERTIES"]["COUNT3_TEAM_2"]["VALUE"] == '0'):?> 
												<div class="go-final-bracket__score borders <?if($arResult['ITEMS'][$Right]["PROPERTIES"]["COUNT3_TEAM_2"]["VALUE"] > $arResult['ITEMS'][$Right]["PROPERTIES"]["COUNT3_TEAM_1"]["VALUE"]):?>go-final-bracket__score_winner<?endif?>">
													<div class="go-final-bracket__score-txt"><?=$arResult['ITEMS'][$Right]["PROPERTIES"]["COUNT3_TEAM_2"]["VALUE"]?></div>
												</div>
											<?endif;?>
											<?if(!empty($arResult['ITEMS'][$Right]["PROPERTIES"]["COUNT2_TEAM_2"]["VALUE"]) || $arResult['ITEMS'][$Right]["PROPERTIES"]["COUNT2_TEAM_2"]["VALUE"] == '0'):?> 
												<div class="go-final-bracket__score borders <?if($arResult['ITEMS'][$Right]["PROPERTIES"]["COUNT2_TEAM_2"]["VALUE"] > $arResult['ITEMS'][$Right]["PROPERTIES"]["COUNT2_TEAM_1"]["VALUE"]):?>go-final-bracket__score_winner<?endif?>">
													<div class="go-final-bracket__score-txt"><?=$arResult['ITEMS'][$Right]["PROPERTIES"]["COUNT2_TEAM_2"]["VALUE"]?></div>
												</div>
											<?endif;?>
											<div class="go-final-bracket__score
											<?if($arResult['ITEMS'][$Right]["PROPERTIES"]["COUNT_TEAM_2"]["VALUE"] > $arResult['ITEMS'][$Right]["PROPERTIES"]["COUNT_TEAM_1"]["VALUE"]):?>
												go-final-bracket__score_winner
											<?else:?>
												quarter
											<?endif?>
											borders">
												<div class="go-final-bracket__score-txt"><?=$arResult['ITEMS'][$Right]["PROPERTIES"]["COUNT_TEAM_2"]["VALUE"]?></div>
											</div>
											<div class="go-final-bracket__team-info">
												<div class="go-final-bracket__team-logo"><img src="<?=CFile::GetPath($arResult['ITEMS'][$Right]["PROPERTIES"]["LOGO_2"]["VALUE"])?>" alt="<?=$arResult['ITEMS'][$Right]["PROPERTIES"]["TITLE_TEAM_2"]["VALUE"]?>"></div>
											</div>
										</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="go-final-bracket__stage-mobile">
                            <div class="go-final-bracket__current-stage margin-top-10"
                                 style="color: rgba(255, 255, 255, 0.4);">ФИНАЛ</div>
                            <div class="go-final-bracket__cup-block">
                                <div class="go-final-bracket__cup-image"><img
                                            src="/local/templates/new_ru/img/whiteCup.png" alt="whiteCup"></div>
                                <div class="go-final-bracket__cup-name"><?=$arResult['ITEMS'][0]["PROPERTIES"]["NAMEKUB"]["VALUE"]?></div>
                            </div>
                             <div class="go-final-bracket__final-teams-block">
                                <div class="go-final-bracket__final-teams">
                                    <div class="go-final-bracket__final-game-player">
                                        <div class="go-final-bracket__logo-block">
                                            <div class="go-final-bracket__logo">
												<img src="<?=CFile::GetPath($arResult['ITEMS'][$Finish]["PROPERTIES"]["LOGO_1"]["VALUE"])?>" alt="<?=$arResult['ITEMS'][$Finish]["PROPERTIES"]["TITLE_TEAM_1"]["VALUE"]?>">
											</div>
                                        </div>
                                        <div class="go-final-bracket__final-score-block 
										<?if($arResult['ITEMS'][$Finish]["PROPERTIES"]["COUNT_TEAM_1"]["VALUE"] > $arResult['ITEMS'][$Finish]["PROPERTIES"]["COUNT_TEAM_2"]["VALUE"]):?>
											go-final-bracket__score_winner
										<?endif?>">
                                            <div class="go-final-bracket__score-txt"><?=$arResult['ITEMS'][$Finish]["PROPERTIES"]["COUNT_TEAM_1"]["VALUE"]?></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="go-final-bracket__final-teams">
                                    <div class="go-final-bracket__final-game-player">
                                        <div class="go-final-bracket__logo-block">
                                            <div class="go-final-bracket__logo">
												<img src="<?=CFile::GetPath($arResult['ITEMS'][$Finish]["PROPERTIES"]["LOGO_2"]["VALUE"])?>" alt="<?=$arResult['ITEMS'][$Finish]["PROPERTIES"]["TITLE_TEAM_2"]["VALUE"]?>">
											</div>
                                        </div>
                                        <div class="go-final-bracket__final-score-block 
										<?if($arResult['ITEMS'][$Finish]["PROPERTIES"]["COUNT_TEAM_2"]["VALUE"] > $arResult['ITEMS'][$Finish]["PROPERTIES"]["COUNT_TEAM_1"]["VALUE"]):?>
											go-final-bracket__score_winner
										<?endif?>">
                                            <div class="go-final-bracket__score-txt"><?=$arResult['ITEMS'][$Finish]["PROPERTIES"]["COUNT_TEAM_2"]["VALUE"]?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="go-final-bracket__final-teams-title">3 место</div>
                            <div class="go-final-bracket__final-teams-block">
                                <div class="go-final-bracket__final-teams">
                                    <div class="go-final-bracket__final-game-player">
                                        <div class="go-final-bracket__logo-block">
                                            <div class="go-final-bracket__logo">
												<img src="<?=CFile::GetPath($arResult['ITEMS'][$Loser]["PROPERTIES"]["LOGO_1"]["VALUE"])?>" alt="<?=$arResult['ITEMS'][$Loser]["PROPERTIES"]["TITLE_TEAM_1"]["VALUE"]?>">
											</div>
                                        </div>
                                        <div class="go-final-bracket__final-score-block 
										<?if($arResult['ITEMS'][$Loser]["PROPERTIES"]["COUNT_TEAM_1"]["VALUE"] > $arResult['ITEMS'][$Loser]["PROPERTIES"]["COUNT_TEAM_2"]["VALUE"]):?>
											go-final-bracket__score_winner
										<?endif?>">		
                                            <div class="go-final-bracket__score-txt"><?=$arResult['ITEMS'][$Loser]["PROPERTIES"]["COUNT_TEAM_1"]["VALUE"]?></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="go-final-bracket__final-teams">
                                    <div class="go-final-bracket__final-game-player">
                                        <div class="go-final-bracket__logo-block">
                                            <div class="go-final-bracket__logo">
												<img src="<?=CFile::GetPath($arResult['ITEMS'][$Loser]["PROPERTIES"]["LOGO_2"]["VALUE"])?>" alt="<?=$arResult['ITEMS'][$Loser]["PROPERTIES"]["TITLE_TEAM_2"]["VALUE"]?>">
											</div>
                                        </div>
                                        <div class="go-final-bracket__final-score-block
										<?if($arResult['ITEMS'][$Loser]["PROPERTIES"]["COUNT_TEAM_2"]["VALUE"] > $arResult['ITEMS'][$Loser]["PROPERTIES"]["COUNT_TEAM_1"]["VALUE"]):?>
											go-final-bracket__score_winner
										<?endif?>">	
                                            <div class="go-final-bracket__score-txt"><?=$arResult['ITEMS'][$Loser]["PROPERTIES"]["COUNT_TEAM_2"]["VALUE"]?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
