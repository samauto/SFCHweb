<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\AboutUsType */

$this->title = 'Update Sub Title: ' . ' ' . $model->type;
$this->params['breadcrumbs'][] = ['label' => 'About Us', 'url' => ['about-us/index']];
$this->params['breadcrumbs'][] = ['label' => 'Sub Title', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->type, 'url' => ['view', 'id' => $model->aboutustype_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="about-us-type-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
