<?//if(!empty($arResult['ITEMS']))?>
<? $i = 0;?>
<?foreach($arResult['ITEMS'] as $key=>$arItem){?>
	<? $i++;?>


    <div class="about-us__swiper-item">
        <div class="about-us__swiper-item-image"><img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>"
                                                      alt="about"></div>
        <div class="about-us__swiper-item-txt-block">
            <div class="about-us__swiper-item-title-block">
                <div class="about-us__swiper-item-title"><?=$arItem['NAME']?></div>
                <div class="about-us__swiper-item-page-count">№<?=$i?></div>
            </div>
            <div class="about-us__swiper-item-txt-scroll">
                <div class="about-us__swiper-item-txt"><?=$arItem['PREVIEW_TEXT']?></div>
            </div>
        </div>
    </div>
<?}?>