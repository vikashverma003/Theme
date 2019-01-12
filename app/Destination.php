<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    

        protected $fillable = [

        'destination_name','discryption', 'address','lat','long','title', 'price', 'city', 'state','country',
    ];




    	public function video()

    	{


    		return $this->hasMany('App\Video');
    		
    	}
    

}
