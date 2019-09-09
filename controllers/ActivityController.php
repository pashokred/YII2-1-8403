<?php
/**
 * Created by Artyom Manchenkov
 * artyom@manchenkoff.me
 * manchenkoff.me © 2019
 */

namespace app\controllers;

use yii\web\Controller;

class ActivityController extends Controller
{
    public function actionIndex()
    {
        return 'Activity@index';
    }

    public function actionView()
    {
        return 'Activity@view';
    }

    public function actionCreate()
    {
        return 'Activity@create';
    }
}