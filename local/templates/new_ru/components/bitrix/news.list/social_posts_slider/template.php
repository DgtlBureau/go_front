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
if (!empty($_GET['modalnews'])) {
    $curr_modal = $_GET['modalnews'];
}
?>
<div class="main-news__swiper">
    <? $i = 0; ?>
    <? foreach ($arResult['ITEMS'] as $arItem): ?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        $i++; ?>
        <div class="main-news__item">

            <a class="social-content-block__item" target="_blank" href="<?= $arItem["PROPERTIES"]["LINK"]["VALUE"]; ?>">
                <img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"]; ?>" alt="soc-item">
                <div class="post-info">
                    <div class="post-info__title"><?= $arItem["NAME"]; ?></div>
                    <div class="post-info__tags">
                        <? foreach ($arItem["PROPERTIES"]["TAGS"]['VALUE'] as $tag): ?>
                            <div class="post-info-tags__item"><?= $tag; ?></div>
                        <? endforeach; ?>
                    </div>
                </div>
            </a>
        </div>
    <? endforeach; ?>
</div>



