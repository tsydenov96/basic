<?php

namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\Org;

class OrgController extends Controller
{
	public function actionIndex()
    {
        $query = Organization::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);

        $organizations = $query->orderBy('organization_name')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index', [
            'organizations' => $organizations,
            'pagination' => $pagination,
        ]);
    }

}