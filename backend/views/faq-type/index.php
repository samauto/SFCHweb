<?php

use yii\helpers\Html;
use kartik\grid\GridView;
//use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\FaqTypeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'FAQ Types';
$this->params['breadcrumbs'][] = ['label' => 'FAQ', 'url' => ['faq/index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="faq-type-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Faq Type', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'kartik\grid\SerialColumn'],

            //'faq_type_id',
            'type',

            ['class' => 'kartik\grid\ActionColumn'],
        ],
    ]); ?>
    <p>
        <?= Html::a('Faq Home', ['faq/index'], ['class' => 'btn btn-warning']) ?>
    </p>    


</div>
