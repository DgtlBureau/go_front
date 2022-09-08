<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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
$this->setFrameMode(true); ?>
<?
$INPUT_ID = trim($arParams["~INPUT_ID"]);
if ($INPUT_ID == '')
    $INPUT_ID = "title-search-input";
$INPUT_ID = CUtil::JSEscape($INPUT_ID);

$CONTAINER_ID = trim($arParams["~CONTAINER_ID"]);
if ($CONTAINER_ID == '')
    $CONTAINER_ID = "title-search";
$CONTAINER_ID = CUtil::JSEscape($CONTAINER_ID);

if ($arParams["SHOW_INPUT"] !== "N"):?>

<div class="catalog__modal modal hide" id="search-modal">
    <div  class="modal__content">
        <div class="catalog__title-block">
            <div class="catalog__title">Поиск</div>
            <div class="modal__close">
                <div class="modal__close-stick"></div>
                <div class="modal__close-stick"></div>
            </div>
        </div>

        <form action="<? echo $arResult["FORM_ACTION"] ?>" class="catalog__serch-form" id="<?= $CONTAINER_ID ?>">
            <div class="input-block">

                <input class="modal-search-input" id="<?= $INPUT_ID ?>" type="text" placeholder="Поиск"
                       class="search" name="q" value="" size="40" maxlength="50" autocomplete="off"/>&nbsp;
                <div class="input-clear modal-search-input-clear">x</div>
            </div>
        </form>
    </div>
</div>

<? endif; ?>


<script>
    BX.ready(function () {
        new JCTitleSearch({
            'AJAX_PAGE': '<?= CUtil::JSEscape(POST_FORM_ACTION_URI)?>',
            'CONTAINER_ID': '<?= $CONTAINER_ID?>',
            'INPUT_ID': '<?= $INPUT_ID?>',
            'MIN_QUERY_LEN': 2
        });

        $("#<?= $CONTAINER_ID ?>").on('submit', function (e) {
            return false;
        });
    });
</script>
