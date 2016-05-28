<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\MedSpec */

$this->title = $model->medspec_id;
$this->params['breadcrumbs'][] = ['label' => 'Med Specs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="med-spec-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->medspec_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->medspec_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'medspec_id',
            'special',
            'description',
            'display',
        ],
    ]) ?>

</div>
