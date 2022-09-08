<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Application;

global $USER;

if(!$USER->IsAuthorized()) // Для неавторизованного
{
    $arResult['FAVORITES'] = (empty($_COOKIE["FAVORITES"])) ? [] : unserialize($_COOKIE["FAVORITES"]);
}
else {
    $idUser = $USER->GetID();
    $rsUser = CUser::GetByID($idUser);
    $arUser = $rsUser->Fetch();
    $arResult['FAVORITES'] = $arUser['UF_FAVORITES'];

}