<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

$arResult['DETAIL_PICTURE'] = CFile::ResizeImageGet(
    $arResult['DETAIL_PICTURE'],
    [
        'width' => 1920,
        'height' => 1080,
    ],
    BX_RESIZE_IMAGE_PROPORTIONAL
)['src'];

foreach ($arResult['PROPERTIES']['IMAGES']['VALUE'] as $val) {
    $arResult['PROPERTIES']['IMAGES']['LINKS'][] = CFile::ResizeImageGet(
        $val,
        [
            'width' => 1920,
            'height' => 1080,
        ],
        BX_RESIZE_IMAGE_PROPORTIONAL
    )['src'];
}
