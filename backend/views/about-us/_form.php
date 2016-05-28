<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
//use yii\widgets\ActiveForm;
use yii\helpers\Arrayhelper;
use backend\models\AboutUsType;

/* @var $this yii\web\View */
/* @var $model backend\models\AboutUs */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="about-us-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'aboutustype_id')->dropDownList(
    		ArrayHelper::map(AboutUsType::find()->all(),'aboutustype_id','type'),
    		['prompt'=>'Select Type'] )?>

    <?= $form->field($model, 'subsection')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'suborder')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        <?= Html::a('Cancel', ['index'], ['class' => 'btn btn-danger']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
