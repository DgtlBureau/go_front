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

<?foreach($arResult['ITEMS'] as $item):?>

    <div class="go-team__info">
        <div class="go-team__about">
            <div class="go-team__about-title">
                <p><?=$item['NAME']?></p>
                <p>Команда</p>
                <div class="go-team__team-name"><span data-text="<?=$item['PROPERTIES']['LOGO']['VALUE']?>" id="GO"><?=$item['PROPERTIES']['LOGO']['VALUE']?></span></div>
            </div>
            <div class="go-team__about-txt"><?=$item['PREVIEW_TEXT']?></div>
            <div class="go-team__progress invisible">
                <div class="go-team__progress-stats">
                    <div class="go-team__progress-victories">
                        <div class="go-team__progress-title">Побед</div><span data-text="<?=$item['PROPERTIES']['WINS']['VALUE']?>"
                            id="victories-count"><?=$item['PROPERTIES']['WINS']['VALUE']?></span>
                    </div>
                    <div class="go-team__progress-points">
                        <div class="go-team__progress-title">Очков</div><span data-text="<?=$item['PROPERTIES']['GLASSES']['VALUE']?>"
                            id="points-count"><?=$item['PROPERTIES']['GLASSES']['VALUE']?></span>
                    </div>
                    <div class="go-team__progress-place">
                        <div class="go-team__progress-title">Место</div><span data-text="<?=$item['PROPERTIES']['PLACE']['VALUE']?>" id="place"><?=$item['PROPERTIES']['PLACE']['VALUE']?></span>
                    </div>
                </div>
            </div>
            <div class="next-match">
                <div class="next-match__title">Ближайший матч</div>
                <div class="next-match__block" id="next-match__block">
                    <div class="next-match__date-and-area">
                        <div class="next-match__date">10 сентября, 18:00</div>
                        <div class="next-match__area">Апиа арена</div>
                    </div>
                    <div class="next-match__versus">
                        <div class="next-match__first-team">
                            <div class="next-match__first-team-name" id="GO-first"><?=$GLOBALS['SITE_SETTINGS']['go']['LOGO_TEXT']?></div>
                            <div class="next-match__first-team-logo"><img src="/local/templates/new_ru/img/bull.png"
                                    alt="bull"></div>
                            <div class="next-match__first-team-name" id="GO-second"><?=$GLOBALS['SITE_SETTINGS']['go']['LOGO_TEXT']?></div>
                        </div>
                        <div class="next-match__score">
                            <div class="next-match__first-team-score">-</div>
                            <div class="next-match__score-between">:</div>
                            <div class="next-match__second-team-score">-</div>
                        </div>
                        <div class="next-match__second-team">
                            <div class="next-match__second-team-logo"><img src="/local/templates/new_ru/img/blackDragon.png"
                                    alt="blackDragon"></div>
                            <div class="next-match__second-team-name">Black<br>Dragon</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="go-team__progress">
            <div class="go-team__progress-background" id="team-background-logo"></div>
            <div class="go-team__progress-stats">
                <div class="go-team__progress-victories">
                    <div class="go-team__progress-title">Побед</div><span data-text="<?=$item['PROPERTIES']['WINS']['VALUE']?>"
                        id="victories-count"><?=$item['PROPERTIES']['WINS']['VALUE']?></span>
                </div>
                <div class="go-team__progress-points">
                    <div class="go-team__progress-title">Очков</div><span data-text="<?=$item['PROPERTIES']['GLASSES']['VALUE']?>" id="points-count"><?=$item['PROPERTIES']['GLASSES']['VALUE']?></span>
                </div>
                <div class="go-team__progress-place">
                    <div class="go-team__progress-title">Место</div><span data-text="<?=$item['PROPERTIES']['PLACE']['VALUE']?>" id="place"><?=$item['PROPERTIES']['PLACE']['VALUE']?></span>
                </div>
            </div>
        </div>
    </div>



<?endforeach?>
<?

	// if( $USER->GetID() == 1 )
	// {
	// 	echo '<pre>';
	// 	print_r($arResult);
	// 	echo '</pre>';
	// }




?>
