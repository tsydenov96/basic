<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\StreetType */

$this->title = 'Create Street Type';
$this->params['breadcrumbs'][] = ['label' => 'Street Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="street-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
