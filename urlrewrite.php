<?php
$arUrlRewrite=array (
  24 => 
  array (
    'CONDITION' => '#^/trainer-page-gohockey/(.*)/.*#',
    'RULE' => 'ELEMENT_CODE=$1',
    'ID' => 'bitrix:news',
    'PATH' => '/trainer-page-gohockey/index.php',
    'SORT' => 100,
  ),
  0 => 
  array (
    'CONDITION' => '#^\\/?\\/mobileapp/jn\\/(.*)\\/.*#',
    'RULE' => 'componentName=$1',
    'ID' => NULL,
    'PATH' => '/bitrix/services/mobileapp/jn.php',
    'SORT' => 100,
  ),
  25 => 
  array (
    'CONDITION' => '#^/team-page-gohockey/(.*)/.*#',
    'RULE' => 'ELEMENT_CODE=$1',
    'ID' => 'bitrix:news',
    'PATH' => '/team-page-gohockey/index.php',
    'SORT' => 100,
  ),
  2 => 
  array (
    'CONDITION' => '#^/bitrix/services/ymarket/#',
    'RULE' => '',
    'ID' => '',
    'PATH' => '/bitrix/services/ymarket/index.php',
    'SORT' => 100,
  ),
  4 => 
  array (
    'CONDITION' => '#^/shop/catalog/([A-z]+)/#',
    'RULE' => '',
    'ID' => 'bitrix:catalog.element',
    'PATH' => '/shop/catalog/detail.php',
    'SORT' => 100,
  ),
  9 => 
  array (
    'CONDITION' => '#^/teams/team-gohockey/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/teams/team-gohockey/index.php',
    'SORT' => 100,
  ),
  22 => 
  array (
    'CONDITION' => '#^/trainer-page/(.*)/.*#',
    'RULE' => 'ELEMENT_CODE=$1',
    'ID' => 'bitrix:news',
    'PATH' => '/trainer-page/index.php',
    'SORT' => 100,
  ),
  26 => 
  array (
    'CONDITION' => '#^/team-page-gohockey/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/teams/team-gohockey/index.php',
    'SORT' => 100,
  ),
  8 => 
  array (
    'CONDITION' => '#^/teams/team-go/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/teams/team-go/index.php',
    'SORT' => 100,
  ),
  29 => 
  array (
    'CONDITION' => '#^/shop/catalog/#',
    'RULE' => '',
    'ID' => 'bitrix:catalog',
    'PATH' => '/shop/catalog/index.php',
    'SORT' => 100,
  ),
  27 => 
  array (
    'CONDITION' => '#^/team-page/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/team-page/index.php',
    'SORT' => 100,
  ),
  30 => 
  array (
    'CONDITION' => '#^\\??(.*)#',
    'RULE' => '&$1',
    'ID' => 'bitrix:catalog.section',
    'PATH' => '/shop/index.php',
    'SORT' => 100,
  ),
  1 => 
  array (
    'CONDITION' => '#^/rest/#',
    'RULE' => '',
    'ID' => NULL,
    'PATH' => '/bitrix/services/rest/index.php',
    'SORT' => 100,
  ),
);
