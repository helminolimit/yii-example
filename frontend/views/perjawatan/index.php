<?php

use common\models\Perjawatan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var common\models\PerjawatanSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Perjawatans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perjawatan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Perjawatan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'profile',
            'jawatan',
            'bahagian',
            [
                'attribute'=> 'tarikhMula',
                'value' => function($model) {
                    return date('d M Y', strtotime($model->tarikhMula));
                }
            ],
            'tarikhMula',
            //'tarikhTamat',
            [
                'attribute' => 'supervisor',
                'value' => function($model){
                    return $model->profile1->nama;
                }
            ],
            [
                'class' => ActionColumn::className(),
                'template' => '{update} {view}',
                'urlCreator' => function ($action, Perjawatan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
