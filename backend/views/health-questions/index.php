<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\HealthQuestionsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Health Questionaire';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="health-questions-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Dashboard', ['admin-control/dashboard'], ['class' => 'btn btn-danger']) ?>
        <?= Html::a('Create Health Question', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'healthq_id',
            'user_id',
            'question1',
            'answer1',
            'question2',
             'answer2',
             'question3',
             'answer3',
            // 'question4',
            // 'answer4',
            // 'question5',
            // 'answer5',
            // 'question6',
            // 'answer6',
            // 'question7',
            // 'answer7',
            // 'question8',
            // 'answer8',
            // 'question9',
            // 'answer9',
            // 'question10',
            // 'answer10',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
