<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\OrganizationType */

$this->title = 'Ввод типа организации';
$this->params['breadcrumbs'][] = ['label' => 'Тип организаций', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="organization-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
