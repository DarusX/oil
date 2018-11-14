<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exchange extends Model
{
    protected $fillable = [
        'currency_id', 'buy', 'sell'
    ];

    public function currency()
    {
        return $this->belongsTo(Currency::class);
    }
}
