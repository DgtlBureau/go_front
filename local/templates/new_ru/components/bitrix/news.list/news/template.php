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

$this->addExternalCss("/local/templates/new_ru/components/bitrix/news.list/news/main.3514e3b381bb9968f169.css");
//$this->addExternalCss("/local/templates/new_ru/assets/HOCKEY/GoNews/main.91bc24e41b6003253085.css");
if(!empty($_GET['modalnews'])) {
    $curr_modal = $_GET['modalnews'];
}

$url = 'https://go-family.ru/'
?>
<!--

<div class="go-final__swiper-block">
    <div class="go-final__swiper">

<?foreach($arResult['ITEMS'] as $arItem):?>

		<!-- <div class="swiper-slide" data-slide=""> --
			<div class="news-item popup-open">
				<img alt="<?=$arItem["NAME"];?>" src="<?=$arItem["DETAIL_PICTURE"]["SRC"];?>">
				<div class="news-item__info">
					<h4>
						<?=$arItem["NAME"];?>
					</h4>
					<p>
						<?=strtolower(FormatDate("d F Y", MakeTimeStamp($arItem["DATE_CREATE"])));?>
					</p>
				</div>
			</div>
	    <!-- </div> --
<?endforeach;?>
    </div>
</div>
-->

<div class="main-news__swiper-block">
    <div class="main-news__swiper">
        <? $i = 0; ?>
        <?foreach($arResult['ITEMS'] as $arItem):?>
        <? $i++; ?>
        <div class="main-news__item popup-open" modal-index="<?=$i?>"><img src="<?=$arItem["DETAIL_PICTURE"]["SRC"];?>" alt="<?=$arItem["NAME"];?>">
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

                <div class="go-news__modal-close-button"><img src="/local/templates/new_ru/img/close.png" alt="close">
                </div>

            <div class="go-news__modal-block">
                <div class="go-news__modal">
                    <div class="go-news__modal-banner">
                    <img src="<?=$arItem["DETAIL_PICTURE"]["SRC"];?>" alt="<?=$arItem["NAME"];?>">

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


