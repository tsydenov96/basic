<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$form = ActiveForm::begin([
    'id' => 'login-form',
    'options' => ['class' => 'form-horizontal'],
]) ?>
    <?= $form->field($model, 'username') ?>
    <?= $form->field($model, 'type') ?>
    <?= $form->field($model, 'category') ?>
    <?= $form->field($model, 'img') ?>
    <?= $form->field($model, 'mess') ?>
    <?= $form->field($model, 'info') ?>
    <?= $form->field($model, 'addres') ?>
    <?= $form->field($model, 'ad_type') ?>
    <?= $form->field($model, 'stand') ?>
    <?= $form->field($model, 'size') ?>
    <?= $form->field($model, 'colors') ?>
    <?= $form->field($model, 'date') ?>
    <?= $form->field($model, 'rating') ?>
    <?= $form->field($model, 'user') ?>


    <div class="form-group">
        <div class="col-lg-offset-1 col-lg-11">
            <?= Html::submitButton('Ok', ['class' => 'btn btn-primary']) ?>
        </div>
    </div>	
<?php ActiveForm::end() ?>