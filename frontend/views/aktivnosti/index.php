<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\AktivnostiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Aktivnosti';

?>
<spam id="top"></spam>
<div class="aktivnosti-index">
    <div id="content-about" style="height: 740px">
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
            margin-top: -50px;
            margin-bottom: 30px;
            box-shadow: 1px 1px 5px gray;
            background-color: green;
            border: 1px solid #4cf10b"/>

        <div id="aktivnosti">
            <p style="text-align: justify">
                Kao svaki čovek koji dođe u prirodu, i kamperi počinju svoj boravak
                pripremom i organizovanjem prostora u kome će provesti sledeću nedelju. A nakon postavljanja
                šatora i pripreme okoline za boravak mi ćemo:
            </p>
        </div>
        <div class="col-md-6 pull-right text-center"  id="aktiv-list">
            <h4>- učiti da plivamo, popravljati tehniku plivanja, plivati...</h4>
            <h4>- veslati, stajati na dasci za jedrenje, skakati u vodu...</h4>
            <h4>- igrati se na vodi, roniti, igrati vaterpolo...</h4>
            <h4>- voziti bicikl, savlađivati biciklističke poligone...</h4>
            <h4>- pohađati školu trčanja (vežbe trčanja, razvijanje trkačke izdržljivosti), trčati...</h4>
            <h4>- savlađivati poligone spretnosti, vežbe oblikovanja, igrati badminton...</h4>
            <h4>- snalaziti se u prirodi..</h4>
            <h4>- igrati društvene igre, edukovati se o prirodi i očuvanju prirode, pohađati
                  kreativne radionice...</h4>
            <h4>- imati logorsku vatru, večernji program, druženje sa drugarima...</h4>
            <h4>- i još mnogo toga lepog...</h4>
        </div>
        <div class="col-md-6 pull-left">
            <div id="aktiv-img">
                <img src="/images/70.jpg" alt="70" width="480"/>
            </div>
        </div>
        <div id="nazad-button" style="margin-top: 51%;margin-left: 43%">
            <?= Html::a('nazad', ['#top'], ['class' => 'btn btn-success']) ?>
        </div>

    </div>

</div>


