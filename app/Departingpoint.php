<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Departingpoint extends Model
{
     use SoftDeletes;
	 protected $table = 'departingpoints';

     protected $dates = ['deleted_at'];
}
