<?php

namespace GoFamily\AjaxBase\Ajax;

class Response
{
    protected function _response($data = [], $code = 200): void
    {
        global $APPLICATION;
        $APPLICATION->RestartBuffer();
        header('Content-type: application/json');
        header('Access-Control-Allow-Origin: yrusportal.extyl.pro');
        header(Http::getHttpStatus($code));
        echo json_encode($data);
        die();
    }

    public function response($data = [], $code = 200): void
    {
        $this->_response([
            'data' => $data,
        ]);
    }

    public function error($data, $code = 500): void
    {
        $this->_response([
            'error' => $data,
        ], $code);
    }

}
