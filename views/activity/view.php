<?php

/**
 * @var $this yii\web\View
 * @var $model Activity
 */

use app\models\Activity;
use yii\helpers\Html;

?>
<div class="row">
    <h1>Просмотр события</h1>

    <div class="form-group pull-right">
        <?= Html::a('К списку', ['activity/index'], ['class' => 'btn btn-info']) ?>
        <?= Html::a('Изменить', ['activity/edit', 'id' => $model->id], ['class' => 'btn btn-success']) ?>
    </div>
</div>

<h2><?= Html::encode($model['title']) ?></h2>

<p><?= Html::encode($model['description']) ?></p>

<ul>
    <li><strong>Пользователь: </strong><?= $model['user_id'] ?></li>
    <li><strong>Повтор: </strong><?= $model['repeat'] ?></li>
    <li><strong>Блокирующее: </strong><?= $model['blocked'] ?></li>
    <li><strong>Начало: </strong><?= $model['date_start'] ?></li>
    <li><strong>Окончание: </strong><?= $model['date_end'] ?></li>
</ul>