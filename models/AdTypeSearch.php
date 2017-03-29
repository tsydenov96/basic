<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\AdType;

/**
 * AdTypeSearch represents the model behind the search form about `app\models\AdType`.
 */
class AdTypeSearch extends AdType
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ad_type_id'], 'integer'],
            [['ad_type'], 'safe'],
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
        $query = AdType::find();

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
            'ad_type_id' => $this->ad_type_id,
        ]);

        $query->andFilterWhere(['like', 'ad_type', $this->ad_type]);

        return $dataProvider;
    }
}
