<?php
require_once "animal.php";

class Frog extends Animal {
    public function __construct($name) {
        parent::__construct($name); // Inherit from Animal with default legs = 4
    }

    public function jump() {
        return "Hop Hop";
    }

    public function getDetails() {
        return parent::getDetails() . "Jump: " . $this->jump() . "<br>";
    }
}
?>
