<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AdTypeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Тип рекламы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ad-type-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создание типа рекламы', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ad_type_id',
            'ad_type',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
