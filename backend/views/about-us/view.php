<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\AboutUs */



$this->title = "SubSection";
$this->params['breadcrumbs'][] = ['label' => 'About Us', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="about-us-view">


    <p>
        <?= Html::a('Update', ['update', 'id' => $model->aboutus_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->aboutus_id], [
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
            //'aboutus_id',
            'aboutustype.type',
            'subsection',
            'suborder',
        ],
    ]) ?>
     <p>
        <?= Html::a('About Us Home', ['index'], ['class' => 'btn btn-warning']) ?>
    </p>    

</div>
