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
							<?if($arItem["TEXT"] == "Команда"):?>
                                <span class="square selected"><?=$arItem["TEXT"]?></span>
								<ul class="submenu">
									<li><a href="https://go-family.ru/teams/team-go/">хк GO</a></li>
									<li><a href="https://go-family.ru/teams/team-gohockey/">хк GO hockey</a></li>
								</ul>
                            <?else:?>
                                <a href="<?=$arItem["LINK"]?>" class="square selected"><?=$arItem["TEXT"]?></a>
                            <?endif?>
					</li>
					<?else:?>
						<li class="menu_item">
                            <?if($arItem["TEXT"] == "Команда"):?>
                                <span class="square"><?=$arItem["TEXT"]?></span>
                                <ul class="submenu">
									<li><a href="https://go-family.ru/teams/team-go/">хк GO</a></li>
									<li><a href="https://go-family.ru/teams/team-gohockey/">хк GO hockey</a></li>
								</ul>
                            <?else:?>
                                <a href="<?=$arItem["LINK"]?>" class="square"><?=$arItem["TEXT"]?></a>
                            <?endif?>
						</li>
					<?endif?>
					
				<?endforeach?>
				</ul>
				<?endif?>
				</nav>
    </div>
    

