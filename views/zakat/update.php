<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Zakat */

$this->title = 'Update Zakat: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Zakats', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="zakat-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
