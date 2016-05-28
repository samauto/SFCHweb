<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\MedSpecSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Med Specs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="med-spec-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Med Spec', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'medspec_id',
            'special',
            'description',
            'display',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
