<?php

class Singleton {
    public $data;
    private static $instance = null;

    private function __construct() {
        $this->data = rand();
    }

    public: static function getInstance() {
        if(is_null(self::$instance)) {
            self::$instance = new self;
        }

        return self::$instance;
    }
}


$s1 = Singleton::getInstance();
$s2 = Singleton::getInstance();

var_dump($s1);
var_dump($s2);


