<?php
use yii\grid\GridView;
use yii\grid\ActionColumn;
use common\models\MyPengguna;
use yii\helpers\Url;
use yii\helpers\Html;

echo __FILE__;
echo __LINE__;
?>

<p>
    <?= Html::a('Tambah Pengguna', ['create'],['class' => 'btn btn-success']) ?>
</p>
<?php
echo GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],

        'username',
        'email:email',
        'status',
        [
            'attribute' => 'created_at',
            'label' => 'Tarikh Daftar',
            'value' => function($model){
                return date('d/m/Y H:i:s 0', $model->created_at);
            }
        ],
        'updated_at',
        [
            'attribute' => 'supervisor',
            'value' => function($model) {
                return (
                    $model->supervisor == null
                    ? null
                        :$model->supervisor0->username
                            .'-'
                            .($model->supervisor0->supervisor == null
                                ? null
                                : $model->supervisor0->supervisor0->username
                            )
                );
            }
        ]
    ],
]);
