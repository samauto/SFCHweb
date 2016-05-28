<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\AboutUs */

$this->title = 'Create SubSection ';
$this->params['breadcrumbs'][] = ['label' => 'About Us', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="about-us-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
    <?= Html::a('Create Sub Title', ['about-us-type/create'], ['class' => 'btn btn-danger']) ?>
	</p>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
