<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'native_name',
        'eng_name',
        'gender',
        'dob',
        'type',
        'email',
        'address'
    ];

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
