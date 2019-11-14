<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Champions extends Model
{
    protected $table = 'champions';
    protected $fillable = ['name','health_points','type','role'];

    public function team(){
        return $this->belongsTo('App\Teams', 'id');
    }

    public function items(){
        return $this->belongsToMany(Items::class)->withPivot('contact');
    }

}

