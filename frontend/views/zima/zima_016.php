<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel common\models\GallerySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Zima 2016';
?>
<span id="top"></span>
<div class="gallery-index col-sm-12">
    <div id="content-about">

        <h1 class="sentence clearfix">
            <div class="verticalFlip">
                <span> ZIMA 2016 </span>
                <span> ZIMA 2016 </span>
                <span> ZIMA 2016 </span>
                <span> ZIMA 2016 </span>
                <span> ZIMA 2016 </span>
            </div>
        </h1>

        <hr style="
            width: 112%;
            margin-left: -8%;
            margin-top: -50px;
            margin-bottom: 40px;
            box-shadow: 1px 1px 5px gray;
            background-color: green;
            border: 1px solid #4cf10b" />

        <p class="fb_link">
            <a href="https://www.facebook.com/avanturakampura/photos_albums" target="_blank">
                VIŠE SLIKA MOŽETE VIDETI NA NAŠEM FB PROFILU
            </a>
        </p>

        <div class="dragi-nasi">
            <div id="dragi-header">
                <p>Dragi naši kamperi,<b> IDEMO NA ZIMOVANJEEEEEE....</b>
                    Ove godine želimo da vas upoznamo sa čarim planine Zlatar.
                    Organizujemo zimski Avantura URA kamp “<b>Zlatar 2016</b>”
                    na kome cemo se opet družiti,igrati, vežbati i probati neke nove sportove.
                </p>
            </div>


<!--            <div class="col-lg-12" style="height: 30px;"> </div>-->
            <div class="col-md-1"></div>
            <div class="col-md-5 pull-left">
                <a class="fancybox" rel="group" href="<?= Yii::$app->request->baseUrl ?>/images/2016_zlatar.jpg">
                    <img src="<?= Yii::$app->request->baseUrl ?>/images/2016_zlatar.jpg"  width="310" alt="poster"/>
                </a>
            </div>

            <div class="col-md-6 pull-right">
                <h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cena Aranžmana :</h2>
                <h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>24.000,00 RSD </b> / mogućnost plaćanja na rate /</h4>
                <h4>Uplatom <b>30%</b> cene aražmana potvrdjujete svoju prijavu...</h4>
                <div style="margin-left:35px;padding: 10px;">
                    <b>Smena</b>: 31.01- 6.02.2016. godine<br />
                    <b>Planina</b>: ZLATAR<br />
                    <b>Smeštaj</b>: Hotel " Panorama "...<br />
                    <b>Polazak</b>: 31.01.2016. iz Beograda u 8.00 (uskoro detaljnije)<br />
                    <b>Povratak</b>: 6.02.2016. sa Zlatara oko 12.00.<br />
                </div>
                <div style="padding: 0 5px 15px 0">
                    <h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cenom obuhvaćeno:</h2>
                    <h4>
                        - Prevoz na relaciji Beograd - Zlatar - Beograd;<br />
                        - 7 dana boravka, šest punih pansiona + užina;<br />
                        - boravišna taksa;<br />
                        - sve aktivnosti na snegu, sankanje, igre u prirodi...<br />
                        - ski oprema, škola skijanja i ski pass;<br />
                        - zatvoreni bazen i sala.<br />
                    </h4>
                </div>
            </div>

            <hr style="
            width: 114%;
            margin-left: -6%;
            margin-top: 500px;
            box-shadow: 1px 1px 5px gray;
            background-color: green;
            border: 1px solid #4cf10b" />

            <div class="text-center">
                <p style="margin-top: 2%;">Od opreme poneti: osmeh, kliska i grudvu...</p>
                <p>Prijave i pitanja šaljite na:<a href="contact.php"><b> avanturakampura@gmail.com</b></a></p>
            </div>
        </div>
    </div>

    <div id="nazad-button">
        <?= Html::a('nazad', ['#top'], ['class' => 'btn btn-success']) ?>
    </div>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="application/javascript">
    $(document).ready(function() {
        $(".fancybox").fancybox();
    });
</script>



