<?php

use Bitrix\Main\EventManager;

EventManager::getInstance()->addEventHandler(
    "main",
    "OnProlog",
    [
        "\\GoFamily\\AjaxBase\\Load",
        "init"
    ],
    100
);

\Bitrix\Main\EventManager::getInstance()->addEventHandlerCompatible(
    'sale',
    'OnSaleComponentOrderProperties',
    'SaleOrderEvents::fillLocation'
);


class SaleOrderEvents
{

    // город по умолчанию
    function fillLocation(&$arUserResult, $request, &$arParams, &$arResult)
    {
        $registry = \Bitrix\Sale\Registry::getInstance(\Bitrix\Sale\Registry::REGISTRY_TYPE_ORDER);
        $orderClassName = $registry->getOrderClassName();
        $order = $orderClassName::create(\Bitrix\Main\Application::getInstance()->getContext()->getSite());
        $propertyCollection = $order->getPropertyCollection();

        foreach ($propertyCollection as $property) {
            if ($property->isUtil())
                continue;

            $arProperty = $property->getProperty();
            if (
                $arProperty['TYPE'] === 'LOCATION'
                && array_key_exists($arProperty['ID'], $arUserResult["ORDER_PROP"])
                && !$request->getPost("ORDER_PROP_" . $arProperty['ID'])
                && (
                    !is_array($arOrder = $request->getPost("order"))
                    || !$arOrder["ORDER_PROP_" . $arProperty['ID']]
                )) {

                $ip = \Bitrix\Main\Service\GeoIp\Manager::getRealIp();
                $locationByIp = \Bitrix\Sale\Location\GeoIp::getLocationCode($ip, LANGUAGE_ID);
                $location = !empty($locationByIp) ? $locationByIp : COption::GetOptionString('sale', 'location');

                $arUserResult["ORDER_PROP"][$arProperty['ID']] = $location;
            }
        }
    }
}