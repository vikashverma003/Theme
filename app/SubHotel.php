<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubHotel extends Model
{
    

	protected $fillable = [
        'name', 'user_id', 'image', 'subname', 'subimage','discryption',
    ];


}
