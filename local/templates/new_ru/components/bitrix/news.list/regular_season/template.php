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
$i = 0;
?>
<table class="championship-course__table">
	<tr>
        <th>№</th>
        <th>Команда</th>
        <th>И</th>
        <th>В</th>
        <th>Н</th>
        <th>П</th>
        <th>Ш</th>
        <th>О</th>
    </tr>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	$i++;
	?>
	<tr <?if($arItem['NAME'] == 'Go'):?>class="championship-course__our-team"<?endif;?> <?if($arItem['NAME'] == 'Gohockey'):?>class="championship-course__our-team-orange"<?endif;?>id="<?=$this->GetEditAreaId($arItem['ID']);?>">
        <td><?=$i;?></td>
        <td><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["NAME"]?>"><?=$arItem["NAME"]?></td>
        <td><?=$arItem["PROPERTIES"]["GAME"]["VALUE"]?></td>
        <td><?=$arItem["PROPERTIES"]["WINNING"]["VALUE"]?></td>
        <td><?=$arItem["PROPERTIES"]["DRAW"]["VALUE"]?></td>
        <td><?=$arItem["PROPERTIES"]["LOSSES"]["VALUE"]?></td>
        <td><?=$arItem["PROPERTIES"]["WASHERS"]["VALUE"]?></td>
        <td><?=$arItem["PROPERTIES"]["POINTS"]["VALUE"]?></td>
    </tr>
	
<?//if($USER->IsAdmin()) {echo '<pre>'; print_r($arItem); echo '</pre>';}?>
<?endforeach;?>

</table>
