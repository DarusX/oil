<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classification extends Model
{
    protected $fillable = [
        'classification'
    ];

    public function prices()
    {
        return $this->hasMany(Price::class);
    }
}
