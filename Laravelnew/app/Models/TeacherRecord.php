<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherRecord extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
    ];
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
}
