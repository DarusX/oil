<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Privilege extends Model
{
    protected $fillable = [
        'privilege'
    ];

    public function module()
    {
        return $this->belongsTo(Module::class);
    }
}
