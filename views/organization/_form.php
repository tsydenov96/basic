<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Category;
use app\models\OrganizationType;
use app\models\AdType;
use app\models\Address;
/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */
/* @var $model app\models\Organization */
/* @var $model app\models\OrganizationType */
?>

<div class="organization-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'organization_name')->textInput(['maxlength' => true])->label('Название организации') ?>

    <?= $form->field($model, 'organization_type_id')->textInput()->label('Тип организации')->dropdownList(
    OrganizationType::find()->select(['organization_type_name', 'organization_type_id'])
    ->indexBy('organization_type_id')->column(),
    ['prompt'=>'Выберите тип организации...']); ?>

    <?= $form->field($model, 'category_id')->textInput()->label('Категории')->dropdownList(
    Category::find()->select(['category_name', 'category_id'])
    ->indexBy('category_id')->column(),
    ['prompt'=>'Выберите категорию...']); ?>

    <?= $form->field($model, 'img_name')->textInput(['maxlength' => true])->label('Имя файла') ?>

    <?= $form->field($model, 'advert_mess_text')->textarea(['rows' => 6])->label('Текст рекламы') ?>

    <?= $form->field($model, 'addit_inf')->textarea(['rows' => 6])->label('Дополнительная информация') ?>

    <?= $form->field($model, 'address_id')->textInput()->label('Адрес')->dropdownList(
    Address::find()->select(['address', 'address_id'])
    ->indexBy('address_id')->column(),
    ['prompt'=>'Выберите адрес...']); ?>

    <?= $form->field($model, 'ad_type_id')->textInput()->label('Тип рекламы')->dropdownList(
    AdType::find()->select(['ad_type', 'ad_type_id'])
    ->indexBy('ad_type_id')->column(),
    ['prompt'=>'Выберите тип рекламы...']);  ?>

    <?= $form->field($model, 'stand_form')->textInput(['maxlength' => true])->label('Стандартная форма') ?>

    <?= $form->field($model, 'size')->textInput(['maxlength' => true])->label('Размер') ?>

    <?= $form->field($model, 'domin_colors')->textarea(['rows' => 6])->label('Цвета') ?>

    <?= $form->field($model, 'date')->textInput()->label('Дата') ?>

    <?= $form->field($model, 'rating')->textInput()->label('Оценка') ?>

   
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
