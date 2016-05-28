<?php

use yii\helpers\Html;
use yii\helpers\Arrayhelper;
use yii\bootstrap\ActiveForm;
//use yii\widgets\ActiveForm;
use backend\models\FaqType;

/* @var $this yii\web\View */
/* @var $model backend\models\Faq */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="faq-form">

    <?php $form = ActiveForm::begin(); ?>
    
    <?= $form->field($model, 'faq_type_id')->dropDownList(
    		ArrayHelper::map(FaqType::find()->all(),'faq_type_id','type'),
    		['prompt'=>'Select Type'] )?>
            
    <?= $form->field($model, 'question')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'answer')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        <?= Html::a('Cancel', ['index'], ['class' => 'btn btn-danger']) ?>
    </div>


    <?php ActiveForm::end(); ?>

</div>
