<?php
include_once __DIR__ . "/product.php";

class Accessory extends Product
{
    public $name;

    public function __construct($category,$name, $title, $price, $description, $img, )
    {
        parent::__construct($category,$title, $price, $description, $img);
        $this->name = $name;
    }
    #this function cicles into our acc_db.json
    public static function fetchAccessory() {
        $data = file_get_contents(__DIR__ . "/acc_db.json");
        $dataphp = json_decode($data,true);
        $accessory = [];
        $categories = Category::fetchCategories();


        foreach ($dataphp as $key => $value) {
            $category = null;
            foreach ($categories as $cat) {
                if($cat-> name == $value['category']){
                    $category = $cat;
                }
            }
            $accessory[] = new Accessory($category, $value['name'], $value['title'], $value['price'],$value['description'],$value['img']);
        }
        return $accessory;
    }
} 