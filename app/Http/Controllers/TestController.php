<?php


namespace App\Http\Controllers;


use App\Models\Wine\IWine;

class TestController extends Controller
{
    protected $_wine;

    public function __construct(IWine $wine)
    {
        $this->_wine = $wine;
    }

    public function CreateWine()
    {
        return $this->_wine->createWine();
    }

    public function ShowWine()
    {
        return $this->_wine->showWine();
    }
}
