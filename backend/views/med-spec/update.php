<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\MedSpec */

$this->title = 'Update Med Spec: ' . ' ' . $model->medspec_id;
$this->params['breadcrumbs'][] = ['label' => 'Med Specs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->medspec_id, 'url' => ['view', 'id' => $model->medspec_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="med-spec-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
