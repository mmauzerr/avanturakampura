<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;

$this->title = 'Kontakt';
//$this->params['breadcrumbs'][] = $this->title;
?>
<?php
if (!empty($_POST))  {
    $error = '';
    if (empty($_POST['ime']) || empty($_POST['email']) || empty($_POST['message'])) {
        $error = 'Popunite navedena polja:';
    }
    else {
        $to = 'avanturakampura@gmail.com';
        $subject = 'Avantura Kamp URA';
        $ime= $_POST['ime'];
        $email = $_POST['email'];
        $message =$_POST['message'];
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8; \r\n";
        $headers .= "Content-Transfer-Encoding: quoted-printable; \r\n";
        $headers .= "Return-Path: Avantura Kamp URA <from-website@avanturakampura.rs> \n";
        $headers .= "From:  Avantura Kamp URA <from-website@avanturakampura.rs> \n";
        $message = "Od: {$ime}<br />
          <p>{$message}</p>
          Moj email: {$email}";

        if (mail($to,$subject, $message,$headers))
        {
            $info = 'Hvala što ste nas kontaktirali';
        }
        else
        {
            $error = 'Doslo je do greske.';
        }
    }
}
?>

<hr style="
                width: 90%;
                margin-left: 5%;
                margin-top: 60px;
                margin-bottom: -40px;
                box-shadow: 1px 1px 15px black;
                background-color: green;
                border: 1px solid #4cf10b;
                z-index: 9!important;
"/>

<div class="site-contact col-lg-12">
    <div id="contact-text">
        <h1 class="sentence clearfix">
            <div class="verticalFlip">
                <span> <?= Html::encode($this->title) ?> </span>
                <span> <?= Html::encode($this->title) ?> </span>
                <span> <?= Html::encode($this->title) ?> </span>
                <span> <?= Html::encode($this->title) ?> </span>
                <span> <?= Html::encode($this->title) ?> </span>
            </div>
        </h1>
        <h2>Javite se!!!</h2>
        <div id="contakt-p">
            <p><strong>email: avanturakampura@gmail.com</strong></p>
            <p>web: www.avanturakampura.rs</p>
            <p>facebook: Avantura kamp URA</p>
            <p>twitter: AvanturaKampURA</p>
            <p>Tel:<strong> +381-64-1-404-404</strong></p>
        </div>
    </div>

    <div id="contact-input">
        <form method="post" action="contact">
            <h2 <?php echo !empty($error) ? 'style="color:red;"' : '';?>>
                <?php
                    if (!empty($error)) {
                        echo $error;
                    } else if (!empty($info)) {
                        echo $info;
                    } else {
                        echo 'Pošaljite nam poruku:';
                    };
                ?>
            </h2>
            <input type="text" name="ime" placeholder="Vaše puno ime i prezime" autofocus="autofocus"/>
            <input type="email" name="email" placeholder="Vaša email adresa"/>
            <textarea name="message" rows="2" placeholder="Vaša poruka"></textarea>
            <input id="reset" type="reset" name="reset" value="obriši" />
            <input id="button" type="submit" name="submit" value="POŠALJI" style="width:36%"/>
        </form>
    </div>
</div>
<!--/****** hard correction for 'shator' display ******** */-->
<style media="screen" type="text/css">
#camp, #fire p {
    display: none!important;
}

#fire img {
    margin: 8px 0 0 -378px;
    pointer-events: none;
    cursor: default;
}
.footer p {
    padding-left: 60px;
}
</style>

