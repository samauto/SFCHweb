<?php

use yii\helpers\Html;
use kartik\grid\GridView;
//use kartik\grid\DataColumn;
//use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\FaqSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'FAQ';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="faq-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Dashboard', ['admin-control/dashboard'], ['class' => 'btn btn-danger']) ?>
        <?= Html::a('Create Faq', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Create Faq Type', ['faq-type/create'], ['class' => 'btn btn-info']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,

        'columns' => [
            ['class' => '\kartik\grid\SerialColumn'],
            
            [
                'attribute'=>'faq_type_id',
                'value'=>'faqType.type',
            ],
 
            [
            'attribute'=>'question',
            'format'=>'raw',
            'value' => function($data) {
                return '<div class="kv-expanded-content">'.$data->question.'</div>';},
            ],

            [
            'attribute'=>'answer',
            'format'=>'raw',
            'value' =>function($data) {
                return '<div class="kv-expanded-content">'.$data->answer.'</div>';},
            ],

            ['class' => '\kartik\grid\ActionColumn'],
        ],
        
        'responsive'=>true,
        'hover'=>true,

    ]); ?>
</div>
</div>
