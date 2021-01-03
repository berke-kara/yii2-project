<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model berkekaraa\project\models\Calisan */

$this->title = 'Create Calisan';
$this->params['breadcrumbs'][] = ['label' => 'Calisans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="calisan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
