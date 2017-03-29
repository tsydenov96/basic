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

    <?= $form->field($model, 'organization_id') ?>

    <?= $form->field($model, 'organization_name') ?>

    <?= $form->field($model, 'organization_type_id') ?>

    <?= $form->field($model, 'category_id') ?>

    <?= $form->field($model, 'img_name') ?>

    <?php // echo $form->field($model, 'advert_mess_text') ?>

    <?php // echo $form->field($model, 'addit_inf') ?>

    <?php // echo $form->field($model, 'address_id') ?>

    <?php // echo $form->field($model, 'ad_type_id') ?>

    <?php // echo $form->field($model, 'stand_form') ?>

    <?php // echo $form->field($model, 'size') ?>

    <?php // echo $form->field($model, 'domin_colors') ?>

    <?php // echo $form->field($model, 'date') ?>

    <?php // echo $form->field($model, 'rating') ?>

    <?php // echo $form->field($model, 'user_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
