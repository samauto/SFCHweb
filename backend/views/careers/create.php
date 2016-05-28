<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Careers */

$this->title = 'Create Careers';
$this->params['breadcrumbs'][] = ['label' => 'Careers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="careers-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
