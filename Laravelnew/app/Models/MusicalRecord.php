<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MusicalRecord extends Model
{
    use HasFactory;

    protected $fillable = [
        'musical_id',
        'musical_start',
        'musical_end',
        'musical_total',
        'musical_ps',
        'created_at',
         'updated_at'
    ];

}
