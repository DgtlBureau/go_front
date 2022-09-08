<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

/**
 * @var array $arParams
 * @var array $arResult
 * @var SaleOrderAjax $component
 */

$component = $this->__component;
$component::scaleImages($arResult['JS_DATA'], $arParams['SERVICES_IMAGES_SCALING']);

use Bitrix\Sale;

CModule::IncludeModule('sale');

if ($arResult['ORDER_ID'] > 0) {
    $order = Sale\Order::load($arResult['ORDER_ID']);

    $arResult['IS_PAID'] = $order->isPaid();

    define("YOOKASSA_ID", 3);

    if (!$arResult['IS_PAID']) {

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
    }


    $propertyCollection = $order->getPropertyCollection();
    $emailPropValue = $propertyCollection->getUserEmail()->getValue();

    $arResult['USER']['EMAIL'] = $emailPropValue;
}


