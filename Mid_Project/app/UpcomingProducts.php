<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UpcomingProducts extends Model
{
   protected $table = "upcoming_products";
   public $timestamps = null;
   protected $primarykey = "id";
}
