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
                <h2 style="text-align: center">* LETO 2013 | <?= Html::a( 'LETO 2014', 'leto_2014', $options = ['terget'=>'_blank', ] ) ?> *</h2>
            </div>
            <p class="fb_link" style="margin-left:35px">
                <a href="https://www.facebook.com/avanturakampura/photos_albums" target="_blank">VIŠE SLIKA MOŽETE VIDETI NA NAŠEM FB PROFILU</a>
            </p>
            <hr />
            <div id="zima_sve" class="clearfix">
                <ul style="list-style: none" >
                    <li class="slike_sve">
                        <a class="fancybox" rel="group" href="<?= Url::to('@web/images/leto/large/67.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto/thumb/67.jpg')?>" alt="67"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group" href="<?= Url::to('@web/images/leto/large/66.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto/thumb/66.jpg')?>" alt="66"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group" href="<?= Url::to('@web/images/leto/large/65.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto/thumb/65.jpg')?>" alt="65"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group" href="<?= Url::to('@web/images/leto/large/64.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto/thumb/64.jpg')?>" alt="64"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group" href="<?= Url::to('@web/images/leto/large/63.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto/thumb/63.jpg')?>" alt="63"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group" href="<?= Url::to('@web/images/leto/large/62.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto/thumb/62.jpg')?>" alt="62"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group" href="<?= Url::to('@web/images/leto/large/61.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto/thumb/61.jpg')?>" alt="61"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group" href="<?= Url::to('@web/images/leto/large/60.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto/thumb/60.jpg')?>" alt="60"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group" href="<?= Url::to('@web/images/leto/large/59.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto/thumb/59.jpg')?>" alt="59"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group" href="<?= Url::to('@web/images/leto/large/58.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto/thumb/58.jpg')?>" alt="58"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group" href="<?= Url::to('@web/images/leto/large/57.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto/thumb/57.jpg')?>" alt="57"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group" href="<?= Url::to('@web/images/leto/large/56.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto/thumb/56.jpg')?>" alt="56"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group" href="<?= Url::to('@web/images/leto/large/55.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto/thumb/55.jpg')?>" alt="55"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group" href="<?= Url::to('@web/images/leto/large/54.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto/thumb/54.jpg')?>" alt="54"/>
                        </a>
                    </li>
