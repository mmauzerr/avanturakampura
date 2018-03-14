
<?php

use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel common\models\GallerySearch */


$this->title = 'Leto';
?>
<div class="gallery-index">
    <span id="top"></span>
    <div id="content-about">
        <h1 class="sentence text-center" style="margin: -135px -95px -20px 285px">
            <div class="verticalFlip">
                <?php
                $flip_text ='* LETO *';
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
            <div id="leto_header">
                <h2 style="text-align: center">* <?= Html::a( 'LETO 2013', 'leto', $options = ['terget'=>'_blank', ] ) ?> | LETO 2014 *</h2>
            </div>
            <p class="fb_link" style="margin-left:35px">
                <a href="https://www.facebook.com/avanturakampura/photos_albums" target="_blank">VIŠE SLIKA MOŽETE VIDETI NA NAŠEM FB PROFILU</a>
            </p>
            <hr />
            <div id="zima_sve" class="clearfix">
                <ul style="list-style: none" >
                    <li class="slike_sve">
                        <a class="fancybox" rel="group"
                           href="<?= Url::to('@web/images/leto_2014/large/ura_2014_leto_001.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto_2014/thumb/ura_2014_leto_001.jpg')?>" alt="67"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group"
                           href="<?= Url::to('@web/images/leto_2014/large/ura_2014_leto_002.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto_2014/thumb/ura_2014_leto_002.jpg')?>" alt="66"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group"
                           href="<?= Url::to('@web/images/leto_2014/large/ura_2014_leto_003.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto_2014/thumb/ura_2014_leto_003.jpg')?>" alt="65"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group"
                           href="<?= Url::to('@web/images/leto_2014/large/ura_2014_leto_004.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto_2014/thumb/ura_2014_leto_004.jpg')?>" alt="64"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group"
                           href="<?= Url::to('@web/images/leto_2014/large/ura_2014_leto_006.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto_2014/thumb/ura_2014_leto_006.jpg')?>" alt="63" height="90"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group"
                           href="<?= Url::to('@web/images/leto_2014/large/ura_2014_leto_007.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto_2014/thumb/ura_2014_leto_007.jpg')?>" alt="62"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group"
                           href="<?= Url::to('@web/images/leto_2014/large/ura_2014_leto_008.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto_2014/thumb/ura_2014_leto_008.jpg')?>" alt="61"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group"
                           href="<?= Url::to('@web/images/leto_2014/large/ura_2014_leto_010.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto_2014/thumb/ura_2014_leto_010.jpg')?>" alt="60"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group"
                           href="<?= Url::to('@web/images/leto_2014/large/ura_2014_leto_011.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto_2014/thumb/ura_2014_leto_011.jpg')?>" alt="59"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group"
                           href="<?= Url::to('@web/images/leto_2014/large/ura_2014_leto_012.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto_2014/thumb/ura_2014_leto_012.jpg')?>" alt="58"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group"
                           href="<?= Url::to('@web/images/leto_2014/large/ura_2014_leto_013.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto_2014/thumb/ura_2014_leto_013.jpg')?>" alt="57"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group"
                           href="<?= Url::to('@web/images/leto_2014/large/ura_2014_leto_014.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto_2014/thumb/ura_2014_leto_014.jpg')?>" alt="56"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group"
                           href="<?= Url::to('@web/images/leto_2014/large/ura_2014_leto_015.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto_2014/thumb/ura_2014_leto_015.jpg')?>" alt="55"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group"
                           href="<?= Url::to('@web/images/leto_2014/large/ura_2014_leto_017.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto_2014/thumb/ura_2014_leto_017.jpg')?>" alt="54"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group"
                           href="<?= Url::to('@web/images/leto_2014/large/ura_2014_leto_018.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto_2014/thumb/ura_2014_leto_018.jpg')?>" alt="52"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group"
                           href="<?= Url::to('@web/images/leto_2014/large/ura_2014_leto_019.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto_2014/thumb/ura_2014_leto_019.jpg')?>" alt="51"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group"
                           href="<?= Url::to('@web/images/leto_2014/large/ura_2014_leto_020.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto_2014/thumb/ura_2014_leto_020.jpg')?>" alt="50"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group"
                           href="<?= Url::to('@web/images/leto_2014/large/ura_2014_leto_023.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto_2014/thumb/ura_2014_leto_023.jpg')?>" alt="49"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group"
                           href="<?= Url::to('@web/images/leto_2014/large/ura_2014_leto_024.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto_2014/thumb/ura_2014_leto_024.jpg')?>" alt="48"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group"
                           href="<?= Url::to('@web/images/leto_2014/large/ura_2014_leto_025.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto_2014/thumb/ura_2014_leto_025.jpg')?>" alt="47"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group"
                           href="<?= Url::to('@web/images/leto_2014/large/ura_2014_leto_026.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto_2014/thumb/ura_2014_leto_026.jpg')?>" alt="46"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group"
                           href="<?= Url::to('@web/images/leto_2014/large/ura_2014_leto_027.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto_2014/thumb/ura_2014_leto_027.jpg')?>" alt="45"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group"
                           href="<?= Url::to('@web/images/leto_2014/large/ura_2014_leto_028.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto_2014/thumb/ura_2014_leto_028.jpg')?>" alt="44"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group"
                           href="<?= Url::to('@web/images/leto_2014/large/ura_2014_leto_029.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto_2014/thumb/ura_2014_leto_029.jpg')?>" alt="43"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group"
                           href="<?= Url::to('@web/images/leto_2014/large/ura_2014_leto_032.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto_2014/thumb/ura_2014_leto_032.jpg')?>" alt="42"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group"
                           href="<?= Url::to('@web/images/leto_2014/large/ura_2014_leto_033.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto_2014/thumb/ura_2014_leto_033.jpg')?>" alt="41"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group"
                           href="<?= Url::to('@web/images/leto_2014/large/ura_2014_leto_034.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto_2014/thumb/ura_2014_leto_034.jpg')?>" alt="40"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group"
                           href="<?= Url::to('@web/images/leto_2014/large/ura_2014_leto_036.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto_2014/thumb/ura_2014_leto_036.jpg')?>" alt="38"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group"
                           href="<?= Url::to('@web/images/leto_2014/large/ura_2014_leto_037.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto_2014/thumb/ura_2014_leto_037.jpg')?>" alt="37"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group"
                           href="<?= Url::to('@web/images/leto_2014/large/ura_2014_leto_038.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto_2014/thumb/ura_2014_leto_038.jpg')?>" alt="36"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group"
                           href="<?= Url::to('@web/images/leto_2014/large/ura_2014_leto_039.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto_2014/thumb/ura_2014_leto_039.jpg')?>" alt="35"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group"
                           href="<?= Url::to('@web/images/leto_2014/large/ura_2014_leto_042.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto_2014/thumb/ura_2014_leto_042.jpg')?>"
                                 height="90" alt="34"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group"
                           href="<?= Url::to('@web/images/leto_2014/large/ura_2014_leto_043.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto_2014/thumb/ura_2014_leto_043.jpg')?>" alt="33"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group"
                           href="<?= Url::to('@web/images/leto_2014/large/ura_2014_leto_044.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto_2014/thumb/ura_2014_leto_044.jpg')?>" alt="32"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group"
                           href="<?= Url::to('@web/images/leto_2014/large/ura_2014_leto_045.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto_2014/thumb/ura_2014_leto_045.jpg')?>" alt="31"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group"
                           href="<?= Url::to('@web/images/leto_2014/large/ura_2014_leto_046.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto_2014/thumb/ura_2014_leto_046.jpg')?>" alt="29"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group"
                           href="<?= Url::to('@web/images/leto_2014/large/ura_2014_leto_047.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto_2014/thumb/ura_2014_leto_047.jpg')?>" alt="27"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group"
                           href="<?= Url::to('@web/images/leto_2014/large/ura_2014_leto_048.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto_2014/thumb/ura_2014_leto_048.jpg')?>" alt="26"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group"
                           href="<?= Url::to('@web/images/leto_2014/large/ura_2014_leto_049.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto_2014/thumb/ura_2014_leto_049.jpg')?>" alt="25"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group"
                           href="<?= Url::to('@web/images/leto_2014/large/ura_2014_leto_052.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto_2014/thumb/ura_2014_leto_052.jpg')?>" alt="24"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group"
                           href="<?= Url::to('@web/images/leto_2014/large/ura_2014_leto_053.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto_2014/thumb/ura_2014_leto_053.jpg')?>" alt="23"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group"
                           href="<?= Url::to('@web/images/leto_2014/large/ura_2014_leto_054.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto_2014/thumb/ura_2014_leto_054.jpg')?>" alt="22"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group"
                           href="<?= Url::to('@web/images/leto_2014/large/ura_2014_leto_055.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto_2014/thumb/ura_2014_leto_055.jpg')?>" alt="21"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group"
                           href="<?= Url::to('@web/images/leto_2014/large/ura_2014_leto_057.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto_2014/thumb/ura_2014_leto_057.jpg')?>"
                                height="90" alt="20"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group"
                           href="<?= Url::to('@web/images/leto_2014/large/ura_2014_leto_041.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto_2014/thumb/ura_2014_leto_041.jpg')?>"
                                 height="90" alt="17"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group"
                           href="<?= Url::to('@web/images/leto_2014/large/ura_2014_leto_009.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto_2014/thumb/ura_2014_leto_009.jpg')?>" alt="16"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group"
                           href="<?= Url::to('@web/images/leto_2014/large/ura_2014_leto_016.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto_2014/thumb/ura_2014_leto_016.jpg')?>" alt="14"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group"
                           href="<?= Url::to('@web/images/leto_2014/large/ura_2014_leto_021.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto_2014/thumb/ura_2014_leto_021.jpg')?>" alt="13"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group"
                           href="<?= Url::to('@web/images/leto_2014/large/ura_2014_leto_022.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto_2014/thumb/ura_2014_leto_022.jpg')?>"
                                 height="203" alt="12"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group"
                           href="<?= Url::to('@web/images/leto_2014/large/ura_2014_leto_030.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto_2014/thumb/ura_2014_leto_030.jpg')?>" alt="11"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group"
                           href="<?= Url::to('@web/images/leto_2014/large/ura_2014_leto_050.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto_2014/thumb/ura_2014_leto_050.jpg')?>" alt="9"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group"
                           href="<?= Url::to('@web/images/leto_2014/large/ura_2014_leto_035.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto_2014/thumb/ura_2014_leto_035.jpg')?>"
                                 height="203" alt="7"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group"
                           href="<?= Url::to('@web/images/leto_2014/large/ura_2014_leto_031.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto_2014/thumb/ura_2014_leto_031.jpg')?>" alt="10"/>
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

