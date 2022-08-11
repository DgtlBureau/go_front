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

<div class="trener">
	
</div>

<style>
	.go-team__info {
		display: none;
	}
	.go-team__info-nav {
		display: none;
	}
</style>

<?

	if( $USER->GetID() == 1 )
	{
		echo '<pre>';
		print_r($arResult);
		echo '</pre>';
	}




?>