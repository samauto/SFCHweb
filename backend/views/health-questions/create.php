<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\HealthQuestions */

$this->title = 'Create Health Questions';
$this->params['breadcrumbs'][] = ['label' => 'Health Questions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="health-questions-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
