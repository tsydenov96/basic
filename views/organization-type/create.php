<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\OrganizationType */

$this->title = 'Create Organization Type';
$this->params['breadcrumbs'][] = ['label' => 'Organization Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="organization-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
