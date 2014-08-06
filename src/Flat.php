<?php

    class Flat
    {
        public $room;
        public $people;
        public $square;
        public $flor;
        public $balcony;
        public $counterElectr;
        
        public $electrisity = 0.31;
        public $gas = 12.73;
        public $coldWater = 1.12;
        public $hotWater = 23.15;
        public $heating = 9.58;
        public $rent = 2.15;
        
        public $sumElectrisity;
        public $sumGas;
        public $sumHotWater;
        public $sumColdWater;
        public $sumHeating;
        public $sumRent;
        public $sumPayAll;
        public $sumAll;
        
        
        public function __construct()
        {
            $this->room = rand(1,4);
            $this->people = rand(1,5);
            $this->square= rand(30,100);
            $this->flor = rand(1,12);
            $this->balcony = rand(0,2);
            $this->counterElectr = rand(50,400);
        }
        
        public function showFlat()
        {
            echo "<h4>Information about Flat:</h4>";
            echo "Number of People: ".$this->people."<br>";
            echo "Number of room: ".$this->room."<br>";
            echo "Number of square: ".$this->square."<br>";
            echo "Number of flor:".$this->flor."<br>";
            echo "Number of balcony:".$this->balcony."<br>";
            echo "<br>";
        }
        
        public function payElectrisity()
        {
            $this->sumElectrisity = ($this->counterElectr) * ($this->electrisity);
            return $this->sumElectrisity;
            
        }
        
        public function payGas()
        {
            $this->sumGas = ($this->people) * ($this->gas);
            return $this->sumGas;
        }
        
        public function payHotWater()
        {
            $this->sumHotWater = ($this->people) * ($this->hotWater);
            return $this->sumHotWater;
        }
        
         public function payColdWater ()
        {
            $this->sumColdWater = ($this->people) * ($this->coldWater);
            return $this->sumColdWater;
        }
        
         public function payHeating()
        {
            $this->sumHeating = ($this->square) * ($this->heating);
            return $this->sumHeating;
        }
        
        public function payRent()
        {
            $this->sumRent = ($this->square) * ($this->rent);
            return $this->sumRent;
        }
        
        public function payAll()
        {
            $this->sumAll = array ('Pay for Electrisity: ' => $this -> payElectrisity(), 
                                   'Pay for Gas: ' => $this -> payGas(),
                                   'Pay for Hot Water: '=> $this -> payHotWater(),
                                   'Pay for Cold Water: ' => $this -> payColdWater(),
                                   'Pay for Heating: ' => $this -> payHeating(),
                                   'Pay for Rent: ' => $this -> payRent()
                                   );
            return $this->sumAll;
        }
        
        public function showPayAll()
        {
            echo "<h4>Information about Payment for Flat:</h4>";
            foreach ($this->payAll() as $key => $value)
                {
                    echo "$key $value.<br>";
                }
            
        }
        
        public function sumAll() 
        {
            foreach ($this->payAll() as $key => $value)
                {
                $this -> sumPayAll += $this->sumAll[$key];
                }
            //echo "Pay for All: ".$this -> sumPayAll;
            return ($this -> sumPayAll); 
        }
       
    }

?> 