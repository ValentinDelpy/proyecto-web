<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Champions extends Model
{
    protected $table = 'champions';
    protected $fillable = ['name','health_points','type','role'];

    public function teams(){
        return $this->belongsToMany(Teams::class);
    }

    public function items(){
        return $this->hasMany(Items::class, 'champion_id');
    }

}

