<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Bahagian $model */

$this->title = 'Update Bahagian: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Bahagians', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bahagian-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
