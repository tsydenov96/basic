<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "organization_type".
 *
 * @property integer $organization_type_id
 * @property string $organization_type_name
 *
 * @property Organization[] $organizations
 */
class OrganizationType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'organization_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['organization_type_name'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'organization_type_id' => 'ID Типа организации',
            'organization_type_name' => 'Название типа организации',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrganizations()
    {
        return $this->hasMany(Organization::className(), ['organization_type_id' => 'organization_type_id']);
    }
}
