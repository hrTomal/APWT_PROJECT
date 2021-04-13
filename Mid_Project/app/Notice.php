<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    protected $table = 'notice';
    public $timestamps = true;
    protected $primaryKey = 'notice_id';
}
