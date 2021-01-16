<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\ListView;
use berkekaraa\project\widgets\cardview;
/* @var $this yii\web\View */
/* @var $model berkekaraa\project\models\Urun */
$this->title = $model->isim;
$this->params['breadcrumbs'][] = ['label' => 'Uruns', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="urun-view">

    <h1><?= Html::encode($this->title) ?></h1>
    <p>
        <?= Html::a('Verileri Güncelle', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Verileri Sil', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Urunu depodan silmek istediğinize emin misin ?',
                'method' => 'post',
            ],
        ]) ?>

    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'isim',
            'fiyat',
            'stok_adedi',
            'bulunduğu_depo_id',
        ],
    ]) ?>

</div>
