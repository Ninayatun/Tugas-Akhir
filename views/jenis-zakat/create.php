<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\JenisZakat */

$this->title = 'Create Jenis Zakat';
$this->params['breadcrumbs'][] = ['label' => 'Jenis Zakats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jenis-zakat-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
