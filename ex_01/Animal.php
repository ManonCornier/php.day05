<?php
class Animal {
    const MAMMAL = 0;
    const FISH = 1;
    const BIRD = 2;
    private $name;
    private $legs;
    private $type;

    public function __construct ($blaze,$nblegs,$species) {
        $this->name =$blaze;
        $this->legs =$nblegs;
        
        switch($this->type) {
            case Animal::MAMMAL :
            $this->type ="mammal";
            break;
            
            case Animal::FISH : 
            $this->type ="fish";
            break;

            case Animal::BIRD :
            $this->type ="bird";
            break;
        }
        echo "My name is $blaze and I am a $this->type !\n ";
    }
    public function getName () {
        return $this->name;
    }
    public function getLegs () {
        return $this->legs;
    }
    public function getType () {
        return $this->type;
    }
}
?>