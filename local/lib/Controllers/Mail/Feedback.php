<?php

namespace GoFamily\Controllers\Mail;

use GoFamily\AjaxBase\Ajax\Response;
use Bitrix\Main\Request;

class Feedback
{
    public static function send(Request $request, Response $response): void
    {
        $data = json_decode($request->getInput(), true);
        $res = \CEvent::Send(
            'FEEDBACK_FORM',
            's1',
            [
                'EMAIL' => $data['data']['email'],
                'PHONE' => $data['data']['phone'],
                'COMMENT' => $data['data']['comment'],
                'NAME' => $data['data']['name'],
                'LAST_NAME' => $data['data']['lastName'],
                'ITEM_ID' => $data['data']['itemId'],
            ]
        );
        $response->response(['test' => $data, 'success' => true, 'res' => $res]);
    }
}
