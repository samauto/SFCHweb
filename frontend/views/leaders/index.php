<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\LeadersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Leaders');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="leaders-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Leaders'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'lead_id',
            'lead_title',
            'lead_name',
            'lead_body',
            'lead_pic',
            // 'lead_type',
            // 'lead_order',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
