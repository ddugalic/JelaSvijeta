<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Dimsav\Translatable\Translatable;

class Meal extends Model
{
    use Translatable;

    public $translatedAttributes = ['title', 'slug', 'description'];

    protected $fillable = ['title', 'slug', 'description'];
	
	public function tags(){	
		return $this->belongsToMany('App\Tag')
		->withTimestamps();
	}
	public function ingredients(){
		return $this->belongsToMany('App\Ingredient')
		->withTimestamps();
	}
}
