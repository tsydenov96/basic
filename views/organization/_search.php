<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\OrganizationSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="organization-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'organization_id')->label('Идентификатор организации') ?>

    <?= $form->field($model, 'organization_name')->label('Название организации') ?>

    <?= $form->field($model, 'organization_type_id')->label('Тип организации') ?>

    <?= $form->field($model, 'category_id')->label('Категории') ?>

    <?= $form->field($model, 'img_name')->label('Имя файла') ?>

    <?php // echo $form->field($model, 'advert_mess_text')->label('Текст рекламы') ?>

    <?php // echo $form->field($model, 'addit_inf')->label('Дополнительная информация') ?>

    <?php // echo $form->field($model, 'address_id')->label('Название подразделения') ?>

    <?php // echo $form->field($model, 'ad_type_id')->label('тип рекламы') ?>

    <?php // echo $form->field($model, 'stand_form')->label('Стандартная форма') ?>

    <?php // echo $form->field($model, 'size')->label('Размер') ?>

    <?php // echo $form->field($model, 'domin_colors')->label('Цвета') ?>

    <?php // echo $form->field($model, 'date')->label('Дата') ?>

    <?php // echo $form->field($model, 'rating')->label('Оценка') ?>

    <?php // echo $form->field($model, 'user_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
