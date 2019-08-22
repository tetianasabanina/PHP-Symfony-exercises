<?php
class Matikka {
    public $kcal; 
    public $joule;
    public $radius;
    public $width;
    public $height;
    public $celsius;
    public $fahrenheit;
    public $radian;
    
    //  Energy Conversion
    public function getKcal(){       
        return $this->kcal;  
    }
    public function setKcal($kcal){
        $this->kcal = $kcal;
    }
    // kcal to joule
    public function jouleConverter() {
        //print ("<h3>Converter: kcal to J <h3>");
        return $this->getKcal() . "kcal = " . $this->getKcal() * 4.184 * 1000 . " joules.";
    }

    public function getJoule(){       
        return $this->joule;  
    }
    public function setJoule($joule){
        $this->joule = $joule;
    }
    // joule to kcal
    public function kcalConverter() {
        //print ("<h3>Converter: J to kcal <h3>");
        return $this->joule . " joules = " . round(($this->joule * 0.2390057361 / 1000), 2) . " kcal.";
    }
    
    // Area of circle
    
    public function getRadius(){       
        return $this->radius;  
    }
    public function setRadius($radius){
        $this->radius = $radius;
    }
    
    public function circleArea() {
        //print ("<h3>Area of circle<h3>");
        return "The area of circle with radius of " . $this->getRadius() . " is ". 
        $this->getRadius() * $this->getRadius() * 3.14;
    }
    
    // Area of rectangle
    public function getHeight(){       
        return $this->height;
    }
    public function getWidth(){       
        return $this->width;  
    }
    public function __constructor($height, $width){
        $this->height = $height;
        $this->width = $width;
    }
    
    public function rectArea() {
        //print ("<h3>Area of rectangle<h3>");
        return "The area of rectangle with width = " . $this->getWidth() . " and height = " . $this->getHeight() .  " is ". 
        $this->getHeight() * $this->getWidth();
    }
   //  Temperature Conversion
    public function getCels(){       
    return $this->cels;  
    }
    public function setCels($celsius){
        $this->cels = $celsius;
    }
    // °C to °F 
    public function celsiusConverter() {
        //print ("<h3>Converter: °C to °F <h3>");
        return $this->getCels() . "°C = " . round((9 / 5 * $this->getCels() + 32), 2) . "°F.";
    }

    public function getFahr(){       
        return $this->fahr;  
    }
    public function setFahr($fahrenheit){
        $this->fahr = $fahrenheit;
    }
    // °F to °C
    public function fahrConverter() {
        //print ("<h3>Converter: °F to °C <h3>");
        return $this->getFahr() . "°F = " . round(5 / 9 * ($this->getFahr - 32), 2) . "°C.";
    }

    //  Angle Conversion
    public function getRadian(){       
        return $this->radian;  
        }
        public function setRadian($radian){
            $this->radian = $radian;
        }
        // Radian to degrees
        public function radianConverter() {
            //print ("<h3>Converter: Radian to degrees<h3>");
            return "Angle in " . $this->getRadian() . " rad = " . round(0.0174532925 * $this->getRadian(), 2) . "°";
        }
    
    }