<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Dimsav\Translatable\Translatable;

class Tag extends Model
{
    use Translatable;

    public $translatedAttributes = ['title', 'slug'];

    protected $fillable = ['title', 'slug'];
	
	public function meals(){
		return $this->belongsToMany('App\Meal')
		->withTimestamps();
	}
}
