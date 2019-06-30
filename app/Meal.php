<?php

namespace App;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
	use Translatable;

    public $translatedAttributes = ['title', 'slug', 'description'];

    protected $fillable = ['title', 'slug', 'description'];
	
	public function tags(){	
		return $this->belongsToMany(Tag::class)
		->withTimestamps();
	}
	public function ingredients(){
		return $this->belongsToMany(Ingredient::class);
	}
	public function categories() {
        return $this->belongsTo(Category::class);
    }
}
