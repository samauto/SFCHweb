<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\FooterMenuSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Footer Menus';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="footer-menu-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Dashboard', ['admin-control/dashboard'], ['class' => 'btn btn-danger']) ?>
        <?= Html::a('Create Footer Menu', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'footer_id',
            'foot_head',
            'foot_link',
            'foot_linkname',
            'foot_visible',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
