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

    public function setNameAttribute($value){
        $this->attributes['name'] = strtoupper($value);
    }
    
    public function getTeamsNameAttribute(){
        return $this->name;
    }
}
