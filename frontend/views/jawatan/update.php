<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Jawatan $model */

$this->title = 'Update Jawatan: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Jawatans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jawatan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
