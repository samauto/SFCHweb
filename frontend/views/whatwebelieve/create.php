<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Whatwebelieve */

$this->title = Yii::t('app', 'Create Whatwebelieve');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Whatwebelieves'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="whatwebelieve-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
