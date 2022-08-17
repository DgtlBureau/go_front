<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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

$strSectionEdit = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_EDIT");
$strSectionDelete = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_DELETE");
$arSectionDeleteParams = array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM'));
?>
<div class="categories__list">
    <?
    foreach ($arResult['SECTIONS'] as &$arSection) {
        $this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
        $this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);
        ?>
        <a class="categories__item" href="<? echo $arSection['SECTION_PAGE_URL']; ?>">

            <div class="categories__item-image scale">
                <img src="<?= $arSection['PICTURE']['SRC'] ?>" alt="<?= $arSection['NAME'] ?>">
            </div>
            <div class="categories__item-footer">
                <div class="categories__item-name"><?= $arSection['NAME'] ?></div>
                <div class="categories__item-arrow">→</div>
            </div>
        </a>
        <?php
    }

    ?>
</div>