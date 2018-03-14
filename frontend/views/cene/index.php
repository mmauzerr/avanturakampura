<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\CeneSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cene';
?>
<?php
$this->params['favorite_film'] = "Star Wars";
?>
<div class="cene-index">

    <div id="content-about" style="margin-left:10%;width:80%;height:1150px">
        <span id="top"></span>

        <h1 class="sentence clearfix" style="margin-left:32%">
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
            margin-top: -80px;
            margin-bottom: 70px;
            box-shadow: 1px 1px 5px gray;
            background-color: green;
            border: 3px solid #4cf10b;
        "/>

        <div class="col-lg-12" id="cena" >
            <p>Cena kampa je 210e I njom je obuhvaćeno: 15 sati dnevno edukativno rekreativnih programa u kampu, sva oprema za aktivnosti, 7 punih pansiona sa organizovanom užinom, šatori, prevoz, osiguranje. (nikakav dodatni dzeparac nije potreban) </p>


            <p>Tu su i popusti koje mozete da ostvarite :</p>
            <p>
                <p>&nbsp; - 10e za stare kampere</p>
                <p>&nbsp; - 10e za drugo, treće, četvrto dete iz porodice</p>
                <p>&nbsp; - 10e za svakog novo dovedenog kampera - eto vama motivacije da nas još više i česće preporučite vašim prijateljima, poznanicima i rodbini.</p>
            </p>



            <p>Mesto za svoje dete obezbedjujete uplatom prve rate u iznosu od 50e i potpisivanjem ugovora. Rate su na mesecnom nivou osim ako se ne dogovorimo drugačije a sa nama, kao i do sada svaki dogovor je moguć.</p>

            <address>
                <p>Podaci za uplatu su:</p>
                Tk Mihajlo Pupin,<br />
                Ul. Jedrenska 1,<br />
                PIB:104142991<br />
                Br.ZR.220-49707-60</address>

            <h2 >Termini:</h2>
            <div>
                <p><b>I SMENA</b> : za najmladje kampere tj za decu od 5-9 god :
                    <b>25.06.2017. – 02.07.2017.</b><br /></p>
                <p><b>II SMENA</b> : za decu od 10-14 god :
                    <b>02.07.2017. – 09.07.2017.</b>
            </div>
            <h2>Prijave:</h2>
            <p>Prijaviti se možete sa sajta ili e-mailom na našu adresu:
                <a href="mailto:avanturakampura@gmail.com" style="color:grey">avanturakampura@gmail.com</a>
            </p>
            <br />
            <p>Molimo Vas da u prijavi obavezno navedete sledeće informacije:<br />
                - ime i prezime roditelja;<br />
                - ime i prezime deteta;<br />
                - JMBG deteta;<br />
                - kontakt telefon roditelja i email adresa<br />
                - da li je dete neplivač, poluplivač ili plivač</p>
        </div>
    </div>

    <div id="nazad-button" style="margin-bottom:30px;margin-top: -6%;margin-left: 43%">
        <?= Html::a('nazad', ['#top'], ['class' => 'btn btn-success']) ?>
    </div>

</div>
