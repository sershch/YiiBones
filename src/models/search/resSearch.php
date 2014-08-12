<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\res;

/**
 * resSearch represents the model behind the search form about `app\models\res`.
 */
class resSearch extends res
{
    public function rules()
    {
        return [
            [['id_result', 'sumBones', 'arrSumBones', 'id_exp'], 'integer'],
            [['Chance'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = res::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id_result' => $this->id_result,
            'sumBones' => $this->sumBones,
            'arrSumBones' => $this->arrSumBones,
            'id_exp' => $this->id_exp,
        ]);

        $query->andFilterWhere(['like', 'Chance', $this->Chance]);

        return $dataProvider;
    }
}
