<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
/* @var $model berkekaraa\project\models\Urun */
/* @var $form yii\widgets\ActiveForm */

?>
<div class="urun-stok">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'stok_adedi')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save',[
            'class' => 'btn btn-success',
            'data' => [
                'confirm' => 'Stok güncellemek istediğinize emin misiniz ?',
                'method' => 'post',
            ],
        ]) ?>
    </div>

    <?php ActiveForm::end(); ?>



</div>