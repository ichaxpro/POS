<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function category($category)
    {
        
        $product_list = ["Product A", "Product B", "Product C"]; 

        return view('products.category', [
            'category_name' => str_replace('-', ' ', ucwords($category, '-')), 
            'products' => $product_list,
        ]);
    }
}
