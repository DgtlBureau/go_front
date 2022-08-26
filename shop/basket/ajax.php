<?
require_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");


$request = \Bitrix\Main\Context::getCurrent()->getRequest();
if ($request->isPost()) {
    \Bitrix\Main\Loader::includeModule("sale");
    \Bitrix\Main\Loader::includeModule("catalog");

    $post = $request->getPostList();
    if (empty($post['id']))
        die();

    // удаление
    if ($post["action"] == 'delete') {
        \CSaleBasket::Delete($_POST["id"]);
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


