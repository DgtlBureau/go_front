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

<?foreach($arResult['ITEMS'] as $arItem):?>

	<a href="<?=$arItem["PROPERTIES"]["SOCIAL_LINK"]["VALUE"];?>" class="share_link_item">
		<?if($arItem['NAME'] == 'Инстаграмм'):?>
			<i class="icons icons-instagram"></i>
		<?elseif($arItem['NAME'] == 'ВК'):?>
			<i class="icons icons-vk"></i>
		<?elseif($arItem['NAME'] == 'Тик ток'):?>
			<i class="icons icons-tiktok"></i>
		<?elseif($arItem['NAME'] == 'Телеграмм'):?>
			<i class="icons icons-telegram"></i>
		<?endif;?>
	</a>

<?endforeach;?>