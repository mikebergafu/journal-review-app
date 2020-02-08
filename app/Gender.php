<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
