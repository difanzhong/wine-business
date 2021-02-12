<?php


namespace App\Models\Wine\Services;


use App\Models\Product;
use App\Models\Wine\Wine;

trait ShowWine
{
    public function showWine()
    {
        //$wine_arr = [1, 'Wine1', date('d-m-Y'), date("d-m-Y", strtotime("+3 Months")), "Dry Red", "1L", "木塞", "Shiraz"];
        //       //echo var_dump($wine);




        //$product = new Product(100, 'Wine1', date('d-m-Y'), date("d-m-Y", strtotime("+3 Months")));
//        $product = new Product('name1');
//
//
//        var_dump($product);
        $wine = new Wine();
        $wine->createNewWine(1, 'Wine1', date('d-m-Y'), date("d-m-Y", strtotime("+3 Months")),"Dry Red", "1L", "木塞", "Shiraz");

        echo $wine->id;
        return view('wine', $wine->convert_to_arr());
    }

}
