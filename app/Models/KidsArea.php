<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KidsArea extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'open_time',
        'close_time',
        'child_min_age',
        'child_max_age',
        'address',
        'city',
        'owner_name',
        'owner_phone',
    ];
}
