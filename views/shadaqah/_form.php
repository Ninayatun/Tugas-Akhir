<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Shadaqah */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="shadaqah-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'nama_pemberi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat_pemberi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jumlah_shadaqah')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
