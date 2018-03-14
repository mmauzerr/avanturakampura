<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\SmestajSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Smeštaj';
?>
<span id="top"></span>
<div class="smestaj-index">
    <div id="content-about" style="height:770px">
        <h1 class="sentence clearfix" style="margin-left: 310px">
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
            margin-top: -50px;
            margin-bottom: 30px;
            box-shadow: 1px 1px 5px gray;
            background-color: green;
            border: 1px solid #4cf10b"/>

        <div id="smestaj">
            <div class="col-md-12">
                <div class="col-lg-6 pull-left" id="smestaj_text1">
                    <p>I smestaj u kampu je poseban. Kamperi spavaju u velikim satorima,
                        5x5m koji izgledaju kao indijanski vigvami. Satori su odlicnog kvaliteta,
                        dovoljno otporni da izdrze i najveci pljusak, provereno, sa mrezicama na
                        prozorima protiv insekata i vodonepropusnim podom. Spavanje je na podlogama
                        (gumenim, od sundjera ili sa vazduhom) u toplim vrecama, kao pidzama zurka.
                        Boravak u njima pruza bezbednost kao spavanje u sobi sa osecajem spavanja pod vedrim nebom.</p>
                </div>
                <div class="col-lg-6 pull-right" id="smestaj_img">
                    <img src="/images/smestaj1.jpg" alt="" width="400"/>
                </div>
            </div>

            <div class="col-lg-12" style="height: 50px"></div>

            <div class="col-md-12">
                <div class="col-lg-6 pull-left" id="smestaj_img2">
                    <img src="/images/hrana1.jpg" alt="DSC_5036" width="400"/>
                </div>
                <div class="col-lg-6 pull-right" id="smestaj_text2">
                    <p>Da bi deca bila zdrava potrebno je da jedu redovno. Tako da kampere ocekuje 5 obroka dnevno,
                        baziranih na principu zdrave bakine kuhinje: jak dorucak, zdrava uzina, rucak sa supicom,
                        slatka uzina i energetska vecera. Plan ishrane je pravljen tako da zadovolji obe strane i kampere
                        i roditelje. Povrce-voce i slatkisi, supice i kolaci, sve je podjednako zastupljeno pazljivo
                        planiranim obrocima, konsultujuci znanje i energetske tablice.</p>
                </div>
            </div>
        </div>
    </div>
    <div id="nazad-button" style="margin-top: -6%;margin-left: 43%">
        <?= Html::a('nazad', ['#top'], ['class' => 'btn btn-success']) ?>
    </div>
</div>
