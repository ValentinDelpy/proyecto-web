<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    protected $table = 'items';
    protected $fillable = ['name', 'cost','AD','AP'];

    public function champions(){
        return $this->belongsToMany(Champions::class);
    }
}
