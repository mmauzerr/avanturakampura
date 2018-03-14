<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\TransportSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Transports';
?>

<div class="transport-index">
    <div id="content-about" style="height: 840px">
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

        <div id="transport" class="text-center">
            <p>Od Beograda do Požarevca se putuje vozom, gde nas
                čeka minibus kojim idemo do odredišta..</p>

            <div id="transport_img1">
                <img src="/images/voz.jpg" alt="" width="380" />
            </div>

            <p>POLAZAK: Obavestenje uskoro...</p>

            <div id="transport_img2">
                <img src="/images/75.jpg" alt="" width="380"/>
            </div>

            <div id="nazad-button" style="margin-bottom:-40px;margin-top: 3%;margin-left: 39%">
                <?= Html::a('nazad', ['#top'], ['class' => 'btn btn-success']) ?>
            </div>
        </div>

    </div>
</div>

