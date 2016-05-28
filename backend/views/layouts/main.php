<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'Bill$OfHealth Administration',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse',
        ],
    ]);

    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        //$menuItems[] = ['label' => 'Health Questions', 'url' => ['/health-questions/index']];

        //$menuItems[] = ['label' => 'Doctor Prices', 'url' => ['/doctor-prices/index']];


        $menuItems[] = ['label' => 'Admin_Control', 'url' => ['/admin-control/index']];
        $menuItems[] = ['label' => 'Admin_Dashboard', 'url' => ['/admin-control/dashboard']];
        $menuItems[] = ['label' => 'MedSpec', 'url' => ['/med-spec/index']];

        //$menuItems[] = ['label' => 'Sub Menu', 'url' => ['/submenu/index']];
        //$menuItems[] = ['label' => 'Footer Menu', 'url' => ['/footer-menu/index']];

        //$menuItems[] = ['label' => 'AboutUs', 'url' => ['/about-us/index']];
        //$menuItems[] = ['label' => 'Faq', 'url' => ['/faq/index']];
        //$menuItems[] = ['label' => 'Press', 'url' => ['/press/index']];
        //$menuItems[] = ['label' => 'Investor', 'url' => ['/investor/index']];
        //$menuItems[] = ['label' => 'Sales', 'url' => ['/sales/index']];
        //$menuItems[] = ['label' => 'Careers', 'url' => ['/careers/index']];
        //$menuItems[] = ['label' => 'Terms', 'url' => ['/terms/index']];
        //$menuItems[] = ['label' => 'Privacy', 'url' => ['/privacy/index']];
        //$menuItems[] = ['label' => 'Refund', 'url' => ['/refund/index']];
        //$menuItems[] = ['label' => 'Fraud', 'url' => ['/fraud/index']];



             //$menuItems[] = ['label' => 'Faq Types', 'url' => ['/faq-type/index']];
        
        $menuItems[] = [
            'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
            'url' => ['/site/logout'],
            'linkOptions' => ['data-method' => 'post']
        ];
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; Bill$OfHealth <?= date('Y') ?> All Rights Reserved</p>

        <p class="pull-right">Saving your wealth with Bills of Health</p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
