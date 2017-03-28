<?php
use yii\helpers\Html;
?>
<p>Вы ввели следующую информацию:</p>

<ul>
    <li><label>Name</label>: <?= Html::encode($model->name) ?></li>
    <li><label>Type</label>: <?= Html::encode($model->Type) ?></li>
    <li><label>Catedory</label>: <?= Html::encode($model->category) ?></li>
    <li><label>File Name</label>: <?= Html::encode($model->fileName) ?></li>
    <li><label>Messege</label>: <?= Html::encode($model->mess) ?></li>
    <li><label>Info</label>: <?= Html::encode($model->info) ?></li>
    <li><label>Street</label>: <?= Html::encode($model->street) ?></li>
    <li><label>Street Name</label>: <?= Html::encode($model->streetName) ?></li>
    <li><label>Ad Type</label>: <?= Html::encode($model->adType) ?></li>
    <li><label>Standart</label>: <?= Html::encode($model->standart) ?></li>
    <li><label>Size</label>: <?= Html::encode($model->size) ?></li>
    <li><label>Colors</label>: <?= Html::encode($model->colors) ?></li>
    <li><label>date</label>: <?= Html::encode($model->date) ?></li>
    <li><label>Rating</label>: <?= Html::encode($model->rating) ?></li>
    <li><label>Secondname</label>: <?= Html::encode($model->secondname) ?></li>
    <li><label>Firstname</label>: <?= Html::encode($model->firstname) ?></li>
    <li><label>Patronymic</label>: <?= Html::encode($model->patronymic) ?></li>
    <li><label>Date of born</label>: <?= Html::encode($model->dateBorn) ?></li>
    <li><label>Group</label>: <?= Html::encode($model->group) ?></li>

</ul>