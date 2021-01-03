<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model berkekaraa\project\models\Calisan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="calisan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'isim')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bolum')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Maas')->textInput() ?>

    <?= $form->field($model, 'Yas')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
