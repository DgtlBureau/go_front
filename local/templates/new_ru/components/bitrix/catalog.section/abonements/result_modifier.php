<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

foreach ($arResult['ITEMS'] as &$item) {
    $item['DISPLAY_NAME'] = preg_replace('/(.*)((\d{1}|\d{2}) (месяц|год))/', '$1<span>$2</span>', $item['NAME']);
}
