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

<div class="gohockey-team__staff">
    <?foreach($arResult['ITEMS'] as $item):?>
        <? $player_name_arr = explode(' ', $item['NAME'],2);?>
        <a href="<?=$item['DETAIL_PAGE_URL']?>" class="gohockey-team__staff-person">
            <div class="gohockey-team__players-staff-person-image"><img src="<?=$item['PREVIEW_PICTURE']['SRC']?>"
                                                                  alt="<?=$item['NAME']?>"></div>
            <div class="gohockey-team__players-staff-person-txt-block">
                <div class="gohockey-team__playerstaff-person-name-block">
                    <div class="gohockey-team__players-staff-person-name"><?=$player_name_arr[0]?></div>
                    <div class="gohockey-team__players-staff-person-name"><?=$player_name_arr[1]?></div>
                </div>
                <div class="gohockey-team__players-staff-person-number"><span data-text="<?=$item['PROPERTIES']['NUMBER']['VALUE']?>"><?=$item['PROPERTIES']['NUMBER']['VALUE']?></span></div>
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
