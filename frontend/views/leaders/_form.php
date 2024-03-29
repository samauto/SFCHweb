<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Leaders */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="leaders-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'lead_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lead_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lead_body')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lead_pic')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lead_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lead_order')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
