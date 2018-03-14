<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'O Nama';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about col-lg-12 ">

    <div id="content-about">
        <h1 class="sentence clearfix">
            <div class="verticalFlip">
                <span> Ko smo mi ? </span>
                <span> Ko smo mi ? </span>
                <span> Ko smo mi ? </span>
                <span> Ko smo mi ? </span>
                <span> Ko smo mi ? </span>
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

        <p id="uvod">
            Zaljubljenici u prirodu, sport i kretanje, željni da prenesemo svoju
            pasiju drugima, gledamo kako generacije rastu bez prilike da to dožive.
            Zbog toga smo i osnovali <strong>Triatlon klub "Mihajlo Pupin"</strong>
            gde smo ljubav prema sportu širili prema deci i mladima. Shvatili smo
            da u klub dolaze deca koja žele da se takmiče dok ostala i dalje sede
            kod kuće. Zbog toga smo pokrenuli projekat deca u prirodi, koji je
            prerastao u<strong> Avantura kamp URA - UVEK RADOSNO AKTIVNI.</strong>
            Osnovna ideja kampa je da našoj i vašoj deci omogućimo da dožive iskustvo
            dužeg boravka u prirodi sa vršnjacima.
        </p>

        <hr style="
            width: 118%;
            margin-left: -11%;
            margin-top: 40px;
            margin-bottom: 40px;
            box-shadow: 1px 1px 5px gray;
            background-color: green;
            border: 1px solid #4cf10b">

        <div class="slike">
            <?= Html::img('@web/images/ana-001_manja.jpg'); ?>
            <div class="text">
                <h2>Ana Bojić</h2>
                <p>Profesor fizičkog vaspitanja; instruktor: rekreacije,
                   skijanja, odbojke; trener: plivanja, triatlona, atletike</p>
            </div>
        </div>

        <div class="slike">
            <?= Html::img('@web/images/tamara_mala.jpg'); ?>
            <div class="text">
                <h2>Tamara Ivanov-Ilić</h2>
                <p>Profesor fizičkog vaspitanja; instruktor: rekreacije, skijanja,
                   sportskog jahanja; trener: plivanja, triatlona, odbojke</p>
            </div>
        </div>

        <div class="slike">
            <?= Html::img('@web/images/ivan_mala.jpg'); ?>
            <div class="text">
                <h2>Ivan Buđa</h2>
                <p>Profesor fizičkog vaspitanja, instruktor: veslanja, skijanja,
                   klizanja, spasilac; trener: plivanja, triatlona, badmintona</p>
            </div>
        </div>

        <div class="slike">
            <?= Html::img('@web/images/pedja_mala.jpg'); ?>
            <div class="text">
                <h2>Predrag Pažin</h2>
                <p>Viši sportski trener ronjenja; instruktor: veslanja, jedrenja,
                   spasilac; trener: plivanja, triatlona, sportova na vodi</p>
            </div>
        </div>

        <div class="slike">
            <?= Html::img('@web/images/zeljko.jpg'); ?>
            <div class="text">
                <h2>Željko Ilić</h2>
                <p>To je naš kuvar. On je uvek spreman da nam spremi nešto pride za
                    uvek gladne kampere</p>
            </div>
        </div>

        <div class="slike">
            <?= Html::img('@web/images/kristina.jpg'); ?>
            <div class="text">
                <h2>Kristina Radovanović</h2>
                <p>Mladji demonstrator, učenica srednje škole, odličan djak,
                   trenira plivanje, uvek pozitivna i spremna da pomogne mladjim kamperima</p>
            </div>
        </div>

        <div class="slike">
            <?= Html::img('@web/images/matija.jpg'); ?>
            <div class="text">
                <h2>Matija Grbović</h2>
                <p>Mladji demonstrator, učenik srednje škole, odličan djak,
                   trenira plivanje, uvek nasmejan i spreman da pomogne mladjim kamperima</p>
            </div>
        </div>

    </div>
</div>
