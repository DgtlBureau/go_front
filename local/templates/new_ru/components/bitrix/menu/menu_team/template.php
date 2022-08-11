<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<div class="go-team__info-nav">

<?

foreach($arResult as $arItem):

	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
		continue;
?>
	<?if($arItem["SELECTED"] == 1):?>
		<div class="go-team__nav-item selected">
			<a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
		</div>
	<?else:?>
		<div class="go-team__nav-item">
			<a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
		</div>
	<?endif?>
	
<?endforeach?>

</div>
<?endif?>

