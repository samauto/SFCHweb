<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Investor */

$this->title = 'Update Investor: ' . ' ' . $model->invest_id;
$this->params['breadcrumbs'][] = ['label' => 'Investors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->invest_id, 'url' => ['view', 'id' => $model->invest_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="investor-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
