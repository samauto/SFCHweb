<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\AdminControl */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="admin-control-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'admin_panel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'admin_link')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'admin_pic')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'admin_visible')->textInput() ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
