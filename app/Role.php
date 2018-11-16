<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'role'
    ];

    public function privileges()
    {
        return $this->belongsToMany(Privilege::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
