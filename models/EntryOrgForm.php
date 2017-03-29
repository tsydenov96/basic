<?php

namespace app\models;

use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $type;
    public $category;
    public $img;
    public $mess;
    public $info;
    public $addres;
    public $ad_type;
    public $stand;
    public $size;
    public $colors;
    public $date;
    public $rating;
    public $user;

    public function rules()
    {
        return [
            [['name', 'type','category','img','mess','info','addres','ad_type','stand','size','colors','date','rating','user'], 'required'],
        ];
    }
}