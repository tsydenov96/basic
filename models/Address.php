<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "address".
 *
 * @property integer $address_id
 * @property integer $street_type_id
 * @property string $address
 *
 * @property StreetType $streetType
 * @property Organization[] $organizations
 */
class Address extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'address';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['street_type_id'], 'integer'],
            [['address'], 'string', 'max' => 45],
            [['street_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => StreetType::className(), 'targetAttribute' => ['street_type_id' => 'street_type_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'address_id' => 'Address ID',
            'street_type_id' => 'Street Type ID',
            'address' => 'Address',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStreetType()
    {
        return $this->hasOne(StreetType::className(), ['street_type_id' => 'street_type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrganizations()
    {
        return $this->hasMany(Organization::className(), ['address_id' => 'address_id']);
    }
}
