<?php

namespace app\models;

use Yii;

class throwBones {
    
    public function __construct()
    {
       $this -> bone1 = rand(1,6);
       $this -> bone2  = rand(1,6);
       $this -> date = date("Y-m-d");
       $this -> time = date("H:i:s");
    }       
        
    
    public static function tableName()
    {
        return 'throwBones';
    }
    
    public function Date()
    {
  
    }
}