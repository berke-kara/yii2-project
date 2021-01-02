<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel berkekaraa\project\models\UrunSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Uruns';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="urun-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Urun', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'isim',
            'fiyat',
            'stok_adedi',
            'bulunduğu_depo_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
