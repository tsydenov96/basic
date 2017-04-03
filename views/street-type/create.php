<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\StreetType */

$this->title = 'Создатние типа улицы';
$this->params['breadcrumbs'][] = ['label' => 'Тип улицы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="street-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
