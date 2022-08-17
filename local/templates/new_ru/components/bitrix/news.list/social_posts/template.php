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
                <a class="social-content-block__item" target="_blank" href="<?=$arItem["PROPERTIES"]["LINK"]["VALUE"];?>">
                    <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"];?>" alt="soc-item">
                    <div class="post-info">
                        <div class="post-info__title"><?=$arItem["NAME"];?></div>
                        <div class="post-info__tags"> 
                            <?foreach($arItem["PROPERTIES"]["TAGS"]['VALUE'] as $tag):?> 
                                <div class="post-info-tags__item"><?=$tag;?></div> 
                            <?endforeach;?> 
                        </div>
                    </div>
                </a>
<?endforeach;?>  

  
      


