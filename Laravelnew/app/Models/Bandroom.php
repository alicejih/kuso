<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bandroom extends Model
{
    use HasFactory;
    protected $fillable= [
        'name',
        'content',
        'people',
        'image',
        'rent',
    ];
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function bandroomrecord()
    {
        return $this->hasMany(Bandroomrecord::class);
    }
    
}
