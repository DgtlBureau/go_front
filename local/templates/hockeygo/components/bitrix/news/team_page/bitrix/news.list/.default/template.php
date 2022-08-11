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

<div class="go-team__staff-block">
	<div class="go-team__staff-title">Игроки</div>
	<?foreach($arResult['ITEMS'] as $item):?>
		<a href="<?=$item['DETAIL_PAGE_URL']?>">
	<div class="go-team__staff">
		<div class="go-team__staff-person">
			<div class="go-team__players-staff-person-image">
				<img src="<?=$item['PREVIEW_PICTURE']['SRC']?>" alt="goPerson">
			</div>
			<div class="go-team__players-staff-person-txt-block">
				<div class="go-team__players-staff-person-name"><?=$item['NAME']?></div>
				<div class="go-team__players-staff-person-number">
					<span data-text="<?=$item['PROPERTIES']['NUMBER']['VALUE']?>">
						<?=$item['PROPERTIES']['NUMBER']['VALUE']?>
					</span>
				</div>
			</div>
		</div>
	</div>
	</a>
	<?endforeach?>
</div>

<?
	// if( $USER->GetID() == 1 )
	// {
	// 	echo '<pre>';
	// 	print_r($arResult);
	// 	echo '</pre>';
	// }
?>
