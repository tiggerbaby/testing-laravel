<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Contact;


class ContactController extends Controller
{
    public function index(){
    	return view ('contact');
    }

     public function store( Request $request)
    {   
    	// Validation
    	$this->validate($request,
    		[
    			'email'=>'required',
    			'message'=>'required|between:20,300',
    		]);

    		
    	     $contact = new Contact($request->all());



    	    
     		 $contact->save();
    	    // return $request->all();
            
     		 return redirect('contact');
    }
}
