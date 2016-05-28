<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\LeadersSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="leaders-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'lead_id') ?>

    <?= $form->field($model, 'lead_title') ?>

    <?= $form->field($model, 'lead_name') ?>

    <?= $form->field($model, 'lead_body') ?>

    <?= $form->field($model, 'lead_pic') ?>

    <?php // echo $form->field($model, 'lead_type') ?>

    <?php // echo $form->field($model, 'lead_order') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
