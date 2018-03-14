<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\DnevniRaspored */

$this->title = 'Create Dnevni Raspored';
$this->params['breadcrumbs'][] = ['label' => 'Dnevni Rasporeds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dnevni-raspored-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
