<?php

use yii\helpers\Html;
use kartik\grid\GridView;
//use yii\grid\GridView;


/* @var $this yii\web\View */
/* @var $searchModel backend\models\AboutUsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'About Us';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="about-us-index">

        <h1><?= Html::encode($this->title) ?></h1>
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        <p>
            <?= Html::a('Dashboard', ['admin-control/dashboard'], ['class' => 'btn btn-danger']) ?>
            <?= Html::a('Create SubSection', ['create'], ['class' => 'btn btn-success']) ?>
            <?= Html::a('Create Sub Title', ['about-us-type/create'], ['class' => 'btn btn-info']) ?>
        </p>


        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'kartik\grid\SerialColumn'],
                [
                    'attribute'=>'aboutustype_id',
                    'value'=>'aboutustype.type',
                ],

                //'aboutus_id',
                //'aboutustype_id',
                [
                'attribute'=>'subsection',
                'format'=>'raw',
                'value' =>function($data) {
                return '<div class="kv-expanded-content">'.$data->subsection.'</div>';},
                ],
                'suborder',        
                ['class' => 'kartik\grid\ActionColumn'],
            ],
        
            'responsive'=>true,
            'hover'=>true
            
        ]); ?>
</div>

</div>
