<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use berkekaraa\project\models\Depo;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model berkekaraa\project\models\Urun */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="urun-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'isim')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fiyat')->textInput() ?>

    <?= $form->field($model, 'stok_adedi')->textInput() ?>

    <?= $form->field($model, 'bulunduğu_depo_id')->dropDownList( ArrayHelper::map(Depo::find()->all(),'id','isim'),['prompt'=>'Depoyu Sec']); ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
