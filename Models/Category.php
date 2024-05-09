<?php

class Category{
    public $name;
    public $logo;

    function __construct($name, $logo){
        $this->name = $name;
        $this->logo = $logo;
    }
}