<?php

namespace App\Controllers;

class ProductsController extends Controller
{
    public function index()
    {
        $products = $this->app->db()->all('products');

        return $this->app->view('products/index', ['products' => $products]);
    }

    public function show()
    {
        $sku = $this->app->param('sku');

        if(is_null($sku)) {
            $this->app->redirect('/products');
        }

        $productQuery = $this->app->db()->findByColumn('products', 'sku', '=', $sku);


        if(empty($productQuery)) {
            return $this->app->view('products/missing');
        } else {
            $product = $productQuery[0];
        }

        $reviewSaved = $this->app->old('reviewSaved');

        $reviews = $this->app->db()->findByColumn('reviews', 'product_id', '=', $product['id']);

        return $this->app->view('products/show', [
            'product' => $product,
            'reviewSaved' => $reviewSaved,
            'reviews' => $reviews
        ]);
    }

    public function saveReview()
    {
        $this->app->validate([
            'sku' => 'required',
            'product_id' => 'required',
            'name' => 'required',
            'review' => 'required|minLength:200'
        ]);

        #if the above validation chaecks fail
        #User is redirected back to where they came from (/product)
        #None of the code that folloes will be executed

        $product_id = $this->app->input('product_id');
        $sku = $this->app->input('sku');
        $name = $this->app->input('name');
        $review = $this->app->input('review');

        #To do: Persist review to the database
        $this->app->db()->insert('reviews', [
            'product_id' => $product_id,
            'name' => $name,
            'review' => $review
        ]);

        return $this->app->redirect('/product?sku=' . $sku, ['reviewSaved' => true]);

    }

    public function new()
    {
        $productSaved = $this->app->old('productSaved');
        $sku = $this->app->old('sku');

        return $this->app->view('products/new', [
            'productsSaved' => $productSaved,
            'sku' => $sku,
        ]);
    }

    public function save()
    {
        $this->app->validate([
            'name' => 'required',
            'sku' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'available' => 'required|numeric',
            'weight' => 'required|numeric'
        ]);


        $this->app->db()->insert('products', $this->app->inputAll());

        $this->app->redirect('/products/new', [
            'productSaved' => true,
            'sku' => $this->app->input('sku')
        ]);

    }
}