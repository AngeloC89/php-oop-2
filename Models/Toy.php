<?php
include_once __DIR__ ."/product.php";

class Toy extends Product
{
    public $materiale;

    public function __construct($category,$materiale,$title, $price, $description, $img)
    {
        $this->materiale = $materiale;
        parent::__construct($category,$title, $price, $description, $img);
    }
    public static function fetchToy() {
        $data = file_get_contents(__DIR__ . "/toy_db.json");
        $dataphp = json_decode($data,true);
        $toy= [];
        $categories = Category::fetchCategories();


        foreach ($dataphp as $key => $value) {
            $category = null;
            foreach ($categories as $cat) {
                if($cat-> name == $value['category']){
                    $category = $cat;
                }
            }
            $toy[] = new Toy($category, $value['materiale'], $value['title'], $value['price'],$value['description'],$value['img']);
        }
        return $toy;
    }
}