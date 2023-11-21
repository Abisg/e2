<?php

namespace App\Controllers;

use App\Products;

class ProductsController extends Controller
{
    public function index()
    {
        $productsObj = new Products($this->app->path('/database/products.json'));

        $products = $productsObj->getAll();



        return $this->app->view('products/index', ['products' => $products]);

    }

    public function show()
    {
        // dump($_GET['sku']);
        $sku = $this->app->param('sku');


        $productsObj = new Products($this->app->path('/database/products.json'));

        $product = $productsObj->getBySku($sku);

        return $this->app->view('products/show', ['product' => $product]);

    }

}