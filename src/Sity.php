<?php

class Sity
{
    public $nameSity;
    public $bdaySity;
    public $coordSity;
    public $numStreet;
    public $arrStreet;
    public $sumTax;
    public $Peoples;

    public function __construct() {
      $this->nameSity = "SunSity";
      $this->bdaySity = "1775";
      $this -> numStreet = rand(1,5);
      $this ->coordSity = rand(0,180).".".rand(0,59).".".rand(0,59)."E ".rand(0,180).".".rand(0,59).".".rand(0,59)."N";  
    }
    
    public function arrayStreet() {
        $this -> arrStreet = array();
            for ($i = 0; $i < $this -> numStreet; $i++){
                $this -> arrStreet[$i] = new Street;
        }
//        var_dump($this -> arrStreet);
       return $this -> arrStreet; 
    }
    
    public function populationSity() {
        foreach ($this -> arrStreet as $valueB) {
            foreach ($valueB -> arrayBuilding as $valueF) {
                foreach ($valueF -> arrFlat as $valueP) {
                    $this -> Peoples += $valueP ->people;
                }
            }
        }
        //echo "Population  of the Sity: ".$this -> Peoples."<br>";
        return $this -> People;
    }
    
    public function showSity()
        {
            echo "<h4>Information about Sity:</h4>";
            echo "Name of Sity: ".$this->nameSity."<br>";
            echo "Birthday of Sity ".$this ->bdaySity."<br>";
            echo "Quantity of Street: ".$this->numStreet."<br>";
            echo "Coordinates  of the Sity: ".$this->coordSity."<br>";
            echo "Population  of the Sity: ".$this -> Peoples."<br>";
        }
        

    
    public function taxAllSity() {
        foreach ($this -> arrStreet as $value){
            foreach ($value -> arrayBuilding as $value1) {
               $this -> sumTax += $value1 -> numSqere;
            } 
        }
        echo "<h4>Information about Payment for Sity:</h4>";
        echo "Tax of all Streets: ".$this -> sumTax." Uah"."<br>";
    }
    
}
?>