<?php

class Category{
    public $name;
    public $logo;

    function __construct($name, $logo){
        $this->name = $name;
        $this->logo = $logo;
    }
    public static function fetchCategories()
    {
        $data = file_get_contents(__DIR__ . "/categories_db.json");
        $dataphp = json_decode($data, true);
        $categories = [];
        foreach ($dataphp as $key => $value) {
            $categories[] = new Category($value['name'], $value['logo']);
        }
        return $categories;
    }
} 
