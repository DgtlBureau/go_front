<?
//require_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php');
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");


die();

use Bitrix\Sale;

CModule::IncludeModule('sale');
CModule::IncludeModule('ipol.sdek');
$order = Sale\Order::load(20);


$APPLICATION->IncludeComponent(
    "ipol:ipol.sdekPickup",
    "order",
    array(
        "COMPONENT_TEMPLATE" => "order",
        "MODE" => "both",
        "NOMAPS" => "N",
        "CNT_DELIV" => "Y",
        "CNT_BASKET" => "N",
        "SEARCH_ADDRESS" => "N",
        "FORBIDDEN" => array(),
        "PAYER" => "1",
        "PAYSYSTEM" => "3",
        "COUNTRIES" => array(
            0 => "rus",
        ),
        "CITIES" => array()
    ),
    false
);

/*
$paymentCollection = $order->getPaymentCollection();
foreach ($paymentCollection as $onePayment) {
//            dump($onePayment);

    // если ЮKassa
    if ($onePayment->getField('PAY_SYSTEM_ID') == YOOKASSA_ID) {

        $service = Sale\PaySystem\Manager::getObjectById($onePayment->getPaymentSystemId());
        $context = \Bitrix\Main\Application::getInstance()->getContext();

        ob_start();
        $service->initiatePay($onePayment, $context->getRequest());
        $text = ob_get_contents();
        ob_end_clean();

        $pattern = '/(https?:\/\/)?([\w\.\-\_]+)\.(com|net|org|edu|gov|biz|info|name|ru|ua|рф|[a-z]{2,6}\.?)(\/[\w\.\&\?\=\-\_\:]*)*\/?/';
        preg_match_all($pattern, $text, $arURLs);

        $arResult['URL_TO_PAY'] = $arURLs[0][0];

        $session = \Bitrix\Main\Application::getInstance()->getSession();
        $key = 'PAY_REDIRECT_ORDER_' . $order->getId();

        // редиректим только 1 раз
        if (!empty($arURLs) && !$session->has($key)) {
            $session->set($key, true);
            LocalRedirect($arResult['URL_TO_PAY'], true);
        }
    }
}

dump($arResult);

*/

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");