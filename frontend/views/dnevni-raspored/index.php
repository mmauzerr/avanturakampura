<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\DnevniRasporedSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Dnevni Raspored';
?>
<span id="top"></span>
<div class="dnevni-raspored-index">
    <div id="content-about" style="height:auto">
        <h1 class="sentence clearfix" style="margin-left: 200px">
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

    <div id="raspored">
        <p >07:30 buđenje<br>
            07:45 jutarnja gimnastika<br>
            08:15 umivanje<br>
            08:30 doručak<br>
            09:00 spremanje šatora i priprema za čas<br>
            09:30 aktivnosti<br>
            10:30 odmor<br>
            10:45 aktivnosti<br>
            11:45 užina<br>
            12:00 aktivnosti<br>
            13:15 presvlačenje i priprema za ručak<br>
            13:45 ručak<br>
            14:15 odmor<br>
            15:00 aktivnosti<br>
            16:30 pakovanje opreme<br>
            17:00 užina<br>
            17:15 aktivnosti<br>
            18:45 presvlačenje i priprema za večeru<br>
            19:30 večera<br>
            20:00 aktivnosti<br>
            21:30 priča za laku noć<br>
            22:00 povečerje i spavanje</p>
    </div>
</div>
    <div id="nazad-button" style="margin-top: -5%;margin-left: 44%">
        <?= Html::a('nazad', ['#top'], ['class' => 'btn btn-success']) ?>
    </div>
</div>
