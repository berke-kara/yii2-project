<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model berkekaraa\project\models\Depo */

$this->title = 'Create Depo';
$this->params['breadcrumbs'][] = ['label' => 'Depos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="depo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
