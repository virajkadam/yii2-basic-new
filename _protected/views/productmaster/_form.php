<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Productmaster */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="productmaster-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'category_id')->textInput() ?>

    <?= $form->field($model, 'offer_id')->textInput() ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'base_quantity')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'base_unit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mrp')->textInput() ?>

    <?= $form->field($model, 'discounted_percentage')->textInput() ?>

    <?= $form->field($model, 'discounted_amount')->textInput() ?>

    <?= $form->field($model, 'selling_amount')->textInput() ?>

    <?= $form->field($model, 'image')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_on')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList([ '0', '1', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'vendor_id')->textInput() ?>

    <?= $form->field($model, 'rank')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
