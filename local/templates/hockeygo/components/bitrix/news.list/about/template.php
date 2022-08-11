<?//if(!empty($arResult['ITEMS']))?>
<? $i = 0;?>
<?foreach($arResult['ITEMS'] as $key=>$arItem){?>
	<? $i++;?>


	<div class="swiper-slide">
		<div class="slide-main">
			<img class="slide-main__img" src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="">
			<div class="slide-main-descr">
				<span class="slide-main-descr__number">
					№<?=$i?>
				</span>
				<h4 class="slide-main-descr__title">
					<?=$arItem['NAME']?>
				</h4>
				<p class="slide-main-descr__parag">
					<?=$arItem['PREVIEW_TEXT']?>
				</p>
			</div>
		</div>
	</div>
<?}?>