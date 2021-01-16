<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model berkekaraa\project\models\Satis */

$this->title = 'Create Satis';
$this->params['breadcrumbs'][] = ['label' => 'Satis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="satis-create">

    <h1><?php print_r($model->urun->isim . " " . "alınıyor") ?></h1>
    <?= $this->render('_form', [
        'model' => $model,
        'stok' =>$stok,
    ]) ?>

</div>
