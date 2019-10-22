<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teams extends Model
{
    protected $table = 'teams';
    protected $fillable = ['name','rank','region'];

    public function teams(){
        return $this->hasMany(Champions::class, 'id');
    }
}
