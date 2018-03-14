<?php

use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\LokacijaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Lokacija';

?>
<div class="lokacija-index">
    <span id="top"></span>
    <div class="transport-index">
        <div id="content-about" style="height: 1000px">
            <span id="top"></span>
            <h1 class="sentence clearfix">
                <div class="verticalFlip">
                    <span> <?= Html::encode($this->title) ?> </span>
                    <span> <?= Html::encode($this->title) ?> </span>
                    <span> <?= Html::encode($this->title) ?> </span>
                    <span> <?= Html::encode($this->title) ?> </span>
                    <span> <?= Html::encode($this->title) ?> </span>
                </div>
            </h1>

            <hr style="
            width: 112%;
            margin-left: -8%;
            margin-top: -110px;
            margin-bottom: 30px;
            box-shadow: 1px 1px 5px gray;
            background-color: #9f9b0a;
            border: 2px solid #f1f109;
        "/>
        <div id="lokacija">
            <div id="lokacija-text">
                <br />
                <h2 style="margin-left:22%">Kisiljevo, Srebrno Jezero, Srbija</h2><br />
                <p>Srebrno jezero jedno je od najpoznatijih izletišta u Srbiji. Jezero je zapravo rečni rukavac Dunava, koji je 1971. godine pregrađen nasipom u gornjem toku, tako se priobalje ramskog rita zaštitilo od podzemnih voda. Jezero se nalazi u opštini Veliko Gradište (2,5km je udaljeno od grada) i ima izuzetno dobar turistički položaj, jer je na raskršću bitnih putnih pravaca i u blizini je privredno razvijenih gradova (udaljenost do Beograda 120km, do Požarevca 34km, do Smedereva 60km).
                    <br /><br />
                    Ono ima površinu od 4,5 kilometra kvadratnih, dugo je 14km, duboko 7-14m (najdublja tačka je takozvana Glava vrbnika dubine 16,5 metara), i široko od 380-450m. Po vrsti jezera pripada grupi veštačkih akumalacionih jezera.U popodnevnim satima,kada sunce počinje da zalazi iza Karpata, mnoštvo sunčevih zraka čini da jezero ima srebrni odsjaj. Po tome je i dobilo ime Srebrno.
                    <br /><br />
                    Zahvaljujući snažnim pumpama, u jezeru je nivo vode stalno niži od nivoa Dunava, tako da je stalno obezbeđen dotok sveže vode. Na svom podzemnom putu voda se filtrira kroz brojne peščane dine što omogućava da voda bude besprekorno čista i bistra. Srebrno jezero, bogato je ribom i predstavlja pravi raj za pecaroše. Ribolovcima je poznato po ulovljenom šaranu težine 44 kg. U jezeru su zastupljene sve vrste slatkovodne ribe: som, smuđ, šaran, amur, tolstolobik...
                </p>
            </div>
            <br />
            <div class="col-lg-6 pull-left" id="lokacija2">
                <p>
                    Srebrno jezero je izuzetne lepote i od početka je postalo
                    omiljeno izletište i okosnica turizma u ovom kraju. Lokacija
                    kampa Avantura Kamp URA nalazi sena suprotnom kraju Srebrnog
                    jezera u odnosu na hotele i gradsku plažu.Kamp je okružen
                    nedirnutom prirodom i cvrkutom ptica. Do kampa se dolazi
                    skretanjem sa glavnog puta 10ak kmpre Velikog Gradišta.
                </p>
            </div>
            <div class="col-lg-6 pull-left" id="lokacija_img">
                <a class="fancybox" rel="group"
                   href="<?= Url::to('@web/images/mapa.jpg')?>">
                <img src="/images/mapa.jpg" alt="mapa" width="470" height="300"/>
                </a>
            </div>

            </div>
        </div>
    </div>

</div>
<div id="nazad-button" style="margin-bottom:30px;margin-top: -6%;margin-left: 43%">
    <?= Html::a('nazad', ['#top'], ['class' => 'btn btn-success']) ?>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="application/javascript">
    $(document).ready(function() {
        $(".fancybox").fancybox();
    });
</script>
