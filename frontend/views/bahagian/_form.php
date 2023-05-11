<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Bahagian $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="bahagian-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'namaBahagian')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
