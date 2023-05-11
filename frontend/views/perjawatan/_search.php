<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\PerjawatanSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="perjawatan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'profile') ?>

    <?= $form->field($model, 'jawatan') ?>

    <?= $form->field($model, 'bahagian') ?>

    <?= $form->field($model, 'tarikhMula') ?>

    <?php // echo $form->field($model, 'tarikhTamat') ?>

    <?php // echo $form->field($model, 'supervisor') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
