<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Privacy */

$this->title = $model->privacy_id;
$this->params['breadcrumbs'][] = ['label' => 'Privacies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="privacy-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->privacy_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->privacy_id], [
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
            'privacy_id',
            'privacy_sub',
            'privacy_pg',
        ],
    ]) ?>

</div>
