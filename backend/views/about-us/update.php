<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\AboutUs */

$this->title = 'Update Subsection';
$this->params['breadcrumbs'][] = ['label' => 'About Us', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Update SubSection';
?>
<div class="about-us-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
