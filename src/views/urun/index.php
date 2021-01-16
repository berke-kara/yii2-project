<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\LinkPager;
use berkekaraa\project\models\Urun;
/* @var $this yii\web\View */
/* @var $searchModel berkekaraa\project\models\UrunSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Urun';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="urun-index">


    <h1><?= Html::encode($this->title) ?></h1>
    <p><?= Html::a('Urun Ekle', ['create'], ['class' => 'btn btn-success']) ?></p>
    <div style="width:250px"><?php echo $this->render('_search',['model'=>$searchModel,'data'=> $data]);?></div>
    <div style="margin-left: 550px;margin-top:-120px"><?php echo $this->render('arama',['model'=>$searchModel,'data'=> $data]);?></div>
    <?php foreach($model as $row){ ?>
        <div class="col-xs-12 col-sm-4 col-md-3 col-lg-2" style="border:1px solid #021a40;">
            <div class="product-image-wrapper-bar" style="margin-bottom: 10px">
                <div class="single-products">
                    <div class="productinfo text-center" style="margin-bottom: 10px; margin-top: 20px;">
                        <p style="font-size:30px"><?= $row->isim; ?> </p>
                        <h3><?= number_format($row->fiyat,0,",","." )?>TL</h3>

                        <?= Html::a('Siparis Oluştur',['/project/satis/create','stok'=>$row->id],['class'=>'btn btn-success','style'=>'margin:10px'])?>
                        <?= Html::a('Detaylar Gor',['view','id'=>$row->id,'isim'=>$row->isim],['class'=>'btn btn-warning','style'=>'margin:10px'])?>
                        <?= Html::a('Stok Guncelle',['/project/urun/stok','id'=>$row->id],['class'=>'btn btn-warning'])?>
                    </div>
                </div>
            </div>
        </div>

    <?php }  ?>
    <div style="margin-top: 400px"">
    <?= LinkPager::widget([
        'pagination' =>$pagination,
    ]) ?>
</div>

</div>