<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\LinkPager;
/* @var $this yii\web\View */
/* @var $searchModel berkekaraa\project\models\DepoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Depo';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="depo-index">

    <h1 ><?= Html::encode($this->title) ?> <?= Html::a('Reyon Ekle', ['create'], ['class' => 'btn btn-success','style' =>'margin-left:20px']) ?>

    </h1>



    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?php foreach($model as $row){ ?>

        <div class="col-xs-12 col-sm-4 col-md-3 col-lg-2" style="border:1px solid #021a40;">
            <div style="margin-bottom: 10px">
                <div>
                    <div class="text-center" style="margin-bottom: 10px; margin-top: 20px;">
                        <p style="font-size:20px">Reyon:<?= $row->isim; ?> </p>
                        <h3><?= number_format($row->id,0,",","." )?> nolu depo</h3>
                        <?= Html::a('Guncelle',['update','id'=>$row->id],['class'=>'btn btn-success','style'=>'margin:10px'])?>
                        <?= Html::a('Detaylar Gor',['view','id'=>$row->id,'isim'=>$row->isim],['class'=>'btn btn-warning'])?>
                    </div>
                </div>
            </div>
        </div>

    <?php }  ?>
    <div style="margin-top: 430px"">
    <?= LinkPager::widget([
        'pagination' =>$pagination,
    ]) ?>
</div>

</div>