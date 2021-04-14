<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
   protected $table = "people";
   public $timestamps = null;
   protected $primarykey = "id";
}
