<?php 

    class Street
    {
        public $nameStreet;
        public $langStreet;
        public $beginStreet;
        public $endStreet;
        public $streetSqere;
        public $numBuilding;
        public $arrayBuilding;
        public $langBuilding;
        public $sumAllStreet;
        const JANITOR=1000;  
        
     public function __construct()
        {
            $this ->arrayBuilding = array();
            $this ->numBilding = rand(1,100);
            $this ->nameStreet = rand(1,45).str;
            $this ->langStreet = rand(1000,10000);
            $this ->beginStreet = rand(0,180).".".rand(0,59).".".rand(0,59)."E ".rand(0,180).".".rand(0,59).".".rand(0,59)."N";
            $this ->endStreet = rand(0,180).".".rand(0,59).".".rand(0,59)."E ".rand(0,180).".".rand(0,59).".".rand(0,59)."N";
            $this ->arrayBuilding();
        }
        
        public function showStreet()
        {
            echo "<h4>Information about Street:</h4>";
            echo "Name of Street: ".$this->nameStreet."<br>";
            echo "Quantity of Building of the street: ".$this ->numBilding."<br>";
            echo "Lang of Street: ".$this->langStreet."<br>";
            echo "Coordinates of the beginning of the street: ".$this->beginStreet."<br>";
            echo "Coordinates of the end of the street: ".$this->endStreet."<br>";
        }
      
        public function arrayBuilding(){
            for ($i = 0; $i < $this ->numBilding; $i++){
                $this ->arrayBuilding[$i] = new House();
            }
        } 

        public function showArrayBuilding(){
               var_dump ($this ->arrayBuilding)."<br>";
        }
        
        public function  numJanitor (){
            $sumJanitor = 0;
            for ($i = 0; $i < $this ->numBilding; $i++){
                   $sumJanitor += $this ->arrayBuilding[$i] ->numSqere;
            }   
            echo "Number of  Janitor on this street: ".round($sumJanitor/self::JANITOR)."<br>";
        }
        
        public function payAllStreet() {
            $this->sumAllStreet = 0;
                    
            for ($i = 0; $i < $this ->numBilding; $i++) {
                $this ->sumAllStreet += $this ->arrayBuilding[$i] -> payAllHouse();
            }
            echo "<h4>Information about Payment for Street:</h4>";
           echo "Rent for All Street: ".$this ->sumAllStreet." Uah<br>";
           return $this ->sumAllStreet;
        }
    }  
    
?> 