<?php
class Tigger {
    private static $instance = null;
    private $roarCount = 0;

private function __construct() {
        echo "Building character..." . PHP_EOL;
}

public function roar() {
        echo "Grrr!" . PHP_EOL;
        $this->roarCount++;
} 
// devuelve el mismo Tigger si ya se ha instanciado antes
public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new Tigger();
        }
        return self::$instance;
    }
    
public function getCounter() {
        return $this->roarCount;
    }
}