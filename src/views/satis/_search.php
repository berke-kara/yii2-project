<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model berkekaraa\project\models\SatisSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="satis-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'kullanici_tc') ?>

    <?= $form->field($model, 'urun_id') ?>

    <?= $form->field($model, 'stok_adedi') ?>

    <?= $form->field($model, 'market_isim') ?>

    <?= $form->field($model, 'adres') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
