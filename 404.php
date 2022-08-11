<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("Страница не найдена");
$APPLICATION->SetAdditionalCss("/local/templates/new_ru/assets/WebMaster-GO-Gohockey/Pages/404-page/main.1aaa0a68cc8729c67c81.css");

?>
    <div class="error-page">
        <div class="error-page__container">
            <div class="error-page__404">
                <div class="error-page__title">
                    <p>404</p>
                </div>
                <div class="error-page__subtitle">
                    <p>страница не найдена</p>
                </div>
                <div class="error-page__text">
                    <p>Страница, на которую вы пытаетесь попасть,<span>не существует или была удалена.<br>Перейдите на
                            <a href="#">Главную страницу</a></span></p>
                </div>
            </div>
        </div>
    </div>
<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");