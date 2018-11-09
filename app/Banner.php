<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Banner extends Model
{
    protected $fillable = [
        'banner', 'expiration'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'expiration'
    ];

    public function scopeNext($query)
    {
        return $query->where('expiration', '>', Carbon::now());
    }
}
