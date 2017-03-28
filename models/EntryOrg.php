<?php

namespace app\models;

use Yii;
use yii\base\Model;

class EntryOrg extends Model
{
	public $name;
	public $type;
	public $category;
	public $fileName;
	public $mess;
	public $info;
	public $street;
	public $streetName;
	public $adType;
	public $standart;
	public $size;
	public $colors;
	public $date;
	public $rating;
	public $secondname;
	public $firstname;
	public $patronymic;
	public $dateBorn;
	public $group;

	public function rules()
	{
		return [
		[['name','type','category','fileName','mess','info','street','streetName','adType','standart','size','colors','date','rating','secondname','firstname','patronymic','dateBorn','group'], 'required'],
		];
	}

}
