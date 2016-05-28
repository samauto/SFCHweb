<?php

use yii\helpers\Html;
use kartik\grid\GridView;
//use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\AboutUsTypeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sub Title';
$this->params['breadcrumbs'][] = ['label' => 'About Us', 'url' => ['about-us/index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="about-us-type-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Sub Title', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'kartik\grid\SerialColumn'],

            //'aboutustype_id',
            'orderoftype',
            'type',
            ['class' => 'kartik\grid\ActionColumn'],
        ],
 
        'responsive'=>true,
        'hover'=>true
        
    ]); ?>
    <p>
        <?= Html::a('About Us Home', ['about-us/index'], ['class' => 'btn btn-warning']) ?>
    </p>    


</div>
