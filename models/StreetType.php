<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "street_type".
 *
 * @property integer $street_type_id
 * @property string $street_type
 *
 * @property Address[] $addresses
 */
class StreetType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'street_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['street_type'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'street_type_id' => 'ID Типа улицы',
            'street_type' => 'Тип улицы',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAddresses()
    {
        return $this->hasMany(Address::className(), ['street_type_id' => 'street_type_id']);
    }
}
