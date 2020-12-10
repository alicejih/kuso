<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bandroomrecord extends Model
{
    use HasFactory;
    protected $fillable= [
        'content',
    ];
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function bandroom()
    {
        return $this->belongsTo(Bandroom::class);
    }
}
