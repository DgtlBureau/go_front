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
	<div class="go-final__swiper-block">
        <div class="go-final__swiper">
		<!-- <div class="swiper-slide" data-slide="<?=$i;?>"> -->
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
		</div>
	</div>
	<!-- </div> -->
	
<?endforeach;?>

<div class="popup-fade">
    <div class="popup">
		<a class="popup-close" href="#"><img src="<?=SITE_TEMPLATE_PATH?>/img/exit.png" alt=""></a>
		<?foreach($arResult['ITEMS'] as $arItem):?>
			<div class="modal_news_wrapper">
				<div class="modal_news_img">
					<img class="modal_news_img_img" src="<?=$arResult["DETAIL_PICTURE"]["SRC"];?>" alt="">
					<div class="share_link"><img src="<?=SITE_TEMPLATE_PATH?>/img/share.svg" alt=""></div>
						<div class="share_link_container">
						<?$APPLICATION->IncludeComponent(
							"bitrix:news.list", 
							"social_links", 
							array(
								"ACTIVE_DATE_FORMAT" => "d.m.Y",
								"ADD_SECTIONS_CHAIN" => "Y",
								"AJAX_MODE" => "N",
								"AJAX_OPTION_ADDITIONAL" => "",
								"AJAX_OPTION_HISTORY" => "N",
								"AJAX_OPTION_JUMP" => "N",
								"AJAX_OPTION_STYLE" => "Y",
								"CACHE_FILTER" => "N",
								"CACHE_GROUPS" => "Y",
								"CACHE_TIME" => "36000000",
								"CACHE_TYPE" => "A",
								"CHECK_DATES" => "Y",
								"COMPONENT_TEMPLATE" => "social_links",
								"DETAIL_URL" => "",
								"DISPLAY_BOTTOM_PAGER" => "Y",
								"DISPLAY_TOP_PAGER" => "N",
								"FIELD_CODE" => array(
									0 => "NAME",
									1 => "PREVIEW_TEXT",
									2 => "PREVIEW_PICTURE",
									3 => "DATE_ACTIVE_FROM",
									4 => "",
								),
								"FILTER_NAME" => "",
								"HIDE_LINK_WHEN_NO_DETAIL" => "N",
								"IBLOCK_ID" => "8",
								"IBLOCK_TYPE" => "content",
								"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
								"INCLUDE_SUBSECTIONS" => "Y",
								"MESSAGE_404" => "",
								"NEWS_COUNT" => "4",
								"PAGER_BASE_LINK_ENABLE" => "N",
								"PAGER_DESC_NUMBERING" => "N",
								"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
								"PAGER_SHOW_ALL" => "N",
								"PAGER_SHOW_ALWAYS" => "N",
								"PAGER_TEMPLATE" => ".default",
								"PAGER_TITLE" => "Новости",
								"PARENT_SECTION" => "",
								"PARENT_SECTION_CODE" => "",
								"PREVIEW_TRUNCATE_LEN" => "",
								"PROPERTY_CODE" => array(
									0 => "",
									1 => "PROP_0",
									2 => "PHOTO_TEAM",
									3 => "",
								),
								"SET_BROWSER_TITLE" => "N",
								"SET_LAST_MODIFIED" => "N",
								"SET_META_DESCRIPTION" => "Y",
								"SET_META_KEYWORDS" => "Y",
								"SET_STATUS_404" => "N",
								"SET_TITLE" => "N",
								"SHOW_404" => "N",
								"SORT_BY1" => "SORT",
								"SORT_BY2" => "SORT",
								"SORT_ORDER1" => "ASC",
								"SORT_ORDER2" => "ASC",
								"STRICT_SECTION_CHECK" => "N"
							),
							false
						);?>
					</div>
					<div class="modal_news_img_content">
						<div class="modal_news_title">
							<?=$arItem["NAME"];?>
						</div>
						<div class="modal_news_bottom_content">
							<div class="modal_news_date">
								<?=strtolower(FormatDate("d F Y", MakeTimeStamp($arItem["DATE_CREATE"])));?>
							</div>
							<div class="modal_news_tags">
								<?foreach($arItem["PROPERTIES"]["TAGS"]['VALUE'] as $tag):?>
									<a href="#" class="tags"><?=$tag;?></a>
								<?endforeach;?>
							</div>
						</div>
					</div>
				</div>
				<div class="modal_news_content">
					<?=$arItem["DETAIL_TEXT"];?>
				</div>
			</div>
		<?endforeach;?>
	</div>
</div>
