<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    // The fields that can be mass-assigned
    protected $fillable = [
        'name',
        'email',
        'phone',
    ];
}
