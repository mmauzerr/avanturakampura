<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Smestaj */

$this->title = 'Create Smestaj';
$this->params['breadcrumbs'][] = ['label' => 'Smestajs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="smestaj-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
