<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\res $model
 */

$this->title = 'Update Res: ' . $model->id_result;
$this->params['breadcrumbs'][] = ['label' => 'Res', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_result, 'url' => ['view', 'id' => $model->id_result]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="res-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
