<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\LinkPager;
/* @var $this yii\web\View */
/* @var $searchModel berkekaraa\project\models\UrunSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Urun';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="esya-index">
    <?php echo $this->render('_search',['model'=>$searchModel,'data'=>$data]);?>

    <h1><?= Html::encode($this->title) ?></h1>

    <?php foreach($model as $row){ ?>
        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
            <div class="product-image-wrapper-bar" style="margin-bottom: 10px">
                <div class="single-products">
                    <div class="productinfo text-center" style="margin-bottom: 10px; margin-top: 10px;">
                        <h3><?= number_format($row->fiyat,0,",","." )?>TL</h3>
                        <p><?= $row->isim; ?></p>
                        <?= Html::a('Satın al',['add-to-car','id'=>$row->id],['class'=>'btn btn-success'])?>
                        <?= Html::a('Detaylar',['view','id'=>$row->id],['class'=>'btn btn-info'])?>
                    </div>
                </div>
            </div>
        </div>

    <?php }  ?>
    <?= LinkPager::widget([
        'pagination' =>$pagination,   //sayfa geçişi sağladı bize
    ]) ?>

</div>