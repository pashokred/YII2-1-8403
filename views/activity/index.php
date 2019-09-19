<?php

/**
 * @var $this yii\web\View
 * @var Activity[] $activities
 */

use app\models\Activity;
use yii\helpers\Html;

?>

<div class="row">
    <h1>Список событий</h1>

    <div class="form-group pull-right">
        <?= Html::a('Создать', ['activity/edit'], ['class' => 'btn btn-success pull-right']) ?>
    </div>
</div>

<ul>
    <?php foreach ($activities as $item) { ?>
        <li style="padding: 20px 0;">
            <?= $item->title ?> |
            <?= Html::a('Просмотр', ['activity/view', 'id' => $item->id]) ?> |
            <?= Html::a('Изменить', ['activity/edit', 'id' => $item->id]) ?>
        </li>
    <?php } ?>
</ul>