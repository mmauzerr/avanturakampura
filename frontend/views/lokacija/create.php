<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Lokacija */

$this->title = 'Create Lokacija';
$this->params['breadcrumbs'][] = ['label' => 'Lokacijas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lokacija-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
