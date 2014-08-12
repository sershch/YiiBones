<?php

use yii\helpers\Html;
use yii\grid\GridView;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var app\models\search\resSearch $searchModel
 */

$this->title = 'Res';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="res-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Res', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_result',
            'sumBones',
            'arrSumBones',
            'id_exp',
            'Chance',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
