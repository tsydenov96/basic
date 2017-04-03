<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\AdType */

$this->title = 'Ввод типа рекламы';
$this->params['breadcrumbs'][] = ['label' => 'Тип рекламы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ad-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
