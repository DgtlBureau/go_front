<?php

namespace GoFamily\AjaxBase\Ajax;

use Bitrix\Main\Application;

class Action
{
    public function __construct()
    {
        $request = Application::getInstance()->getContext()->getRequest();
        $input = json_decode($request->getInput(), true);
        $action = $request->toArray()['ajaxAction'] ? $request->toArray()['ajaxAction'] : $input['ajaxAction'];

        $isAjax = $request->isAjaxRequest()
            || strtolower($request->getHeaders()->get('Content-Type')) === 'application/json';
        if (!$isAjax || empty($action)) {
            return;
        }

        $actionDescription = null;
        foreach ($this->map() as $aDescription) {
            if ($aDescription[0] === $request->getRequestMethod() && $action === $aDescription[1]) {
                $actionDescription = $aDescription;
                break;
            }
        }

        [$reqMethod, $nameAction, $className, $method] = $actionDescription;

        $response = new Response();
        try {
            if (class_exists($className)) {
                $controller = new $className();
                if (method_exists($controller, $method)) {
                    $controller->$method($request, new Response());
                }
            }
        } catch (AjaxException $e) {
            $response->error([
                'message' => $e->getMessage(),
                'code' => $e->getCode(),
            ], 400);
        } catch (\Exception $e) {
            $message = 'unknown error';
            $response->error($message, 500);
        }

    }

    public function map(): array
    {
        return [
            ['POST', 'mail.claimAbonement', 'GoFamily\\Controllers\\Mail\\Abonement', 'claimAbonement'],
            ['POST', 'mail.sendFeedback', 'GoFamily\\Controllers\\Mail\\Feedback', 'send'],
        ];
    }
}
