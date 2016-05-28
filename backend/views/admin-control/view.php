<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\AdminControl */

$this->title = $model->admin_id;
$this->params['breadcrumbs'][] = ['label' => 'Admin Controls', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="admin-control-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->admin_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->admin_id], [
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
            'admin_id',
            'admin_panel',
            'admin_link',
            'admin_pic',
            'admin_visible',
        ],
    ]) ?>

</div>
