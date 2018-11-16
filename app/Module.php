<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected $fillable = [
        'module'
    ];

    public function privileges()
    {
        return $this->hasMany(Privilege::class);
    }
}
