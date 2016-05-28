<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\AdminControl */

$this->title = 'Create Admin Control';
$this->params['breadcrumbs'][] = ['label' => 'Admin Controls', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="admin-control-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
