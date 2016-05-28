<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Faq */

$this->title = 'Create FAQ';
$this->params['breadcrumbs'][] = ['label' => 'FAQ', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="faq-create">

    <h1><?= Html::encode($this->title) ?></h1>   
    
    <p>
    <?= Html::a('Create FAQ Type', ['faq-type/create'], ['class' => 'btn btn-danger']) ?>
	</p>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
