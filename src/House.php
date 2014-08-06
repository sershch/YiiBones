<?php

    class House
    {
        public $numHouse;
        public $numFlor;
        public $numEnterance;
        //public $numFlat;
        public $numSqere;
        public $arrFlat;
        public $numFlatOnFlor;
        public $lampWat;
        public $tax;
        public $sumPayAllHouse;
        
        
     public function __construct()
        {
            $this->numHouse = rand(1,100);
            $this->numFlor = rand(1,12);
            $this->numEnterance= rand(1,8);
            $this->numSqere = rand(100,500);
            $this -> numFlatOnFlor = 3;
            $this -> lampWat = 150;
            $this -> tax = 32.53;
            $this -> sumPayAllHouse;
            $this ->arrayFlat();
            
        }
        
        public function showHouse()
        {
            echo "<h4>Information about House:</h4>";
            echo "Number of House: ".$this->numHouse."<br>";
            echo "Number of Flor: ".$this->numFlor."<br>";
            echo "Number of Enterance: ".$this->numEnterance."<br>";
            echo "Number of Sqere: ".$this->numSqere."<br>";
        }
        
        public function arrayFlat(){
            $numFlat = $this->numEnterance * $this->numFlor * $this -> numFlatOnFlor;
            
            for ($i = 0; $i < $numFlat; $i++)
            {
                $this -> arrFlat[$i] = new Flat();
            }
            //var_dump ($this -> arrFlat);
            return $this -> arrFlat;
        } 
        
        public function showArrayFlat(){
               var_dump ($this -> arrFlat)."<br>";
        }
        
        public function payAllHouse(){
            $numFlat = $this->numEnterance * $this->numFlor * $this -> numFlatOnFlor;
            for ($i = 0; $i < $numFlat; $i++) {
                 $this ->sumPayAllHouse +=  $this -> arrFlat[$i] -> sumAll();
            }
            return $this ->sumPayAllHouse;
        }
        
        public function showPayAllHouse(){
            echo "<h4>Information about Payment for House:</h4>";
            echo "Rent for All Bilding: ".$this ->sumPayAllHouse." Uah<br>";
        }
        
        
        public function enteranceElectrisity() 
        {
            $sumEnteranceElectrisity = $this->numEnterance * $this->numFlor * $this -> lampWat;
            echo " Electrisity for All Enterance in Bilding: ".$sumEnteranceElectrisity." Wat<br>";
        }
        
        public function taxSqere() 
        {
            $sumtaxSqere = $this->numSqere * $this -> tax;
            echo " Tax for All Sqere around Bilding: ".$sumtaxSqere." Uah<rb>";
        }
        
    }  
    
?> 