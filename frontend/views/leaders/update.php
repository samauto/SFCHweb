<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Leaders */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Leaders',
]) . ' ' . $model->lead_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Leaders'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->lead_id, 'url' => ['view', 'id' => $model->lead_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="leaders-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
