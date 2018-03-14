<?php

use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel common\models\GallerySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Van Kampa';
?>
<div class="gallery-index">
    <span id="top"></span>
    <div id="content-about">
        <h1 class="sentence text-center" style="margin: -135px -95px -20px 285px">
            <div class="verticalFlip">
                <?php
                $flip_text ='* VAN KAMPA *';
                for($x = 0; $x <= 5; $x++){
                    echo '<span>' . $flip_text . '</span>';
                } ?>
            </div>
        </h1>

        <hr style="
            width: 120%;
            margin-left: -10%;
            margin-top: -20px;
            margin-bottom: 50px;
            box-shadow: 1px 1px 5px gray;
            background-color: green;
            border: 4px solid #fff910">

        <div id="leto_img" align="center">
            <p class="fb_link" style="margin-left:35px">
                <a href="https://www.facebook.com/avanturakampura/photos_albums" target="_blank">VIŠE SLIKA MOŽETE VIDETI NA NAŠEM FB PROFILU</a>
            </p>
            <hr />
            <div id="zima_sve" class="clearfix">
                <ul style="list-style: none" >
                    <li class="slike_sve">
                        <a class="fancybox" rel="group" href="<?= Url::to('@web/images/vankampa/large/70.jpg')?>">
                            <img src="<?= Url::to('@web/images/vankampa/thumb/70.jpg')?>" alt="70"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group" href="<?= Url::to('@web/images/vankampa/large/71.jpg')?>">
                            <img src="<?= Url::to('@web/images/vankampa/thumb/71.jpg')?>" alt="71"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group" href="<?= Url::to('@web/images/vankampa/large/72.jpg')?>">
                            <img src="<?= Url::to('@web/images/vankampa/thumb/72.jpg')?>" alt="72"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group" href="<?= Url::to('@web/images/vankampa/large/73.jpg')?>">
                            <img src="<?= Url::to('@web/images/vankampa/thumb/73.jpg')?>" alt="73"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group" href="<?= Url::to('@web/images/vankampa/large/74.jpg')?>">
                            <img src="<?= Url::to('@web/images/vankampa/thumb/74.jpg')?>" alt="74"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group" href="<?= Url::to('@web/images/vankampa/large/75.jpg')?>">
                            <img src="<?= Url::to('@web/images/vankampa/thumb/75.jpg')?>" alt="75"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group" href="<?= Url::to('@web/images/vankampa/large/76.jpg')?>">
                            <img src="<?= Url::to('@web/images/vankampa/thumb/76.jpg')?>" alt="76"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group" href="<?= Url::to('@web/images/vankampa/large/77.jpg')?>">
                            <img src="<?= Url::to('@web/images/vankampa/thumb/77.jpg')?>" alt="77"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group" href="<?= Url::to('@web/images/vankampa/large/78.jpg')?>">
                            <img src="<?= Url::to('@web/images/vankampa/thumb/78.jpg')?>" alt="78"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group" href="<?= Url::to('@web/images/vankampa/large/79.jpg')?>">
                            <img src="<?= Url::to('@web/images/vankampa/thumb/79.jpg')?>"
                                 height="90" alt="79"/>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </div>


    <div id="nazad-button">
        <?= Html::a('nazad', ['leto#top'], ['class' => 'btn btn-success']) ?>
    </div>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $(".fancybox").fancybox();
    });
</script>
