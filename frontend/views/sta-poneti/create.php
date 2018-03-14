<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\StaPoneti */

$this->title = 'Create Sta Poneti';
$this->params['breadcrumbs'][] = ['label' => 'Sta Ponetis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sta-poneti-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
