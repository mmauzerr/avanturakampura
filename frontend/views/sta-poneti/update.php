<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\StaPoneti */

$this->title = 'Update Sta Poneti: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Sta Ponetis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sta-poneti-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
