<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ShadaqahSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Shadaqahs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shadaqah-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Shadaqah', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'tanggal',
            'nama_pemberi',
            'alamat_pemberi',
            'jumlah_shadaqah',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
