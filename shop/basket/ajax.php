<?
require_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

use Bitrix\Main\Application;
use Bitrix\Main\Web\Cookie;


$request = \Bitrix\Main\Context::getCurrent()->getRequest();
if ($request->isPost()) {


    $application = Application::getInstance();
    $context = $application->getContext();


    \Bitrix\Main\Loader::includeModule("sale");
    \Bitrix\Main\Loader::includeModule("catalog");

    $post = $request->getPostList();
    if (empty($post['id']))
        die();

    // удаление
    if ($post["action"] == 'delete') {
        \CSaleBasket::Delete($_POST["id"]);
    } // избранное
    elseif ($post["action"] == 'favourites_add' || $post["action"] == 'favourites_delete') {
        global $APPLICATION, $USER;

        if (!empty($post['id'])) {
            // Для неавторизованного
            if (!$USER->IsAuthorized()) {
                $arElements = (empty($_COOKIE["FAVORITES"])) ? [] : unserialize($_COOKIE["FAVORITES"]);

                if (!in_array($post['id'], $arElements)) {
                    $arElements[] = $post['id'];
                } else {
                    $key = array_search($post['id'], $arElements); // Находим элемент, который нужно удалить из избранного
                    unset($arElements[$key]);
                }

                setcookie("FAVORITES", serialize($arElements), time()+86400, "/", "go-family.ru");

            } else { // Для авторизованного

                $idUser = $USER->GetID();
                $arUser = CUser::GetByID($idUser)->Fetch();
                $arElements = $arUser['UF_FAVORITES'];  // Достаём избранное пользователя
                if (!in_array($post['id'], $arElements)) // Если еще нету этой позиции в избранном
                {
                    $arElements[] = $post['id'];
                } else {
                    $key = array_search($post['id'], $arElements); // Находим элемент, который нужно удалить из избранного
                    unset($arElements[$key]);
                }
                $USER->Update($idUser, array("UF_FAVORITES" => $arElements)); // Добавляем элемент в избранное
            }

            $result = count($arElements);

        }
        /* Избранное */
        echo $result;
    } else {
        // добавление
        $fields = [
            'PRODUCT_ID' => $post['id'],
            'QUANTITY' => $post['quantity'],
        ];

        if (!empty($post['PROPS'])) {
            $arPropsCode = array_keys($post['PROPS']);

            $iterator = \Bitrix\Iblock\PropertyTable::query()
                ->setFilter(['IBLOCK.CODE' => 'catalog', 'CODE' => $arPropsCode])
                ->setSelect(['NAME', 'CODE'])
                ->exec();

            while ($res = $iterator->fetch())
                $fields['PROPS'][] = ['NAME' => $res['NAME'], 'CODE' => $res['CODE'], 'VALUE' => $post['PROPS'][$res['CODE']]];
        }

        $r = \Bitrix\Catalog\Product\Basket::addProduct($fields);
        if (!$r->isSuccess()) {
            echo "<pre>";
            print_r($r->getErrorMessages());
            echo "</pre>";
        } else {
            $result = array(
                'STATUS' => 'OK'
            );
            echo json_encode($result);
        }
    }


}


