<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CareersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Careers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="careers-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Dashboard', ['admin-control/dashboard'], ['class' => 'btn btn-danger']) ?>
        <?= Html::a('Create Careers', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'careers_id',
            'careers_sub',
            'careers_pg',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
