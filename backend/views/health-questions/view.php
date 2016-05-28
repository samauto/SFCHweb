<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\HealthQuestions */

$this->title = $model->healthq_id;
$this->params['breadcrumbs'][] = ['label' => 'Health Questions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="health-questions-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->healthq_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->healthq_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'healthq_id',
            'user_id',
            'question1',
            'answer1',
            'question2',
            'answer2',
            'question3',
            'answer3',
            'question4',
            'answer4',
            'question5',
            'answer5',
            'question6',
            'answer6',
            'question7',
            'answer7',
            'question8',
            'answer8',
            'question9',
            'answer9',
            'question10',
            'answer10',
        ],
    ]) ?>

</div>
