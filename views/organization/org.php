<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name') ?>
    <?= $form->field($model, 'type') ?>
    <?= $form->field($model, 'category') ?>
    <?= $form->field($model, 'fileName') ?>
    <?= $form->field($model, 'mess') ?>
    <?= $form->field($model, 'info') ?>
    <?= $form->field($model, 'street') ?>
    <?= $form->field($model, 'streetName') ?>
    <?= $form->field($model, 'adType') ?>
    <?= $form->field($model, 'standart') ?>
    <?= $form->field($model, 'size') ?>
    <?= $form->field($model, 'colors') ?>
    <?= $form->field($model, 'date') ?>
    <?= $form->field($model, 'rating') ?>
    <?= $form->field($model, 'secondname') ?>
    <?= $form->field($model, 'firstname') ?>
    <?= $form->field($model, 'patronymic') ?>
    <?= $form->field($model, 'dateBorn') ?>
    <?= $form->field($model, 'group') ?>


    <div class="form-group">
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>