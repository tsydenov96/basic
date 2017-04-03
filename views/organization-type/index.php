<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\OrganizationTypeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Тип организации';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="organization-type-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Ввести тип организаци', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'organization_type_id',
            'organization_type_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
