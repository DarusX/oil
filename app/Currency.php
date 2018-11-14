<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    protected $fillable = [
        'currency', 'sign'
    ];

    public function exchanges()
    {
        return $this->hasMany(Exchange::class);
    }
}
