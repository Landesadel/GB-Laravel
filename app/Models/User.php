<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'is_admin' => 'boolean',
    ];

    protected $dates = [
        'last_login_at',
    ];

    /**
     * @return Collection
     */
    public function getUsers(): Collection
    {
        return \DB::table('users')->select(['id', 'is_admin', 'name', 'email', 'password', 'email_verified_at', 'created_at' ])->get();
    }

    /**
     * @param  int  $id
     * @return mixed
     */
    public function getUserById(int $id): mixed
    {
        return \DB::table('users')->find($id);
    }
}
