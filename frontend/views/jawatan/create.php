<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Jawatan $model */

$this->title = 'Create Jawatan';
$this->params['breadcrumbs'][] = ['label' => 'Jawatans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jawatan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
