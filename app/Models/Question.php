<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'question',
        'reply',
        'is_read'
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
