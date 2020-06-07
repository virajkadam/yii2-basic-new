<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Productmaster;

/**
 * productmastersearch represents the model behind the search form of `app\models\Productmaster`.
 */
class productmastersearch extends Productmaster
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'category_id', 'offer_id', 'vendor_id', 'rank'], 'integer'],
            [['name', 'description', 'base_quantity', 'base_unit', 'image', 'created_on', 'status'], 'safe'],
            [['mrp', 'discounted_percentage', 'discounted_amount', 'selling_amount'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Productmaster::find();

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
            'id' => $this->id,
            'category_id' => $this->category_id,
            'offer_id' => $this->offer_id,
            'mrp' => $this->mrp,
            'discounted_percentage' => $this->discounted_percentage,
            'discounted_amount' => $this->discounted_amount,
            'selling_amount' => $this->selling_amount,
            'vendor_id' => $this->vendor_id,
            'rank' => $this->rank,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'base_quantity', $this->base_quantity])
            ->andFilterWhere(['like', 'base_unit', $this->base_unit])
            ->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'created_on', $this->created_on])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
