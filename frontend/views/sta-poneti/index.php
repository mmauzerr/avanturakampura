<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $searchModel common\models\search\StaPonetiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sta Poneti';

?>
<div class="sta-poneti-index">
    <div id="content-about" style="height: 1350px">

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
            background-color: green;
            border: 3px solid #4cf10b;
        "/>

        <h2 style="margin-left:26%;padding: 70px 0 50px 0">Saveti za kampere i roditelje:</h2>

        <div id="sta-poneti">
            <h3>&nbsp;Šta obavezno poneti:</h3>
            <p>-dovoljan broj donjeg veša za 8 dana; 2 para kupaćih kostima; 8 majica; 2 šorca; 2 donja dela trenerke (ili pantalone i trenerka); gornji deo trenerke ili duks, polar, džemper, topla pidžama (ne spavaćica), kišna ili prolećna jakna; 2 para patika (cipele ili gumene čizme i patike); veliki peškir za plažu; 2 mala peškira; gumene/plastične papuče.</p>
            <br />
            <h3>&nbsp;Preporučujemo da imate:</h3>
            <p>-svoju vreću i podlogu za spavanje; autan i kremu za sunčanje sa jačim faktorom, baterijska lampa...</p>
            <br />
            <h3>&nbsp;Možete poneti:</h3>
            <p>-muzički instrument lako prenosiv vozom; maska za ronjenje; naočare za plivanje; peraja; pecaroški pribor; pomagala za plivanje; zmaja...</p>
            <br />
            <h3>&nbsp;Nemojte da nosite:</h3>
            <p>-lopte nikako; hranu, slatkiše, bakine (mamine) kolače, voće, u većoj količini (osim za put), jer hrana nije dozvoljena za čuvanje u šatorima; elektronske uređaje: game-boy, ipad, ipod, kamera, fotoaparat, mobilni telefon i sl. Može telefon ako baš mora, sa korišćenjem isključivo posle večere, nema prostora gde da se pune, a dete možete čuti zvanjem na naše brojeve telefona i to samo u kontakt vreme.</p>
            <br />
            <h3>&nbsp;Lekovi i medicinski preparati:</h3>
            <p>-mole se roditelji da lekove spakuju u odvojenu kesu u dečiju torbu, sa pisanim uputstvom kada i kako se doziraju (po potrebi). Po dolasku u kamp lekovi stoje pod nadzorom instruktora.</p>
            <br />
            <h3>&nbsp;Kako se spakovati:</h3>
            <p>-preporučujemo da zajedno sa kamperom spakujete njegove stvari u jedan srednji kofer ili torbu. Pored toga potrebno je da kamper ima i manji ranac za vodu i sendvič.</p>
        </div>
    </div>
    <div id="nazad-button" style="margin-bottom:30px;margin-top: -6%;margin-left: 43%">
        <?= Html::a('nazad', ['#top'], ['class' => 'btn btn-success']) ?>
    </div>
</div>
