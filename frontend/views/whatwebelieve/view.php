<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Whatwebelieve */

$this->title = $model->what_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Whatwebelieves'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="whatwebelieve-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->what_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->what_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'what_id',
            'type',
            'body:ntext',
            'verse',
            'order',
        ],
    ]) ?>

</div>
