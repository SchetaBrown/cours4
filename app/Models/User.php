<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Hash;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'surname',
        'name',
        'patronymic',
        'email',
        'password',
        'passport_image',
        'driver_license_image',
        'role'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'created_at' => 'datetime:H:i, d-m-Y',
            'updated_at' => 'datetime:H:i, d-m-Y',
        ];
    }

    // Связи с моделями
    public function socialAccount()
    {
        return $this->hasMany(SocialAccount::class, 'user_id');
    }

    public function achievements()
    {
        return $this
            ->belongsToMany(Achievement::class, 'user_achievements')
            ->withPivot('progress', 'is_unlocked', 'unlocked_at')
            ->withTimestamps();
    }

    // мутаторы и аксессоры
    protected function name()
    {
        return Attribute::make(
            set: fn($value) => $this->toLowerCase($value)
        );
    }

    protected function email()
    {
        return Attribute::make(
            set: fn($value) => $this->toLowerCase($value)
        );
    }

    // scope-ы
    public function hasVerifiedDocuments(): bool
    {
        return $this->passport_image && $this->driver_license_image;
    }

    public function isAdmin()
    {
        return $this->role === 'admin' ? true : false;
    }

    public function getCreatedAtFormattedAttribute()
    {
        return $this->created_at->format('d.m.Y H:i');
    }
}
