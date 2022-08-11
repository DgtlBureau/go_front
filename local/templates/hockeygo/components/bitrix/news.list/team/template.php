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
<? $i=1;?>
<?foreach($arResult['ITEMS'] as $arItem):?>

	<a href="" class="team_item <?=$arItem["PROPERTIES"]["TEAM_COLOR"]["VALUE"];?>">
		<div class="team_item_logo">
			  <img src="<?=$arItem["DISPLAY_PROPERTIES"]["PHOTO_TEAM"]["FILE_VALUE"]["SRC"];?>" alt="">
		</div>
		<div class="team_item_content">
			<div class="team_item_content_title <?=$arItem["PROPERTIES"]["TEAM_COLOR"]["VALUE"];?>"> <span class="team_span" data-text="<?=$arItem["NAME"];?>"><?=$arItem["NAME"];?></span><span alt="" class="arrow_team <?=$arItem["PROPERTIES"]["TEAM_COLOR"]["VALUE"];?>">→</span></div>
				<div class="team_item_content_stats">
					<div class="team_item_content_stats_items">
						<h4 class="team_item_content_stats_items_h4"><?=$arItem["PROPERTIES"]["TEAM_WIN"]["NAME"];?></h4>
						<p class="team_item_content_stats_items_p <?=$arItem["PROPERTIES"]["TEAM_COLOR"]["VALUE"];?>"> <span class="team_span" data-text="<?=$arItem["PROPERTIES"]["TEAM_WIN"]["VALUE"];?>"><?=$arItem["PROPERTIES"]["TEAM_WIN"]["VALUE"];?></span></p>
					</div>
					<div class="team_item_content_stats_items">
						<h4 class="team_item_content_stats_items_h4"><?=$arItem["PROPERTIES"]["TEAM_POINT"]["NAME"];?></h4>
						<p class="team_item_content_stats_items_p <?=$arItem["PROPERTIES"]["TEAM_COLOR"]["VALUE"];?>"> <span class="team_span" data-text="<?=$arItem["PROPERTIES"]["TEAM_POINT"]["VALUE"];?>"><?=$arItem["PROPERTIES"]["TEAM_POINT"]["VALUE"];?></span></p>
					</div>
					<div class="team_item_content_stats_items">
						<h4 class="team_item_content_stats_items_h4"><?=$arItem["PROPERTIES"]["TEAM_POSITION"]["NAME"];?></h4>
						<p class="team_item_content_stats_items_p <?=$arItem["PROPERTIES"]["TEAM_COLOR"]["VALUE"];?>"> <span class="team_span" data-text="<?=$arItem["PROPERTIES"]["TEAM_POSITION"]["VALUE"];?>"><?=$arItem["PROPERTIES"]["TEAM_POSITION"]["VALUE"];?></span></p>
					</div>
				</div>
			</div>
		
	</a>

<?endforeach;?>