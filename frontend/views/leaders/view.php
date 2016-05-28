<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Leaders */

$this->title = $model->lead_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Leaders'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="leaders-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->lead_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->lead_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'lead_id',
            'lead_title',
            'lead_name',
            'lead_body',
            'lead_pic',
            'lead_type',
            'lead_order',
        ],
    ]) ?>

</div>
