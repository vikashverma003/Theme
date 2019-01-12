<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    
	 protected $fillable = [

        'image','video', 'threesixty_view','destination_id',
    ];


    public function destination()

    {


    	return $this->hasOne('App\Destination');
    	

    }


}
