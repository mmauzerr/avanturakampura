<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Cene */

$this->title = 'Create Cene';
$this->params['breadcrumbs'][] = ['label' => 'Cenes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cene-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
