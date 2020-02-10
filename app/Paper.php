<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paper extends Model
{
    public function edition(){
        return $this->belongsTo(Edition::class);
    }
}
