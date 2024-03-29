<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    const GENDER = [
        'Male',
        'Female'
    ];

    const IS_BLOCKED = [
        true,
        false
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'avatar',
        'gender',
        'dob',
        'is_blocked',
        'is_hide',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function getImageURL() {
        if($this->avatar) {
            return url($this->avatar);
        }
    }
    public function followings() {
        return $this->belongsToMany(User::class, 'follows', 'follower_id', 'user_id');
    }

    public function followers() {
        return $this->belongsToMany(User::class, 'follows', 'user_id', 'follower_id');
    }

    public function posts() {
        return $this->hasMany(Post::class, 'user_id', 'id');
    }
}
