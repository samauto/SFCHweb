<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\MedSpec */

$this->title = 'Create Med Spec';
$this->params['breadcrumbs'][] = ['label' => 'Med Specs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="med-spec-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
