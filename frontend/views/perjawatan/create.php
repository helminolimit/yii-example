<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Perjawatan $model */

$this->title = 'Create Perjawatan';
$this->params['breadcrumbs'][] = ['label' => 'Perjawatans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perjawatan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'jawatan' => $jawatan,
        'bahagian' => $bahagian,
        'profil' => $profil
    ]) ?>

</div>
