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


if(!empty($_GET['modalnews'])) {
    $curr_modal = $_GET['modalnews'];
}

$url = 'https://go-family.ru/'
?>
<div class="main-news__list-block">
    <div class="main-news__list">
        <? $i = 0; ?>
        <?foreach($arResult['ITEMS'] as $arItem):?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
        <? $i++; ?>
        <div class="main-news__item popup-open" modal-index="<?=$i?>" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			<?$renderImagePrev = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"], array('width'=>432, 'height'=>300), BX_RESIZE_IMAGE_EXACT, true); ?>
			<img src="<?=$renderImagePrev["src"];?>" alt="<?=$arItem["NAME"];?>">
            <p class="main-news__text"><?=$arItem["NAME"];?><br><span><?=strtolower(FormatDate("d F Y", MakeTimeStamp($arItem["DATE_CREATE"])));?></span></p>
        </div>
        <?endforeach;?>
    </div>
    <? $i = 0; ?>
    <?foreach($arResult['ITEMS'] as $arItem):?>
        <? $i++;
            $show = '';
            if (isset($curr_modal)) {
                if ($curr_modal == $i) {
                    $show = ' flex';
                    $APPLICATION->SetTitle($arItem["NAME"]);
                }
            }
        ?>
		<div class="go-news__modal-window<?=$show?>" id="modal<?=$i?>" >
			<div class="go-news__modal-close-button"><img src="/local/templates/new_ru/img/close.png" alt="close"></div>

			<div class="go-news__modal-block">
                <div class="go-news__modal">
                    <div class="go-news__modal-banner">
						<?$renderImageDetail = CFile::ResizeImageGet($arItem["DETAIL_PICTURE"], array('width'=>675, 'height'=>400), BX_RESIZE_IMAGE_PROPORTIONAL, true); ?>
						<img src="<?=$renderImageDetail["src"];?>" alt="<?=$arItem["NAME"];?>">
                        <button class="go-news__modal-banner-share">
                            <div class="go-news__modal-banner-share-img">
                                <img src="/local/templates/new_ru/img/share.png" alt="share">
                            </div>
                            <div class="go-news__modal-banner-share-links">
                                <a class="go-news__modal-banner-share-link"
                                   href="https://vk.com/share.php?url=<?=$url?>?modalnews=<?=$i?>">
                                    <div class="go-news__modal-banner-share-img">
                                        <img src="/local/templates/new_ru/img/vk.svg" alt="vk">
                                    </div>
                                </a>
                                <a class="go-news__modal-banner-share-link" href="https://t.me/share?url=<?=$url?>?modalnews=<?=$i?>">
                                    <div class="go-news__modal-banner-share-img">
                                        <img src="/local/templates/new_ru/img/telegram.svg" alt="telegram">
                                    </div>
                                </a>
                            </div>
                        </button>
                        <div class="go-news__modal-banner-txt-block">
                            <div class="go-news__modal-banner-title"><?=$arItem["NAME"];?></div>
                            <div class="go-news__modal-banner-txt">
                                <div class="go-news__modal-banner-date"><?=strtolower(FormatDate("d F Y", MakeTimeStamp($arItem["DATE_CREATE"])));?></div>

                                <?foreach($arItem["PROPERTIES"]["TAGS"]['VALUE'] as $tag):?>
                                    <div class="go-news__modal-banner-hash"><?=$tag;?></div>
                                <?endforeach;?>
                            </div>
                        </div>
                    </div>
                    <div class="go-news__modal-content">
                        <div class="go-news__modal-txt">
                            <?=$arItem["DETAIL_TEXT"];?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?endforeach;?>

</div>

<? //echo '<pre>'; //print_r($arResult); echo 'pre;'; ?>


