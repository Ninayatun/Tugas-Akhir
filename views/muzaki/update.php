<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Muzaki */

$this->title = 'Update Muzaki: ' . $model->id_muzaki;
$this->params['breadcrumbs'][] = ['label' => 'Muzakis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_muzaki, 'url' => ['view', 'id' => $model->id_muzaki]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="muzaki-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
