<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $table = 'sales';
    public $timestamps = false;
    protected $primaryKey = 'sale_id';
}
