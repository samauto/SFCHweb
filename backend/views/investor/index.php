<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\InvestorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Investor';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="investor-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Dashboard', ['admin-control/dashboard'], ['class' => 'btn btn-danger']) ?>
        <?= Html::a('Create Investor', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'invest_id',
            'invest_sub',
            'invest_pg',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
