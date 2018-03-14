<?php

use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\UtisciSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

?>
<span id="top"></span>
<div class="utisci-index">
    <div class="container_box">
        <div id="content-about">
            <h1 class="sentence clearfix text-center" style="margin: -104px -95px -20px 17px">
                <div class="verticalFlip">
                    <?php
                    $flip_text ='* Ovo su neki od utisaka *';
                    for($x = 0; $x <= 5; $x++){
                        echo '<span>' . $flip_text . '</span>';
                    } ?>
                </div>
            </h1>

            <hr style="
                width: 120%;
                margin-left: -10%;
                margin-top: -55px;
                margin-bottom: 50px;
                box-shadow: 1px 1px 5px gray;
                background-color: green;
                border: 4px solid #fff910">

        </div>
        <div id="img_container">
            <div class="inner-div">
            <ul>
                <li class="slike_sve">
                    <a class="fancybox" rel="group"
                       href="<?= Url::to('@web/images/utisci_kampera/large/utisci kampera1.jpg')?>">
                        <?php echo Html::img('@web/images/utisci_kampera/thumb/utisci kampera1.jpg'); ?>
                        <?= Html::tag('p','Kristina Radovanović')?>
                    </a>
                </li>

                <li class="slike_sve">
                    <a class="fancybox" rel="group"
                       href="<?= Url::to('@web/images/utisci_kampera/large/utisci kampera2.jpg')?>">
                        <?php echo Html::img('@web/images/utisci_kampera/thumb/utisci kampera2.jpg'); ?>
                        <?= Html::tag('p','Mia Paljić')?>
                    </a>
                </li>
                <li class="slike_sve">
                    <a class="fancybox" rel="group"
                       href="<?= Url::to('@web/images/utisci_kampera/large/utisci kampera3.jpg')?>">
                        <?php echo Html::img('@web/images/utisci_kampera/thumb/utisci kampera3.jpg'); ?>
                        <?= Html::tag('p','Ana Ilić')?>
                    </a>
                </li>
                <li class="slike_sve">
                    <a class="fancybox" rel="group"
                       href="<?= Url::to('@web/images/utisci_kampera/large/utisci kampera4.jpg')?>">
                        <?php echo Html::img('@web/images/utisci_kampera/thumb/utisci kampera4.jpg'); ?>
                        <?= Html::tag('p','Ana P.')?>
                    </a>
                </li>
                <li class="slike_sve">
                    <a class="fancybox" rel="group"
                       href="<?= Url::to('@web/images/utisci_kampera/large/utisci kampera5.jpg')?>">
                        <?php echo Html::img('@web/images/utisci_kampera/thumb/utisci kampera5.jpg'); ?>
                        <?= Html::tag('p','Iskra Jurišić')?>
                    </a>
                </li>
                <li class="slike_sve">
                    <a class="fancybox" rel="group"
                       href="<?= Url::to('@web/images/utisci_kampera/large/utisci kampera6.jpg')?>">
                        <?php echo Html::img('@web/images/utisci_kampera/thumb/utisci kampera6.jpg'); ?>
                        <?= Html::tag('p','Tiki Šimšić')?>
                    </a>
                </li>
                <li class="slike_sve">
                    <a class="fancybox" rel="group"
                       href="<?= Url::to('@web/images/utisci_kampera/large/utisci kampera7.jpg')?>">
                        <?php echo Html::img('@web/images/utisci_kampera/thumb/utisci kampera7.jpg'); ?>
                        <?= Html::tag('p','Lara Žigić')?>
                    </a>
                </li>
                <li class="slike_sve">
                    <a class="fancybox" rel="group"
                       href="<?= Url::to('@web/images/utisci_kampera/large/utisci kampera8.jpg')?>">
                        <?php echo Html::img('@web/images/utisci_kampera/thumb/utisci kampera8.jpg'); ?>
                        <?= Html::tag('p','Vukan Obadović')?>
                    </a>
                </li>
                <li class="slike_sve">
                    <a class="fancybox" rel="group"
                       href="<?= Url::to('@web/images/utisci_kampera/large/utisci kampera9.jpg')?>">
                        <?php echo Html::img('@web/images/utisci_kampera/thumb/utisci kampera9.jpg'); ?>
                        <?= Html::tag('p','Marija 8')?>
                    </a>
                </li>
                <li class="slike_sve">
                    <a class="fancybox" rel="group"
                       href="<?= Url::to('@web/images/utisci_kampera/large/utisci kampera10.jpg')?>">
                        <?php echo Html::img('@web/images/utisci_kampera/thumb/utisci kampera10.jpg'); ?>
                        <?= Html::tag('p','Aleksa Bošković')?>
                    </a>
                </li>
                <li class="slike_sve">
                    <a class="fancybox" rel="group"
                       href="<?= Url::to('@web/images/utisci_kampera/large/utisci kampera11.jpg')?>">
                        <?php echo Html::img('@web/images/utisci_kampera/thumb/utisci kampera11.jpg'); ?>
                        <?= Html::tag('p','Elena Žigić')?>
                    </a>
                </li>
                <li class="slike_sve">
                    <a class="fancybox" rel="group"
                       href="<?= Url::to('@web/images/utisci_kampera/large/utisci kampera12.jpg')?>">
                        <?php echo Html::img('@web/images/utisci_kampera/thumb/utisci kampera12.jpg'); ?>
                        <?= Html::tag('p','Aleksej ILić')?>
                    </a>
                </li>
                <li class="slike_sve">
                    <a class="fancybox" rel="group"
                       href="<?= Url::to('@web/images/utisci_kampera/large/utisci kampera13.jpg')?>">
                        <?php echo Html::img('@web/images/utisci_kampera/thumb/utisci kampera13.jpg'); ?>
                        <?= Html::tag('p','Nataša Maletić')?>
                    </a>
                </li>
                <li class="slike_sve">
                    <a class="fancybox" rel="group"
                       href="<?= Url::to('@web/images/utisci_kampera/large/utisci kampera14.jpg')?>">
                        <?php echo Html::img('@web/images/utisci_kampera/thumb/utisci kampera14.jpg'); ?>
                        <?= Html::tag('p','Mina Fogl')?>
                    </a>
                </li>
                <li class="slike_sve">
                    <a class="fancybox" rel="group"
                       href="<?= Url::to('@web/images/utisci_kampera/large/utisci kampera15.jpg')?>">
                        <?php echo Html::img('@web/images/utisci_kampera/thumb/utisci kampera15.jpg'); ?>
                        <?= Html::tag('p','Tea')?>
                    </a>
                </li>
                <li class="slike_sve">
                    <a class="fancybox" rel="group"
                       href="<?= Url::to('@web/images/utisci_kampera/large/utisci kampera16.jpg')?>">
                        <?php echo Html::img('@web/images/utisci_kampera/thumb/utisci kampera16.jpg'); ?>
                        <?= Html::tag('p','Todor Miljević')?>
                    </a>
                </li>
                <li class="slike_sve">
                    <a class="fancybox" rel="group"
                       href="<?= Url::to('@web/images/utisci_kampera/large/utisci kampera17.jpg')?>">
                        <?php echo Html::img('@web/images/utisci_kampera/thumb/utisci kampera17.jpg'); ?>
                        <?= Html::tag('p','Ilijana 12')?>
                    </a>
                </li>
                <li class="slike_sve">
                    <a class="fancybox" rel="group"
                       href="<?= Url::to('@web/images/utisci_kampera/large/utisci kampera18.jpg')?>">
                        <?php echo Html::img('@web/images/utisci_kampera/thumb/utisci kampera18.jpg'); ?>
                        <?= Html::tag('p','Nestor Jukić')?>
                    </a>
                </li>
            </ul>
            </div><!-- end of inner-div-->
        </div><!-- end img_container -->
    </div>
        <div id="nazad-button" style="margin-top: -8%;margin-left: 43%">
            <?= Html::a('nazad', ['#top'], ['class' => 'btn btn-success']) ?>
        </div>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="application/javascript">
    $(document).ready(function() {
        $(".fancybox").fancybox({
            beforeLoad : function() {
                this.title = '<div class="utisci_title">Utisci Kampera</div>';
            }
        });
    });
</script>
