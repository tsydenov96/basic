<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\StreetType */

$this->title = 'Update Street Type: ' . $model->street_type_id;
$this->params['breadcrumbs'][] = ['label' => 'Street Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->street_type_id, 'url' => ['view', 'id' => $model->street_type_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="street-type-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
