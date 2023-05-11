<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Perjawatan $model */

$this->title = 'Update Perjawatan: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Perjawatans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="perjawatan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'jawatan' => $jawatan,
        'bahagian' => $bahagian,
        'profil' => $profil
    ]) ?>

</div>
