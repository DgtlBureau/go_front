<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/local/vendor/autoload.php');

if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/local/php_interface/include/events.php')) {
    require_once($_SERVER['DOCUMENT_ROOT'] . '/local/php_interface/include/events.php');
}

if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/local/php_interface/include/site_settings.php')) {
    require_once($_SERVER['DOCUMENT_ROOT'] . '/local/php_interface/include/site_settings.php');
}