<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Press */

$this->title = 'Update Press: ' . ' ' . $model->press_id;
$this->params['breadcrumbs'][] = ['label' => 'Presses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->press_id, 'url' => ['view', 'id' => $model->press_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="press-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
