<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Facades\Voyager;


class ProductCoffee extends Model
{
	protected $table = 'product_coffee';

    protected $fillable = ['name'];

    public function categoryId(){
	    return $this->belongsTo(Voyager::modelClass('Category'));
	}

	public function category(){
	    return $this->belongsTo(Voyager::modelClass('Category'));
	}
}
