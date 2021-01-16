<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use berkekaraa\project\models\Urun;
/* @var $this yii\web\View */
/* @var $model berkekaraa\project\models\Satis */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="satis-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kullanici_tc')->textInput() ?>

    <?= $form->field($model, 'stok_adedi')->textInput() ?>
    <?php
    print_r("Mevcut Stok adedi: ");
    $temp=Urun::findOne($stok);
    print_r($temp->stok_adedi);
    ?>
    <?= $form->field($model, 'market_isim')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'adres')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
