<?php
class Animal {
    public $name;
    public $legs;
    public $cold_blooded;

    public function __construct($name, $legs = 4, $cold_blooded = "no") {
        $this->name = $name;
        $this->legs = $legs;
        $this->cold_blooded = $cold_blooded;
    }

    public function getDetails() {
        return "Name: {$this->name}<br>Legs: {$this->legs}<br>Cold blooded: {$this->cold_blooded}<br>";
    }
}
?>
