<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Fraud */

$this->title = 'Update Fraud: ' . ' ' . $model->fraud_id;
$this->params['breadcrumbs'][] = ['label' => 'Frauds', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->fraud_id, 'url' => ['view', 'id' => $model->fraud_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="fraud-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
