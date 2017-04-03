<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\StreetType;

/* @var $this yii\web\View */
/* @var $model app\models\Address */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="address-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'street_type_id')->textInput()->label('Тип улицы')->dropdownList(
    StreetType::find()->select(['street_type', 'street_type_id'])
    ->indexBy('street_type_id')->column(),
    ['prompt'=>'Выберите категорию...']);  ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true])->label('Адрес') ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
