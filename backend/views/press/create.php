<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Press */

$this->title = 'Create Press';
$this->params['breadcrumbs'][] = ['label' => 'Presses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="press-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
