<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Location */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="location-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'loc_street')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'loc_city')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'loc_state')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'loc_zip')->textInput() ?>

    <?= $form->field($model, 'loc_back')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
