<?php

interface Lion
{
    public function roar();
}

class AfricanLion implements Lion
{
    public function roar()
    {
    }
}

class AsianLion implements Lion
{
    public function roar()
    {
    }
}

class Hunter
{
    public function hunt(Lion $lion)
    {
        $lion->roar();
    }
}

class WildDog
{
    public function bark()
    {  
        var_dump("WildDog::bark()");
    }
}

class WildDogAdapter implements Lion 
{ 
    private $_dog;
    
    public function __construct(WildDog $dog) 
    { 
        $this->_dog = $dog;
    } 
    
    public function roar() 
    { 
        $this->_dog->bark(); 
    } 
}

$wildDog = new WildDog();
$wildDogAdapter = new WildDogAdapter($wildDog);

$wildDog->bark();
$wildDogAdapter->roar();

$hunter = new Hunter();
$hunter->hunt($wildDogAdapter);