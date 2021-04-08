<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    protected $table = 'salary';
    public $timestamps = true;
    protected $primaryKey = 'salary_id';
}
