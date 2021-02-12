<?php


namespace App\Models;


class Product
{
    public $id;
    public $name;
    public $best_before;
    public $create_date;

    function __construct() {
        echo "hello";
    }

//    function __construct1($name) {
//        $this->name = $name;
//        echo "this is " . $name;
//    }

//    public function __construct($name) {
//
//        //echo "Product Have been Build";
//    }

        function createNewProduct($id, $name, $best_before, $create_date)
        {
            $this->id = $id;
            $this->name = $name;
            $this->best_before = $best_before;
            $this->create_date = $create_date;
        }

    function convert_to_arr()
    {
        $arr = [
            'id'            =>  $this->id,
            'name'          =>  $this->name,
            'best_before'   =>  $this->best_before,
            'create_date'   =>  $this->create_date
        ];

        return $arr;
    }
}
