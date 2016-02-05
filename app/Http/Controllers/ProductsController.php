<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Product;

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
    
    public function create()
    {   
    	// same as product/create
    	return view ('products.create');
    }

    public function store( Request $request)
    {   
    	// Validation
    	$this->validate($request,
    		[
    			'name'=>'required|min:2|max:50',
    			'price'=>'required|numeric|max:9999.99',
    			'stock'=>'required|integer|min:0|max:65535',
    			'description'=>'required|between:20,1000',

    		]);

    		// Create a new product
    	     $newProduct = new Product($request->all());

    	    // Populate the product with form data
    	     // $newProduct->name         = $request->name;
    	     // $newProduct->price        = $request->price;
    	     // $newProduct->stock        = $request->stock;
    	     // $newProduct->description  = $request->description;

     		 $newProduct->save();
    	    //return $request->all();
     		 return redirect('products');
    }
	   public function show( $id )
	   {
	   		// Find the product with that ID
	   		$product = Product::findORfail($id);

	   		return view('products.show',compact('product'));
	   }

	   public function edit ($id)
	   {
	   	  // return $id;
	   	  // Get the info about the product
	   	  $product = Product::findORfail($id);

	   	  return view('products/edit',compact('product'));
	   }

	   public function update( Request $request, $id)
	   {
  		 // return $request->all();

	   	 $this -> validate($request,[
	   	 	'name' => 'required|min:2'
	   	 	]);

	   	 // find the product that we are editing
	   	 $product = Product::findOrFail($id);

	   	 $product->name = $request->name;

	   	 $product->save();

	   	 return redirect('products/'.$id);
	   }
}
