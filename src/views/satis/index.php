<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel berkekaraa\project\models\SatisSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Satis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="satis-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Satis', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kullanici_tc',
            'urun_id',
            'stok_adedi',
            'market_isim',
            'adres:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
