<?php
include_once __DIR__ ."/product.php";

class Meal extends Product
{
    public $scadenza;

    public function __construct($category,$scadenza,$title, $price, $description, $img )
    {
        parent::__construct($category,$title, $price, $description, $img, );
        $this->scadenza = $scadenza;
    }
    public static function fetchMeal(){
        $data = file_get_contents(__DIR__ ."/meal_db.json");
        $dataphp = json_decode($data,true);
        $meal = [];
        $categories = Category::fetchCategories();
        
        foreach ($dataphp as $key => $value) {
            $category = null;
            foreach ($categories as $cat) {
                if($cat-> name == $value['category']){
                    $category = $cat;
                }
            }

            $meal[] = new Meal($category, $value['scadenza'], $value['title'], $value['price'], $value['description'], $value['img']);
        }
        return $meal;
    }
}