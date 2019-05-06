<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\JenisZakat */

$this->title = 'Update Jenis Zakat: ' . $model->id_jenis_zakat;
$this->params['breadcrumbs'][] = ['label' => 'Jenis Zakats', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_jenis_zakat, 'url' => ['view', 'id' => $model->id_jenis_zakat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jenis-zakat-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
