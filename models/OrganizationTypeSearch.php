<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\OrganizationType;

/**
 * OrganizationTypeSearch represents the model behind the search form about `app\models\OrganizationType`.
 */
class OrganizationTypeSearch extends OrganizationType
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['organization_type_id'], 'integer'],
            [['organization_type_name'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = OrganizationType::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'organization_type_id' => $this->organization_type_id,
        ]);

        $query->andFilterWhere(['like', 'organization_type_name', $this->organization_type_name]);

        return $dataProvider;
    }
}
