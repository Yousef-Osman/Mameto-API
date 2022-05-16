<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class speciallist extends Model
{
    use HasFactory;

    protected $fillable = [
        'phone',
        'job_name',
        'bio',
        'workplace',
        'id_photo',
        'national_id',
        'national_id_photo',
    ];
}
