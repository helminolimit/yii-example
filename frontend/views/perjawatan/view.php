<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Perjawatan $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Perjawatans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="perjawatan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
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
            [
                'attribute' => 'profile',
                'value' => function($model){
                    return $model->profile0->nama;
                }
            ],
            [
                'attribute' => 'jawatan',
                'value' => function($model){
                    return $model->jawatan0->namaJawatan;
                }
            ],
            [
                'attribute' => 'bahagian',
                'value' => function($model){
                    return $model->bahagian0->namaBahagian;
                }
            ],
            'tarikhMula',
            'tarikhTamat',
            [
                'attribute' => 'supervisor',
                'value' => function($model){
                    return $model->profile1->nama;
                }
            ],

        ],
    ]) ?>

</div>
