<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
	protected $fillable = ['user_id','title','street_no','street_name','city','state','zip' ,'country','price','available_from','email','image_upload','description','updated_at','created_at'];
	
	
	public function user() {
        return $this->belongsTo('App\User');
}
}