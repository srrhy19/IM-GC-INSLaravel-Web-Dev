<?php
require_once "animal.php";

class Ape extends Animal {
    public function __construct($name) {
        parent::__construct($name, 2); // Override legs to 2
    }

    public function yell() {
        return "Auooo";
    }

    public function getDetails() {
        return parent::getDetails() . "Yell: " . $this->yell() . "<br>";
    }
}
?>
