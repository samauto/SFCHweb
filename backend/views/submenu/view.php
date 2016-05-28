<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Submenu */

$this->title = $model->submenu_id;
$this->params['breadcrumbs'][] = ['label' => 'Submenus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="submenu-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->submenu_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->submenu_id], [
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
            'submenu_id',
            'sub_name',
            'sub_link',
            'sub_pic',
        ],
    ]) ?>

</div>
