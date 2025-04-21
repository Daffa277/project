<?php

namespace App\Http\Controllers;

use Iluminate\Http\Request;
use Iluminate\View\View;
use App\Http\Controllers\Controller;



class ProductController extends Controller

{
    private $products = [
        1 => ['name' => 'Kaos Laravel', 'price' => 150000],
        2 => ['name' => 'Stiker Coding', 'price' => 25000],
        3 => ['name' => 'Notebook Dev', 'price' => 50000],
    ];

    public function index()
    {
        $products = $this->products;
        return view('products.index', compact('products'));
    }
}
