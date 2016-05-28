<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PrivacySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Privacy Policy';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="privacy-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Dashboard', ['admin-control/dashboard'], ['class' => 'btn btn-danger']) ?>
        <?= Html::a('Create Privacy Policy', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'privacy_id',
            'privacy_sub',
            'privacy_pg',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
