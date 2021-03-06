<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Teams extends Model
{
    use SoftDeletes;
    protected $table = 'teams';
    protected $fillable = ['user_id','name','rank','region'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function champions(){
        return $this->belongsToMany(Champions::class, 'champions_teams', 'team_id','champion_id');
    }

    public function files(){
        return $this->morphMany(File::class, 'model');
    }

    public function setNameAttribute($value){
        $this->attributes['name'] = strtoupper($value);
    }
    
    public function getTeamsNameAttribute(){
        return $this->name;
    }
}
