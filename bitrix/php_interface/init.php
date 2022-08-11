<?
namespace CustomElement;

define("CUSTOMELEMENT_IBLOCK_TYPE","content"); // тип инфоблока

define("CUSTOMELEMENT_IBLOCK_ID",21); // ID инфоблока

define("CUSTOMELEMENT_ELEMENT_ID",73); // ID элемента инфоблока



AddEventHandler("main", "OnBuildGlobalMenu", '\CustomElement\onBuildGlobalMenu');

// убираем вложенные пункты в меню "Контент" у инфоблока и устанавливаем у него ссылку на единственный элемент

function onBuildGlobalMenu(&$aGlobalMenu, &$aModuleMenu)

{

   global $USER;

   foreach ($aModuleMenu as &$arMenu) 

   {

      if($arMenu["items_id"]=="menu_iblock_/".CUSTOMELEMENT_IBLOCK_TYPE)

      {

         foreach ($arMenu["items"] as &$arMenu2)

         {

            if($arMenu2["items_id"]=="menu_iblock_/".CUSTOMELEMENT_IBLOCK_TYPE."/".CUSTOMELEMENT_IBLOCK_ID) 

            {

               $arMenu2["url"] = "/bitrix/admin/iblock_element_edit.php?IBLOCK_ID=".CUSTOMELEMENT_IBLOCK_ID."&type=".CUSTOMELEMENT_IBLOCK_TYPE."&ID=".CUSTOMELEMENT_ELEMENT_ID."&lang=ru&find_section_section=-1&WF=Y";

               $arMenu2["items"] = array();

               $arMenu2["dynamic"] = false;

               break;

            }

         }

         unset($arMenu2);

         break;

      }

   }

   unset($arMenu);

}



AddEventHandler("iblock", "OnBeforeIBlockElementDelete", '\CustomElement\OnBeforeIBlockElementDelete');

// запрещаем удаление элемента

function onBeforeIBlockElementDelete($ID)

{

   if($ID==CUSTOMELEMENT_ELEMENT_ID) 

   {

       $GLOBALS["APPLICATION"]->throwException("Этот элемент нельзя удалить");

        return false;          

    }

}





AddEventHandler("iblock", "OnBeforeIBlockElementAdd", '\CustomElement\onBeforeIBlockElementAdd');

// запрещаем добавление других элементов в этот инфоблок

function onBeforeIBlockElementAdd(&$arFields)

{

   if($arFields["IBLOCK_ID"]==CUSTOMELEMENT_IBLOCK_ID) 

   {

       $GLOBALS["APPLICATION"]->throwException("Добавление элементов в этот инфоблок запрещено");

        return false;          

    }

}



AddEventHandler("main", "OnAdminContextMenuShow", '\CustomElement\onAdminContextMenuShow');

// убираем для этого инфоблока контекстные кнопки

function onAdminContextMenuShow(&$items)

{

   if(

      in_array($GLOBALS["APPLICATION"]->GetCurPage(),array(

         "/bitrix/admin/iblock_element_admin.php",

         "/bitrix/admin/iblock_element_edit.php",

      ))

      && 

      $_REQUEST["IBLOCK_ID"]==CUSTOMELEMENT_IBLOCK_ID

   )

      $items = array();

}



AddEventHandler("main", "OnBeforeLocalRedirect", '\CustomElement\onBeforeLocalRedirect');

// отменяем редирект на список элементов после сохранения элемента

function onBeforeLocalRedirect(&$url, $skip_security_check, $bExternal)

{

   if(

      in_array($GLOBALS["APPLICATION"]->GetCurPage(),array(

         "/bitrix/admin/iblock_element_edit.php",

      ))

      && 

      $_REQUEST["IBLOCK_ID"]==CUSTOMELEMENT_IBLOCK_ID

   )

      $url = $GLOBALS["APPLICATION"]->GetCurPageParam()."&ID=".CUSTOMELEMENT_ELEMENT_ID;

}
