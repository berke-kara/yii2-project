<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use berkekaraa\project\models\Urun;

/* @var $this yii\web\View */
/* @var $model berkekaraa\project\models\Satis */

$this->title = $model->kullanici_tc;
$this->params['breadcrumbs'][] = ['label' => 'Satis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="satis-view">

    <h1 ><?= "Fatura Geçmişi " ?></h1>
    <h1 >
        <?php print_r("Ödenecek Tutar : ");
        $temp=Urun::findOne($model->urun_id);
        $islem=$temp->fiyat*$model->stok_adedi;
        print_r($islem);
        ?>
    </h1>

    <p>
        <?= Html::a('Siparis İptal', ['delete', 'id' => $model->kullanici_tc], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Siparis iptal edilsin mi?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'kullanici_tc',
            'urun_id',
            'stok_adedi',
            'market_isim',
            'adres:ntext',
        ],
    ]) ?>

</div>
