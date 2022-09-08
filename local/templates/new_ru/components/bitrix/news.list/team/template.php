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
?>
<div class="team">
    <? $i = 1; ?>
    <? foreach ($arResult['ITEMS'] as $arItem): ?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <?
        $link = '/teams/team-' . $arItem['CODE'] . '/';
        $team_class = $arItem['CODE'] . '-team';

        ?>
        <a href="<?= $link; ?>"
           class="team_item <?= $team_class ?> <?= $arItem["PROPERTIES"]["TEAM_COLOR"]["VALUE"]; ?>"
           id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
            <div class="team_item_logo">
                <img src="<?= $arItem["DISPLAY_PROPERTIES"]["PHOTO_TEAM"]["FILE_VALUE"]["SRC"]; ?>" alt="">
            </div>
            <div class="team_item_content">
                <div class="team_item_content_title"><span
                            class="team_span"
                            data-text="<?= $arItem["PROPERTIES"]["LOGO_TEXT"]["VALUE"]; ?> "><?= $arItem["PROPERTIES"]["LOGO_TEXT"]["VALUE"]; ?> </span><span
                            alt="" class="arrow_team">→</span>
                </div>
                <div class="team_item_content_stats">
                    <div class="team_item_content_stats_items">
                        <h4 class="team_item_content_stats_items_h4"><?= $arItem["PROPERTIES"]["TEAM_WIN"]["NAME"]; ?></h4>
                        <p class="team_item_content_stats_items_p <?= $arItem["PROPERTIES"]["TEAM_COLOR"]["VALUE"]; ?>">
                            <span class="team_span"
                                  data-text="<?= $arItem["PROPERTIES"]["TEAM_WIN"]["VALUE"]; ?>"><?= $arItem["PROPERTIES"]["TEAM_WIN"]["VALUE"]; ?></span>
                        </p>
                    </div>
                    <div class="team_item_content_stats_items">
                        <h4 class="team_item_content_stats_items_h4"><?= $arItem["PROPERTIES"]["TEAM_POINT"]["NAME"]; ?></h4>
                        <p class="team_item_content_stats_items_p <?= $arItem["PROPERTIES"]["TEAM_COLOR"]["VALUE"]; ?>">
                            <span class="team_span"
                                  data-text="<?= $arItem["PROPERTIES"]["TEAM_POINT"]["VALUE"]; ?>"><?= $arItem["PROPERTIES"]["TEAM_POINT"]["VALUE"]; ?></span>
                        </p>
                    </div>
                    <div class="team_item_content_stats_items">
                        <h4 class="team_item_content_stats_items_h4"><?= $arItem["PROPERTIES"]["TEAM_POSITION"]["NAME"]; ?></h4>
                        <p class="team_item_content_stats_items_p <?= $arItem["PROPERTIES"]["TEAM_COLOR"]["VALUE"]; ?>">
                            <span class="team_span"
                                  data-text="<?= $arItem["PROPERTIES"]["TEAM_POSITION"]["VALUE"]; ?>"><?= $arItem["PROPERTIES"]["TEAM_POSITION"]["VALUE"]; ?></span>
                        </p>
                    </div>
                </div>
                <button href="<?= $link; ?>" class="shop_content_right_bottom_btn">Перейти к команде</button>

            </div>

        </a>

    <? endforeach; ?>
</div>