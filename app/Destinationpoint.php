<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Destinationpoint extends Model
{
     use SoftDeletes;
	 protected $table = 'destinationpoints';

     protected $dates = ['deleted_at'];
}
