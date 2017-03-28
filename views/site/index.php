<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Orgs</h1>
<ul>
<?php foreach ($organizations as $organization): ?>
    <li>
        <?= Html::encode("{$organization->organization_name} ({$organization->oragnization_type_id})") ?>:
        <?= $organization->organization_id ?>
    </li>
<?php endforeach; ?>
</ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>
