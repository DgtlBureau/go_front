<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");

$res = CIBlockElement::GetByID(73);
?> 


    <div class="contacts-block">
        <div class="contacts">
            <div class="container">
                <div class="contacts__title">
                    Контакты
                </div>
                <div class="contacts__info-block">
                    
                    <?if($ar_res = $res->GetNextElement()) {
                        $ar_res = $ar_res->GetProperties(); 
                    ?>
                    <div class="contacts__info">
                        <div class="contacts__subtitle">
                            Адрес
                        </div>
                        <div class="contacts__txt">
                            <?=$ar_res['ADRES']['VALUE']?> 
                        </div>
                    </div>
                    <div class="contacts__info">
                        <div class="contacts__subtitle">
                            Режим работы
                        </div>
                        <div class="contacts__txt">
                            <?=$ar_res['TIME']['VALUE']?>
                        </div>
                    </div>
                    <div class="contacts__info">
                        
                        <div class="contacts__subtitle">
                            Контактный телефон
                        </div>
                        <a href="tel:<?=$ar_res['TEL']['VALUE']?>">
                            <div class="contacts__txt">
                                <?=$ar_res['TEL']['VALUE']?>
                            </div>
                        </a>
                    </div>
                    <div class="contacts__info">
                        <div class="contacts__subtitle">
                            Электронная почта
                        </div>
                        <div class="contacts__txt">
                            <a href="mailto:<?=$ar_res['EMAIL']['VALUE']?>"><?=$ar_res['EMAIL']['VALUE']?></a>
                        </div>
                    </div>
                    <?}?>
                    <div class="contacts__info">
                        <div class="contacts__subtitle">
                            Соцсети
                        </div>

                        <div class="contacts__social-block">
                            <?
                            $res = CIBlockElement::GetList(Array("ID"=>"DESC"), Array("IBLOCK_ID"=> 8));
                            while ($ob = $res->GetNextElement()){
                                $arProps = $ob->GetProperties(); // свойства элемента
                                ?>
                                <a href="<?=$arProps['SOCIAL_LINK']?>" target="_blank" class="contacts__social">
                                    <div class="contacts__social-image">
                                        <img src="<?= CFile::GetPath($arProps['IMG']['VALUE']) ?>" alt="<?=$arProps['NAME']?>" >
                                    </div>
                                </a>
                            <? }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?$APPLICATION->IncludeComponent(
    "bitrix:map.yandex.view",
    ".default",
    array(
        "API_KEY" => "",
        "COMPONENT_TEMPLATE" => ".default",
        "CONTROLS" => array(
            0 => "ZOOM",
            1 => "MINIMAP",
            2 => "TYPECONTROL",
            3 => "SCALELINE",
        ),
        "INIT_MAP_TYPE" => "MAP",
        "MAP_DATA" => "a:4:{s:10:\"yandex_lat\";d:55.73829999997574;s:10:\"yandex_lon\";d:37.59459999999997;s:12:\"yandex_scale\";i:10;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:3:\"LON\";d:37.532651700589284;s:3:\"LAT\";d:55.766171938644945;s:4:\"TEXT\";s:10:\"ррара\";}}}",
        "MAP_HEIGHT" => "394",
        "MAP_ID" => "",
        "MAP_WIDTH" => "100%",
        "OPTIONS" => array(
            0 => "ENABLE_SCROLL_ZOOM",
            1 => "ENABLE_DBLCLICK_ZOOM",
            2 => "ENABLE_DRAGGING",
        )
    ),
    false
);?>

    <style>
        .contacts-block {
            width: 100%;
            background: #000;
            padding: 90px 25px 10px;
        }

        .contacts__title {
            font-style: normal;
            font-weight: 600;
            font-size: 42px;
            line-height: 52px;
            letter-spacing: .02em;
            color: #fff;
            margin-bottom: 40px
        }

        .contacts__info-block {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            width: 100%;
            height: -webkit-fit-content;
            height: -moz-fit-content;
            height: fit-content;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap
        }

        .contacts__info {
            color: #fff;
            width: 30%;
            margin-bottom: 60px;
            padding-left: 5px
        }

        .contacts__subtitle {
            font-style: normal;
            font-weight: 600;
            font-size: 20px;
            line-height: 28px;
            letter-spacing: .02em;
            margin-bottom: 20px
        }

        .contacts__txt {
            font-family: "Montserrat";
            font-style: normal;
            font-weight: 400;
            font-size: 16px;
            line-height: 20px;
            letter-spacing: .02em;
            color: rgba(255, 255, 255, .6);
            max-width: 275px
        }

        .contacts__social-block {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex
        }




        @media(max-width: 920px) {
            .contacts__info {
                width: 50%
            }
        }

        @media(max-width: 570px) {
            .contacts__info {
                width: 100%;
                padding: 0
            }

            .contacts-block {
                min-width: 100%;
                padding: 70px 20px 0px 20px;
            }

            .contacts__subtitle {
                margin-bottom: 15px
            }
        }

    </style>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>