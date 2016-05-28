<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\RefundSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Refund Policy';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="refund-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Dashboard', ['admin-control/dashboard'], ['class' => 'btn btn-danger']) ?>
        <?= Html::a('Create Refund', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'refund_id',
            'refund_sub',
            'refund_pg',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
