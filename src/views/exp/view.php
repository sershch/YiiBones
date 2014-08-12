<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;

/**
 * @var yii\web\View $this
 * @var app\models\exp $model
 */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Exps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="exp-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_exp], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_exp], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_exp',
            'date',
            'time',
            'name',
            'bones_num',
            'throws',
        ],
    ]) ?>
 
    <?= GridView::widget([
        'dataProvider' => $resultsProvider,
        'columns' => [
        'sumBones',
        'arrSumBones',
        'Chance',  
        ],
    ]);
    ?>

</div>
