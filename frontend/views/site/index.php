<?php

/* @var $this yii\web\View */

$this->title = 'Avantura Kamp URA';
?>
<div class="site-index">
    <div class="jumbotron clearfix">
        <div id="st1_text">

            <div class="main_info">
                <h2 class="sentence clearfix">
                    <div class="verticalFlip">
                        <span>* DOBRODOŠLI DRUGARI VELIKI I MALI *</span>
                        <span>* DOBRODOŠLI DRUGARI VELIKI I MALI *</span>
                        <span>* DOBRODOŠLI DRUGARI VELIKI I MALI *</span>
                        <span>* DOBRODOŠLI DRUGARI VELIKI I MALI *</span>
                        <span>* DOBRODOŠLI DRUGARI VELIKI I MALI *</span>
                    </div>
                </h2>
                <p>Uskoči i <b>TI</b> u naš voz,
                    doživi uzbudljivu avanturu skroz!<p>
                <p>Zauzmite<b> BRZO</b> svoje mesto na našoj<b> AVANTURI</b>,</p>
                <p>brojač opasno brzo odbrojava, mnogo mu se žuri!!!</p>
            </div>

            <div class="poster_leto" >
                <div class="clearfix" id="vise_info" >
                    <a href="/cene/index">ZA VIŠE INFORMACIJA ..</a>
                </div>
                <a class="fancybox" rel="group"
                   href="<?= Yii::$app->request->baseUrl ?>/images/leto_2017_poster.jpg">
                    <img src="<?= Yii::$app->request->baseUrl ?>/images/leto_2017_poster.jpg"
                         width="430" height="360" alt="poster"/>
                </a>


            </div>

            <div class="info_text">
                <p>Dragi naši kamperi, i ovog leta </p>
                <p><b  style="color: #4cf10b!important;">IDEMO NA KAMPOVANJE I SPAVANJE U ŠATORIMA...</b></p>
                <p>Kao i prethodnih 5 godina Letnji Avantura URA Kamp 2017 održaće se na Srebrnom jezeru na kome ćemo se družiti, igrati, vežbati i probati neke nove sportove i aktivnosti...</p>
                <!--<p style="color:green;text-shadow:2px 1px 4px black">* * *</p>-->
                <p><b>Smena I : </b> 25.06.2017. - 02.07.2017.</p>
                <p style="margin-top: -15px">- za decu od 5-8 god.</p>
                <p><b>Smena II : </b> 02.07.2017. - 09.07.2017.</p>
                <p style="margin-top: -15px">- za decu od 9-14 god.</p>
            </div>

            <p>Cena kampa je 210e i plaćanje je u više mesečnih rata!</p>
            <p>prijave na: <a href="kontakt.php" style="color: yellow;text-decoration: none">avanturakampura@gmail.com</a></p>

        </div>
    </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="application/javascript">
        $(document).ready(function() {
            $(".fancybox").fancybox();
        });
    </script>
</div>