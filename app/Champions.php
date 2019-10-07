<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Champions extends Model
{
    protected $table ='champions';
    public $timestamps = true;
    protected $fillable = ['id','name','health_points','type','role'];
}
