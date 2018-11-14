<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $fillable = [
        'price', 'classification_id'
    ];

    public function classification()
    {
        return $this->belongsTo(Classification::class);
    }
}
