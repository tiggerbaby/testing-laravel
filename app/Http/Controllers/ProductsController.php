<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{   
	// In charge of showing the default products page
    public function index()
    {   
 		$products = \App\Product::all();
        // $products = \App\Product::where('price','<','10.00')->get();
 		$mostPopularProducts = [];


    	return view ('products', compact('products','mostPopularProducts'));
    }

	
}
