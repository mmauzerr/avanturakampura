<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Aktivnosti */

$this->title = 'Create Aktivnosti';
$this->params['breadcrumbs'][] = ['label' => 'Aktivnostis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aktivnosti-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
