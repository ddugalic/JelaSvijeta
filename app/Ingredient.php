<?php

namespace App;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    use Translatable;

    public $translatedAttributes = ['title', 'slug'];

    protected $fillable = ['title', 'slug'];
	
}
