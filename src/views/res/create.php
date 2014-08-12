<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\res $model
 */

$this->title = 'Create Res';
$this->params['breadcrumbs'][] = ['label' => 'Res', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="res-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
