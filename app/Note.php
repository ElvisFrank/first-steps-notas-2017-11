<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
	protected $fillable =['note'];

	public function category(){
		return $this->belongsTo(Category::class);
	}

	//protected $connection = 'mysql_tests';
	//para conectar con la db prueba..
}
