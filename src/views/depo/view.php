<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use berkekaraa\project\widgets\deneme;
/*Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) */
/* @var $this yii\web\View */
/* @var $model berkekaraa\project\models\Depo */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Depos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="depo-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>

        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'isim',
            'depo_sorumlusu_id',
        ],
    ]) ?>

    <?= deneme::widget([
    'model' => $model,
        'baslik' => [
            'id',
            'isim',
            'depo_sorumlusu_id',
        ],
    ])?>


</div>
