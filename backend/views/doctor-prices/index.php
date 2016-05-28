<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\DoctorPricesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Doctor Prices';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="doctor-prices-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
    <?= Html::a('Dashboard', ['admin-control/dashboard'], ['class' => 'btn btn-danger']) ?>
    <?= Html::a('Create Doctor Prices', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'doc_prices_id',
            'doc_id',
            'Family',
            'Cardiac',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
