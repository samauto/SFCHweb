<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PressSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Press';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="press-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Dashboard', ['admin-control/dashboard'], ['class' => 'btn btn-danger']) ?>
        <?= Html::a('Create Press', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'press_id',
            'press_sub',
            'press_pg',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
