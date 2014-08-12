<?php

use yii\helpers\Html;
use yii\grid\GridView;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var app\models\search\expSearch $searchModel
 */

$this->title = 'Exps';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="exp-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Exp', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_exp',
            'date',
            'time',
            'name',
            'bones_num',
            // 'throws',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
