<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    protected $table = "candidates";

    protected $fillable = ['id','name','role_id','img'];

    public function votes(){
        return $this->hasMany(Vote::class);
    }
}
