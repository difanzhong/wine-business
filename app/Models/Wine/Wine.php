<?php


namespace App\Models\Wine;


use App\Models\Product;
use App\Models\Wine\Services\CreateWine;
use App\Models\Wine\Services\ShowWine;

class Wine extends Product implements IWine
{
    use CreateWine, ShowWine;

    public $type;
    public $capacity;
    public $cap_texture;
    public $grape;

    function __construct() {
        echo "_";
        echo "world";
    }



//    function __construct($id, $name, $best_before, $create_date) {
//        parent::__construct();
//    }

    //function __construct($id, $name, $best_before, $create_date) {}

//    function __construct($id, $name, $best_before, $create_date, $type, $capacity, $cap_texture, $grape)
//    {
//        parent::__construct($id, $name, $best_before, $create_date);
//
//        $this->type = $type;
//        $this->capacity =$capacity;
//        $this->cap_texture = $cap_texture;
//        $this->grape = $grape;
//
//        echo $this->id;
//    }

    function createNewWine($id, $name, $best_before, $create_date, $type, $capacity, $cap_texture, $grape)
    {
        parent::createNewProduct($id, $name, $best_before, $create_date);

        $this->type = $type;
        $this->capacity =$capacity;
        $this->cap_texture = $cap_texture;
        $this->grape = $grape;
    }

    function convert_to_arr()
    {
        $arr = [
            'id'            =>  $this->id,
            'name'          =>  $this->name,
            'best_before'   =>  $this->best_before,
            'create_date'   =>  $this->create_date,
            'type'          =>  $this->type,
            'capacity'      =>  $this->capacity,
            'cap_texture'   =>  $this->cap_texture,
            'grape'         =>  $this->grape,
        ];

        return $arr;
    }

}
