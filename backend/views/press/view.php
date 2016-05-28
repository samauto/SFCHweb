<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Press */

$this->title = $model->press_id;
$this->params['breadcrumbs'][] = ['label' => 'Presses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="press-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->press_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->press_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'press_id',
            'press_sub',
            'press_pg',
        ],
    ]) ?>

</div>
