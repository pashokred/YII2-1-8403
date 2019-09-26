<?php
/**
 * Created by Artyom Manchenkov
 * artyom@manchenkoff.me
 * manchenkoff.me © 2019
 */

namespace app\modules\calendar\controllers;

use app\models\Activity;
use yii\rest\ActiveController;

class ActivityController extends ActiveController
{
    public $modelClass = Activity::class;
}