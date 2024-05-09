<?php
include_once __DIR__ ."/product.php";

class Meal extends Product
{
    public string $scadenza;

    public function __construct($category,$title, $price, $description, $img,$scadenza)
    {
        parent::__construct($category, $title, $price, $description, $img);
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

            $meal[] = new Meal($category,$value['title'], $value['price'], $value['description'], $value['img'], $value['scadenza']);
            
        }
        return $meal;
    }
}