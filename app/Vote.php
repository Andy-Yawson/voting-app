<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    protected $table = "votes";

    protected $fillable = ['id','candidate_id','vote'];

    public function candidate(){
        return $this->belongsTo(Candidate::class);
    }
}
