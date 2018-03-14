<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Cene */

$this->title = 'Update Cene: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Cenes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cene-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
