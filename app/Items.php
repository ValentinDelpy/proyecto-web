<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    protected $table ='items';
    public $timestamps = true;
    protected $fillable = ['id','name','cost','ad','ap'];
}
