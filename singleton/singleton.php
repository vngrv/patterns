<?php

class Singleton {

    public $data;

    private static $instance = null;

    private function __construct() {
        $this->data = rand();
    }

    private static function getInstance() {
        if(is_null(self::$instance)) {
            self::$instance = new self;
        }

        return self::$instance;
    }
}

// usage 

$s1 = Singleton::getIntance();
$s2 = Singleton::getIntance();

// $s1 === $s2



