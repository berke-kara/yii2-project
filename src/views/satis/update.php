<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model berkekaraa\project\models\Satis */

$this->title = 'Update Satis: ' . $model->kullanici_tc;
$this->params['breadcrumbs'][] = ['label' => 'Satis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kullanici_tc, 'url' => ['view', 'id' => $model->kullanici_tc]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="satis-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'id' => $id,
    ]) ?>

</div>
