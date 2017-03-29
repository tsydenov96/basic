<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Organization */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="organization-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'organization_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'organization_type_id')->textInput() ?>

    <?= $form->field($model, 'category_id')->textInput() ?>

    <?= $form->field($model, 'img_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'advert_mess_text')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'addit_inf')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'address_id')->textInput()->label('Название подразделения') ?>

    <?= $form->field($model, 'ad_type_id')->textInput() ?>

    <?= $form->field($model, 'stand_form')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'size')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'domin_colors')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <?= $form->field($model, 'rating')->textInput() ?>

   
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
