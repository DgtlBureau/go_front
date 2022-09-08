<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

/**
 * @var array $arParams
 * @var array $arResult
 * @var string $cartId
 */

if (count($arResult['FAVORITES']) > 0)
{
	?>
	<a href="<?=$arParams['PATH_TO_FAVORITES']?>" class="catalog-cart-block">
        <span class="catalog-cart-counter"><?=count($arResult['FAVORITES'])?></span>
	</a>
	<?php
}