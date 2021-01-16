<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model berkekaraa\project\models\UrunSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="urun-arama">


    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>
    <div style="display: inline-block">
        <?= $form->field($model, 'isim')->textInput() ?>

    </div>
    <div style="display: inline-block;">

        <?= $form->field($model, 'fiyat')->textInput() ?>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Arama Yap', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>