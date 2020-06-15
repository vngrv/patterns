<?php

class Single
{
    public function __clone()
    {

    }
}
 
class Prototype
{
    public function getClone(Single $single)
    {
        return clone $single;
    }
}

$prototype = new Prototype();
$singleArray[] = $prototype->getClone(new Single());

var_dump($singleArray);