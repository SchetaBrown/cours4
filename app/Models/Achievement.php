<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    protected $fillable = [
        'title',
        'image',
        'description',
    ];

    public function users()
    {
        return $this
            ->belongsToMany(User::class, 'user_achievements')
            ->withPivot('progress', 'is_unlocked', 'unlocked_at')
            ->withTimestamps();
    }
}
