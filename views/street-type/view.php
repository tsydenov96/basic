<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\StreetType */

$this->title = $model->street_type_id;
$this->params['breadcrumbs'][] = ['label' => 'Street Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="street-type-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->street_type_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->street_type_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'street_type_id',
            'street_type',
        ],
    ]) ?>

</div>
