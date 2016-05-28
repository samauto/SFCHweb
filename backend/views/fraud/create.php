<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Fraud */

$this->title = 'Create Fraud';
$this->params['breadcrumbs'][] = ['label' => 'Frauds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fraud-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
