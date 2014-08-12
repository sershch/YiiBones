<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var app\models\exp $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="exp-form">

    <?php $form = ActiveForm::begin(); ?>

    <!--?= $form->field($model, 'date')->textInput(['maxlength' => 30]) ?-->

    <!--?= $form->field($model, 'time')->textInput(['maxlength' => 30]) ?-->

    <?= $form->field($model, 'name')->textInput(['maxlength' => 30]) ?>

    <!--?= $form->field($model, 'bones_num')->textInput() ?-->

    <!--?= $form->field($model, 'throws')->textInput() ?-->

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
