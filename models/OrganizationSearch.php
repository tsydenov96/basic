<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Organization;

/**
 * OrganizationSearch represents the model behind the search form about `app\models\Organization`.
 */
class OrganizationSearch extends Organization
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['organization_id', 'organization_type_id', 'category_id', 'address_id', 'ad_type_id', 'rating', 'user_id'], 'integer'],
            [['organization_name', 'img_name', 'advert_mess_text', 'addit_inf', 'stand_form', 'size', 'domin_colors', 'date'], 'safe'],
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
        $query = Organization::find();

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
            'organization_id' => $this->organization_id,
            'organization_type_id' => $this->organization_type_id,
            'category_id' => $this->category_id,
            'address_id' => $this->address_id,
            'ad_type_id' => $this->ad_type_id,
            'date' => $this->date,
            'rating' => $this->rating,
            'user_id' => $this->user_id,
        ]);

        $query->andFilterWhere(['like', 'organization_name', $this->organization_name])
            ->andFilterWhere(['like', 'img_name', $this->img_name])
            ->andFilterWhere(['like', 'advert_mess_text', $this->advert_mess_text])
            ->andFilterWhere(['like', 'addit_inf', $this->addit_inf])
            ->andFilterWhere(['like', 'stand_form', $this->stand_form])
            ->andFilterWhere(['like', 'size', $this->size])
            ->andFilterWhere(['like', 'domin_colors', $this->domin_colors]);

        return $dataProvider;
    }
}
