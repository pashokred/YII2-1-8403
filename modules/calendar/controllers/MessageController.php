<?php
/**
 * Created by Artyom Manchenkov
 * artyom@manchenkoff.me
 * manchenkoff.me © 2019
 */

namespace app\modules\calendar\controllers;

use yii\rest\Controller;

class MessageController extends Controller
{
    public $enableCsrfValidation = false;

    // calendar/hello/John
    public function actionHello($name)
    {
        return [
            'message' => "Hello, {$name}"
        ];
    }
}