<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Address */

$this->title = 'Введите адрес';
$this->params['breadcrumbs'][] = ['label' => 'Адрес', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="address-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
