<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>

<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>
<?= $form->field($model, 'password_hash')->passwordInput() ?>
<?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
<?= $form->field($model, 'created_at')->textInput() ?>
<?= $form->field($model, 'supervisor')->textInput() ?>
<?= Html::a('Simpan', ['create'],['class' => 'btn btn-success mt-3']) ?>

<?php ActiveForm::end(); ?>
