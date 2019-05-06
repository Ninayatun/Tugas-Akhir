<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use kartik\number\NumberControl;
use kartik\select2\Select2;
use app\models\Muzaki;
use app\models\JenisZakat;

/* @var $this yii\web\View */
/* @var $model app\models\Zakat */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="zakat-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tanggal')->widget(DatePicker::className(), [
                'removeButton' => false,
                'value' => date('Y-m-d'),
                'options' => ['placeholder' => 'Tanggal'],
                'pluginOptions' => [
                    'autoclose'=>true,
                    'format' => 'yyyy-mm-dd'
                ]
        ]) ?>

    <?= $form->field($model, 'id_muzaki')->widget(Select2::classname(), [
            'data' =>  Muzaki::getList(),
            'options' => [
              'placeholder' => '- Pilih Nama Muzaki -',
            ],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]); ?>

    <?= $form->field($model, 'id_jenis_zakat')->widget(Select2::classname(), [
            'data' =>  Muzaki::getList(),
            'options' => [
              'placeholder' => '- Pilih Jenis Zakat -',
            ],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]); ?>

    <?= $form->field($model, 'nominal')->widget(NumberControl::classname(), [
        'data' => 'integer-only',
        'maskedInputOptions' => ['digits' => 0],
    ]); ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
