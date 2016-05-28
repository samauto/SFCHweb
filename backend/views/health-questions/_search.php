<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\HealthQuestionsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="health-questions-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'healthq_id') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'question1') ?>

    <?= $form->field($model, 'answer1') ?>

    <?= $form->field($model, 'question2') ?>

    <?php // echo $form->field($model, 'answer2') ?>

    <?php // echo $form->field($model, 'question3') ?>

    <?php // echo $form->field($model, 'answer3') ?>

    <?php // echo $form->field($model, 'question4') ?>

    <?php // echo $form->field($model, 'answer4') ?>

    <?php // echo $form->field($model, 'question5') ?>

    <?php // echo $form->field($model, 'answer5') ?>

    <?php // echo $form->field($model, 'question6') ?>

    <?php // echo $form->field($model, 'answer6') ?>

    <?php // echo $form->field($model, 'question7') ?>

    <?php // echo $form->field($model, 'answer7') ?>

    <?php // echo $form->field($model, 'question8') ?>

    <?php // echo $form->field($model, 'answer8') ?>

    <?php // echo $form->field($model, 'question9') ?>

    <?php // echo $form->field($model, 'answer9') ?>

    <?php // echo $form->field($model, 'question10') ?>

    <?php // echo $form->field($model, 'answer10') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
