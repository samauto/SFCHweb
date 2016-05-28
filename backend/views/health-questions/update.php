<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\HealthQuestions */

$this->title = 'Update Health Questions: ' . ' ' . $model->healthq_id;
$this->params['breadcrumbs'][] = ['label' => 'Health Questions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->healthq_id, 'url' => ['view', 'id' => $model->healthq_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="health-questions-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
