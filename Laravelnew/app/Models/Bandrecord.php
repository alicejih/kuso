<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bandrecord extends Model
{
    use HasFactory;
    protected $fillable= [
        'date',
        'time',
        'content',

    ];
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function bandroom()
    {
        return $this->belongsTo(Bandroom::class);
    }
}
