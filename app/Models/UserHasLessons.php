<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserHasLessons extends Model
{
    use HasFactory;

    protected $table = 'user_has_lessons';

    protected $fillable = [
        'status',
        'user_id',
        'lesson_id'
    ];

    public function lesson()
    {
        return $this->hasOne(Lesson::class);
    }

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
