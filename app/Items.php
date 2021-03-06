<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    protected $table = 'items';
    protected $fillable = ['name', 'cost','AD','AP'];

    public function champion(){
        return $this->belongsTo(Champion::class, "champion_id");
    }
}
