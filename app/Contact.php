<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{   
	public $table = "contact_form";
    protected $fillable = ['email','message'];
    // protected $table = ['contact_form'];
}
