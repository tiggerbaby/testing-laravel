<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // List of things that cna be assigned in mass
    protected $fillable = ['name','price','stock','description'];
}
