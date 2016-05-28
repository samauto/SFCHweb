<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <link rel="icon" type="image/ico" href="favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<div id="container">
    <div id="header">
    <div class="navbar-inner">
    <?php
    NavBar::begin([
        'brandLabel' => 'SFCH',
        'brandUrl' => Yii::$app->homeUrl,
        'brandOptions' => ['style' => 'color: #FFFFFF text-size: 3em;'],
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    
    if (Yii::$app->user->isGuest) {
        $menuItems = [
            ['label' => '<span class="glyphicon glyphicon-home"></span> Home', 'url' => ['/site/index']],
            ['label' => '<span class="glyphicon glyphicon-book"></span> About', 'url' => ['/about-us/index']],
            ['label' => '<span class="glyphicon glyphicon-envelope"></span> Services', 'url' => ['/site/contact']],
            ['label' => '<span class="glyphicon glyphicon-envelope"></span> Missions', 'url' => ['/site/contact']],
            ['label' => '<span class="glyphicon glyphicon-envelope"></span> Contact', 'url' => ['/site/contact']],
        ];
    } 
    else {
        $menuItems[] = ['label' => '<span class="glyphicon glyphicon-dashboard"></span> Dashboard', 'url' => ['/user/index']];
        $menuItems[] = [
            'label' => '<span class="glyphicon glyphicon-off"></span> Logout (' . Yii::$app->user->identity->username . ')',
            'url' => ['/site/logout'],
            'linkOptions' => ['data-method' => 'post']
        ];    
    }

    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
        'encodeLabels' => false,
    ]);
    NavBar::end();
    ?>
    </div>
    </div>

    <div id = "body">
    <body>
    <?php $this->beginBody() ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    <?php $this->endBody() ?>
    </body>
    </div>

   

</div>

</html>
<?php $this->endPage() ?>





