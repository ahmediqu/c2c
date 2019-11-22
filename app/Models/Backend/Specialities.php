<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Model;

class Specialities extends Model
{
    protected $guarded = [];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($specialities) {
            $specialities->slug = str_slug($specialities->name);
        });
    }
}
