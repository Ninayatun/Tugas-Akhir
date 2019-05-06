<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Mustahik */

$this->title = 'Update Mustahik: ' . $model->id_mustahik;
$this->params['breadcrumbs'][] = ['label' => 'Mustahiks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_mustahik, 'url' => ['view', 'id' => $model->id_mustahik]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mustahik-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
