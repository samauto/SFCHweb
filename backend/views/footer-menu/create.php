<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\FooterMenu */

$this->title = 'Create Footer Menu';
$this->params['breadcrumbs'][] = ['label' => 'Footer Menus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="footer-menu-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
