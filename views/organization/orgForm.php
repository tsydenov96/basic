<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Organization */
/* @var $form ActiveForm */
?>
<div class="organization-orgForm">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'advert_mess_text') ?>
        <?= $form->field($model, 'addit_inf') ?>
        <?= $form->field($model, 'date') ?>
        <?= $form->field($model, 'rating') ?>
        <?= $form->field($model, 'user_id') ?>
        <?= $form->field($model, 'organization_name') ?>
        <?= $form->field($model, 'organization_type') ?>
        <?= $form->field($model, 'category') ?>
        <?= $form->field($model, 'ad_type') ?>
        <?= $form->field($model, 'stand_form') ?>
        <?= $form->field($model, 'size') ?>
        <?= $form->field($model, 'img_name') ?>
        <?= $form->field($model, 'address') ?>
    
        <div class="form-group">
            <?= Html::submitButton(Yii::t('app', 'Submit'), ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- organization-orgForm -->
