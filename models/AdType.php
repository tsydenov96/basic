<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ad_type".
 *
 * @property integer $ad_type_id
 * @property string $ad_type
 *
 * @property Organization[] $organizations
 */
class AdType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ad_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ad_type'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ad_type_id' => 'ID Типа ',
            'ad_type' => 'Тип рекламы',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrganizations()
    {
        return $this->hasMany(Organization::className(), ['ad_type_id' => 'ad_type_id']);
    }
}
