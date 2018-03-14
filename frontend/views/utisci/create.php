<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Utisci */

$this->title = 'Create Utisci';
$this->params['breadcrumbs'][] = ['label' => 'Utiscis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="utisci-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
