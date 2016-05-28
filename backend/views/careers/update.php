<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Careers */

$this->title = 'Update Careers: ' . ' ' . $model->careers_id;
$this->params['breadcrumbs'][] = ['label' => 'Careers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->careers_id, 'url' => ['view', 'id' => $model->careers_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="careers-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
