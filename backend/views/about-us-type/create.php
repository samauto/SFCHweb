<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\AboutUsType */

$this->title = 'Create';
$this->params['breadcrumbs'][] = ['label' => 'About Us', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => 'Sub Title', 'url' => ['about-us-type/index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="about-us-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
