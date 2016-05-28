<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Investor */

$this->title = $model->invest_id;
$this->params['breadcrumbs'][] = ['label' => 'Investors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="investor-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->invest_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->invest_id], [
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
            'invest_id',
            'invest_sub',
            'invest_pg',
        ],
    ]) ?>

</div>
