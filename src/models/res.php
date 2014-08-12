<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "results".
 *
 * @property integer $id_result
 * @property integer $sumBones
 * @property integer $arrSumBones
 * @property integer $id_exp
 * @property string $Chance
 *
 * @property Experiment $idExp
 */
class res extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'results';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sumBones', 'arrSumBones', 'id_exp'], 'integer'],
            [['Chance'], 'string', 'max' => 30]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_result' => 'Id Result',
            'sumBones' => 'Sum Bones',
            'arrSumBones' => 'Arr Sum Bones',
            'id_exp' => 'Id Exp',
            'Chance' => 'Chance',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdExp()
    {
        return $this->hasOne(Experiment::className(), ['id_exp' => 'id_exp']);
    }
    
    public function genResult($id) 
    {
        $model = new res;
        $arrSumBone = array (2=>0,3=>0,4=>0,5=>0,6=>0,7=>0,8=>0,9=>0,10=>0,11=>0,12=>0);
        $attampt = 36000;
        
        for ($i = 0; $i < $attampt; $i++)
        {
            $bone1 = rand(1,6);
            $bone2 = rand(1,6);
            $sumBones = $bone1 + $bone2;
            $arrSumBone[$sumBones] += 1;
	}
        
        $connection = \Yii::$app->db;
        
        foreach ($arrSumBone as $key => $value) 
        {
            $Chance = "1/".round(($attampt/$arrSumBone[$key]));
//            $model -> sumBones = $key;
//            $model -> arrSumBones = $value;
//            $model ->id_exp = $id;
//            $model -> Chance = $Chance;
            //$model->save();
        $connection->createCommand()->batchInsert('results', ['sumBones', 'arrSumBones', 'id_exp', 'Chance'], [
            [$key, $value, $id, $Chance]
            ])->execute();
        }
    }
}
