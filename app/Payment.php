<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'id','name'
    ];

    public function status(){
        return $this->belongsTo(Status::class);
    }

    public function currency(){
        return $this->belongsTo(Currency::class);
    }

    public function partyIdType(){
        return $this->belongsTo(PartyType::class, 'partyIdType_id');
    }

}
