<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\exp;

/**
 * expSearch represents the model behind the search form about `app\models\exp`.
 */
class expSearch extends exp
{
    public function rules()
    {
        return [
            [['id_exp', 'bones_num', 'throws'], 'integer'],
            [['date', 'time', 'name'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = exp::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id_exp' => $this->id_exp,
            'bones_num' => $this->bones_num,
            'throws' => $this->throws,
        ]);

        $query->andFilterWhere(['like', 'date', $this->date])
            ->andFilterWhere(['like', 'time', $this->time])
            ->andFilterWhere(['like', 'name', $this->name]);

        return $dataProvider;
    }
}
