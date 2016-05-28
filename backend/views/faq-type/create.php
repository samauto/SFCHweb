<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\FaqType */


$this->title = 'Create';
$this->params['breadcrumbs'][] = ['label' => 'FAQ', 'url' => ['faq/index']];
$this->params['breadcrumbs'][] = ['label' => 'Type', 'url' => ['faq-type/index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="faq-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
