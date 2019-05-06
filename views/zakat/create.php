<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Zakat */

$this->title = 'Create Zakat';
$this->params['breadcrumbs'][] = ['label' => 'Zakats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="zakat-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