<!--                        <li class="slike_sve">-->
<!--                            <a class="fancybox" rel="group" href="--><?//= Url::to('@web/images/leto/large/53.jpg')?><!--">-->
<!--                                <img src="--><?//= Url::to('@web/images/leto/thumb/53.jpg')?><!--" alt="53"/>-->
<!--                            </a>-->
<!--                        </li>-->
                    <li class="slike_sve">
                        <a class="fancybox" rel="group" href="<?= Url::to('@web/images/leto/large/52.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto/thumb/52.jpg')?>" alt="52"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group" href="<?= Url::to('@web/images/leto/large/51.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto/thumb/51.jpg')?>" alt="51"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group" href="<?= Url::to('@web/images/leto/large/50.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto/thumb/50.jpg')?>" alt="50"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group" href="<?= Url::to('@web/images/leto/large/49.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto/thumb/49.jpg')?>" alt="49"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group" href="<?= Url::to('@web/images/leto/large/48.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto/thumb/48.jpg')?>" alt="48"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group" href="<?= Url::to('@web/images/leto/large/47.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto/thumb/47.jpg')?>" alt="47"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group" href="<?= Url::to('@web/images/leto/large/46.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto/thumb/46.jpg')?>" alt="46"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group" href="<?= Url::to('@web/images/leto/large/45.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto/thumb/45.jpg')?>" alt="45"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group" href="<?= Url::to('@web/images/leto/large/44.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto/thumb/44.jpg')?>" alt="44"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group" href="<?= Url::to('@web/images/leto/large/43.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto/thumb/43.jpg')?>" alt="43"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group" href="<?= Url::to('@web/images/leto/large/42.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto/thumb/42.jpg')?>" alt="42"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group" href="<?= Url::to('@web/images/leto/large/41.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto/thumb/41.jpg')?>" alt="41"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group" href="<?= Url::to('@web/images/leto/large/40.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto/thumb/40.jpg')?>" alt="40"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group" href="<?= Url::to('@web/images/leto/large/38.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto/thumb/38.jpg')?>" alt="38"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group" href="<?= Url::to('@web/images/leto/large/37.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto/thumb/37.jpg')?>" alt="37"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group" href="<?= Url::to('@web/images/leto/large/36.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto/thumb/36.jpg')?>" alt="36"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group" href="<?= Url::to('@web/images/leto/large/35.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto/thumb/35.jpg')?>" alt="35"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group" href="<?= Url::to('@web/images/leto/large/34.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto/thumb/34.jpg')?>" alt="34"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group" href="<?= Url::to('@web/images/leto/large/33.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto/thumb/33.jpg')?>" alt="33"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group" href="<?= Url::to('@web/images/leto/large/32.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto/thumb/32.jpg')?>" alt="32"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group" href="<?= Url::to('@web/images/leto/large/31.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto/thumb/31.jpg')?>" alt="31"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group" href="<?= Url::to('@web/images/leto/large/29.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto/thumb/29.jpg')?>" alt="29"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group" href="<?= Url::to('@web/images/leto/large/27.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto/thumb/27.jpg')?>" alt="27"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group" href="<?= Url::to('@web/images/leto/large/26.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto/thumb/26.jpg')?>" alt="26"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group" href="<?= Url::to('@web/images/leto/large/25.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto/thumb/25.jpg')?>" alt="25"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group" href="<?= Url::to('@web/images/leto/large/24.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto/thumb/24.jpg')?>" alt="24"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group" href="<?= Url::to('@web/images/leto/large/23.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto/thumb/23.jpg')?>" alt="23"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group" href="<?= Url::to('@web/images/leto/large/22.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto/thumb/22.jpg')?>" alt="22"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group" href="<?= Url::to('@web/images/leto/large/21.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto/thumb/21.jpg')?>" alt="21"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group" href="<?= Url::to('@web/images/leto/large/20.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto/thumb/20.jpg')?>" alt="20"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group" href="<?= Url::to('@web/images/leto/large/19.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto/thumb/19.jpg')?>" alt="19"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group" href="<?= Url::to('@web/images/leto/large/17.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto/thumb/17.jpg')?>" alt="17"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group" href="<?= Url::to('@web/images/leto/large/16.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto/thumb/16.jpg')?>" alt="16"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group" href="<?= Url::to('@web/images/leto/large/14.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto/thumb/14.jpg')?>" alt="14"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group" href="<?= Url::to('@web/images/leto/large/13.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto/thumb/13.jpg')?>" alt="13"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group" href="<?= Url::to('@web/images/leto/large/12.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto/thumb/12.jpg')?>" alt="12"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group" href="<?= Url::to('@web/images/leto/large/11.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto/thumb/11.jpg')?>" alt="11"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group" href="<?= Url::to('@web/images/leto/large/10.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto/thumb/10.jpg')?>" alt="10"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group" href="<?= Url::to('@web/images/leto/large/9.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto/thumb/9.jpg')?>" alt="9"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group" href="<?= Url::to('@web/images/leto/large/7.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto/thumb/7.jpg')?>" alt="7"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group" href="<?= Url::to('@web/images/leto/large/6.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto/thumb/6.jpg')?>" alt="6"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group" href="<?= Url::to('@web/images/leto/large/4.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto/thumb/4.jpg')?>" alt="4"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group" href="<?= Url::to('@web/images/leto/large/3.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto/thumb/3.jpg')?>" alt="3"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group" href="<?= Url::to('@web/images/leto/large/2.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto/thumb/2.jpg')?>" alt="2"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group" href="<?= Url::to('@web/images/leto/large/1.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto/thumb/1.jpg')?>" alt="1"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group" href="<?= Url::to('@web/images/leto/large/15.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto/thumb/15.jpg')?>" height="90" alt="15"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group" href="<?= Url::to('@web/images/leto/large/28.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto/thumb/28.jpg')?>" alt="28"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group" href="<?= Url::to('@web/images/leto/large/18.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto/thumb/18.jpg')?>" alt="18"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group" href="<?= Url::to('@web/images/leto/large/39.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto/thumb/39.jpg')?>" alt="39"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group" href="<?= Url::to('@web/images/leto/large/30.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto/thumb/30.jpg')?>" alt="30"/>
                        </a>
                    </li>
                    <li class="slike_sve">
                        <a class="fancybox" rel="group" href="<?= Url::to('@web/images/leto/large/8.jpg')?>">
                            <img src="<?= Url::to('@web/images/leto/thumb/8.jpg')?>" alt="8"/>
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
