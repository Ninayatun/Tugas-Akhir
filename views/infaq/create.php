<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Infaq */

$this->title = 'Create Infaq';
$this->params['breadcrumbs'][] = ['label' => 'Infaqs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="infaq-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
