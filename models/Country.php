<?php

namespace app\models;

use app\models\Country;

class Country extends ActiveRecord
{
	
}
	// public function
	// // получаем все строки из таблицы "country" и сортируем их по "name"
	// $countries = Country::find()->orderBy('name')->all();

	// // получаем строку с первичным ключом "US"
	// $country = Country::findOne('US');

	// // отобразит "United States"
	// echo $country->name;

	// // меняем имя страны на "U.S.A." и сохраняем в базу данных
	// $country->name = 'U.S.A.';
	// $country->save();
