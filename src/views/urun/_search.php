<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model berkekaraa\project\models\UrunSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="urun-search">


    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>
    <?= $form->field($model,'id')->dropDownList(

        ArrayHelper::map($data,'id','isim')

    ) ?>

    <div class="form-group">
        <?= Html::submitButton('Filtrele', ['class' => 'btn btn-success']) ?>
        <?= Html::a('Tum urunleri gor',['index'],['class'=>'btn btn-info'])?>
    </div>

    <?php ActiveForm::end(); ?>

</div>