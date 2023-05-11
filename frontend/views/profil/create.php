<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Profil $model */

$this->title = 'Create Profil';
$this->params['breadcrumbs'][] = ['label' => 'Profils', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profil-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
