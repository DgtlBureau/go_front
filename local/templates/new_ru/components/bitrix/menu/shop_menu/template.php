<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
  

<?if (!empty($arResult)):?>
<div class="shop__nav">
    <div class="shop__nav-list shop__nav-list-top">
        <?foreach($arResult as $arItem):?>
        	<a class="shop__nav-item" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
        <?endforeach?> 
    </div>
</div>
<?endif?>


<?

	/*  if( $USER->GetID() == 1 )
	  {
	  echo '<pre>';
	  print_r($arResult);
	  echo '</pre>';
	  }
*/
?>
