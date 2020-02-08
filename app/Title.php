<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
