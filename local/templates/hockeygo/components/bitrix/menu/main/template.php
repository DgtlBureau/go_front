<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>

	<div class="menu">
        <nav class="menu_nav">
			<ul class="menu_ul">
				<?
				foreach($arResult as $arItem):
					if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
						continue;
				?>
					<?if($arItem["SELECTED"]):?>
						<li class="menu_item">
							<a href="<?=$arItem["LINK"]?>" class="square selected"><?=$arItem["TEXT"]?></a>
							<?if($arItem["TEXT"] == "Команда"):?>
								<ul class="submenu">
									<li><a href="">хк GO</a></li>
									<li><a href="">хк GOhockey</a></li>
								</ul>
							<?endif?>
					</li>
					<?else:?>
						<li class="menu_item">
							<a class="square" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
							<?if($arItem["TEXT"] == "Команда"):?>
								<ul class="submenu">
									<li><a href="">хк GO</a></li>
									<li><a href="">хк GOhockey</a></li>
								</ul>
							<?endif?>
						</li>
					<?endif?>
					
				<?endforeach?>

				</ul>
				<?endif?>
				</nav>
    </div>
    

