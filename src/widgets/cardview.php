<?php
namespace berkekaraa\project\widgets;

use yii\helpers\Html;
use yii\base\Widget;



class cardview extends Widget
{
    public $model;
    public $attributes;
    public function init(){
        parent::init();
    }
    public function run()
    {

      $html = '<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2" style="border:1px solid #021a40;">
<div class="card-pf card-pf-view card-pf-view-select card-pf-view-multi-select">
  <div class="card-pf-body" style="height: 204px;">
    <div class="card-pf-top-element">
      <span class="fa fa-birthday-cake card-pf-icon-circle"></span>
    </div>
    <h2 class="card-pf-title text-center">
      Cake Service
    </h2>
    <div class="card-pf-items text-center">
      <div class="card-pf-item">
        <span class="pficon pficon-screen"></span>
        <span class="card-pf-item-text">8</span>
      </div>
      <div class="card-pf-item">
        <span class="fa fa-check"></span>
      </div>
    </div>
    <p class="card-pf-info text-center"><strong>Created On</strong> 2015-03-01 02:00 AM <br> Never Expires</p>
  </div>
  <div class="card-pf-view-checkbox">
    <input type="checkbox">
  </div>
</div>
    </div>';
return $html;

        GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                'id',
                'isim',
                'depo_sorumlusu_id',

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]);

    }
}

