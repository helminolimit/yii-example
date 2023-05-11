<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Profil $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="profil-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama')->textInput() ?>

    <?= $form->field($model, 'tarikhLahir')->textInput(['type' => 'date']) ?>
    <?= $form->field($model, 'telefon')->textInput() ?>

    <?= $form->field($model, 'emel')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
