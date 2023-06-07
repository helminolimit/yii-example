<?php

use common\models\Profil;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var common\models\ProfilSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Profils';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profil-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Profil', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nama',
            'tarikhLahir',
            'telefon',
            'emel',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Profil $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>

    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Striped Full Width Table Striped rows</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body no-padding">
            <div class="table-responsive">
                <table class="table table-striped">
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Task</th>
                        <th>Progress</th>
                        <th>Deadline</th>
                        <th style="width: 40px">Label</th>
                    </tr>
                    <tr>
                        <td>1.</td>
                        <td>Update software</td>
                        <td>
                            <div class="progress progress-xs">
                                <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                            </div>
                        </td>
                        <td>Apr 12, 2017</td>
                        <td><span class="badge bg-red">55%</span></td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>Clean database</td>
                        <td>
                            <div class="progress progress-xs">
                                <div class="progress-bar progress-bar-yellow" style="width: 70%"></div>
                            </div>
                        </td>
                        <td>Apr 12, 2017</td>
                        <td><span class="badge bg-yellow">70%</span></td>
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td>Cron job running</td>
                        <td>
                            <div class="progress progress-xs progress-striped active">
                                <div class="progress-bar progress-bar-primary" style="width: 30%"></div>
                            </div>
                        </td>
                        <td>Apr 12, 2017</td>
                        <td><span class="badge bg-light-blue">30%</span></td>
                    </tr>
                    <tr>
                        <td>4.</td>
                        <td>Fix and squish bugs</td>
                        <td>
                            <div class="progress progress-xs progress-striped active">
                                <div class="progress-bar progress-bar-success" style="width: 90%"></div>
                            </div>
                        </td>
                        <td>Apr 12, 2017</td>
                        <td><span class="badge bg-green">90%</span></td>
                    </tr>
                </table>
            </div>
        </div>
        <!-- /.box-body -->
    </div>
</div>
