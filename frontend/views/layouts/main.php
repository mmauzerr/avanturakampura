<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use yii\bootstrap\Carousel;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?= Yii::$app->request->baseUrl ?>/images/favicon.ico" type="image/x-icon">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>

<?php $this->beginBody() ?>
<div class="top-header navbar-fixed-top" align="center">
    <span style="opacity: 1;color: #eeff0d;">&nbsp;&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;&nbsp;</span>
    <p><a href="http://avanturakampura.rs" target="_blank">www.avanturakampura.rs</a></p>
    <span style="opacity: 1;color: #eeff0d;">&nbsp;&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;&nbsp;</span>
    <p style="padding-left: 5px">tel: +381-64-1-404-404</p>
    <span style="opacity: 1;color: #eeff0d;">&nbsp;&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;&nbsp;</span>
    <div id="icons">
        <div id="fcb">
            <a href="https://www.facebook.com/avanturakampura?fref=ts" target="_blank">
                <?php echo Html::img('@web/images/facebook.png',['width' => '20']); ?>
            </a>
        </div>
        <div id="twt">
            <a href="https://twitter.com/AvanturaKampURA"  target="_blank">
                <?php echo Html::img('@web/images/twitter.png',['width' => '21']); ?>
            </a>
        </div>
    </div>
</div>
<!-- for using animated gradient background delete "_disconnect" in warp div -->
<div class="wrap clearfix" id="gradient">

    <?php
    NavBar::begin([
        'brandLabel' => 'Avantura kamp URA',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-fixed navbar-fixed-top clearfix',
            'style' => 'background-color: #3aae0b;
                        margin-left: -10px;
                        margin-right: -10px;
                        padding: 8px 0 0 0;
                        border-bottom: 1px solid yellow;
                        box-shadow: 0 2px 5px black'
        ],
    ]);
    $menuItems = [
        [
            'label' => 'Početna',
            'url' => ['/site/index']
        ],
        [
            'label' => 'O nama',
            'url' => ['/site/about']
        ],
        [
            'label' => 'Leto',
            'items' => [
                ['label' => 'Aktivnosti', 'url' => ['/aktivnosti/index']],
                '<li class="divider"></li>',
//                '<li class="dropdown-header">Dropdown Header</li>',
                ['label' => 'Dnevni raspored', 'url' => ['/dnevni-raspored/index']],
                '<li class="divider"></li>',
                ['label' => 'Smeštaj i hrana', 'url' => ['/smestaj/index']],
                '<li class="divider"></li>',
                ['label' => 'Transport', 'url' => ['/transport/index']],
                '<li class="divider"></li>',
                ['label' => 'Lokacija', 'url' => ['/lokacija/index']],
                '<li class="divider"></li>',
                ['label' => 'Šta poneti', 'url' => ['/sta-poneti/index']],
                '<li class="divider"></li>',
                ['label' => 'Cene i smene', 'url' => ['/cene/index']],
            ]
        ],
        [
            'label' => 'Zima',
                'items' => [
                    ['label' => 'Zima 2016', 'url' => ['/zima/zima_016']]
                ]
        ],
        [
            'label' => 'Galerija',
            'items' => [
                ['label' => 'Leto', 'url' => ['/gallery/leto']],
                '<li class="divider"></li>',
                ['label' => 'Zima', 'url' => ['/gallery/zima']],
                '<li class="divider"></li>',
                ['label' => 'Van kampa', 'url' => ['/gallery/van_kampa']]
            ]
        ],
        ['label' => 'Utisci kampera', 'url' => ['/utisci/index']],
        ['label' => 'Kontakt', 'url' => ['/site/contact']]
    ];

    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);

    NavBar::end();
    ?>

    <div class="carousel">
        <?php
        echo Carousel::widget([
            'items'=> [
                ['content' => Html::img('@web/images/carousel/heder.jpg')],
                ['content' => Html::img('@web/images/carousel/sports.png')],
                ['content' => Html::img('@web/images/carousel/80.jpg')],
            ]
        ]);
        ?>
    </div>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>
<!--------------------  start "shator" sector  ------------------------>
<div id="shator">
    <div id="fire">
        <a href="<?= Yii::$app->request->baseUrl ?>/site/contact#contact-input">
            <?php echo Html::img('@web/images/fire.png'); ?>
        </a>
        <p>PRIJAVI SE ...</p>
    </div>
    <div id="camp">
        <?php echo Html::img('@web/images/camping.png',['width' => '250']); ?>
    </div>
</div><!------------------ end "shator" sector --------------------->
<footer class="footer">
    <div class="container" >
        <p align="center">avanturakampura.rs &nbsp;&nbsp;&nbsp;&copy; <?= date('Y') ?></p>

<!--        <p class="pull-right">--><?//= Yii::powered() ?><!--</p>-->
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
