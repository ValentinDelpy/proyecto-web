<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = ['model_id', 'model_type', 'original', 'hash', 'mime', 'size'];

    public function model(){
        return $this->morphTo();
    }
}
