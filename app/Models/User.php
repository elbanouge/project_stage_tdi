<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Laravel\Jetstream\HasProfilePhoto;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Heroicpixels\Filterable\FilterableTrait;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasRoles, HasFactory, HasProfilePhoto,  Notifiable, FilterableTrait, TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "name",
        "email",
        "password",
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        "password",
        "remember_token",
        "two_factor_recovery_codes",
        "two_factor_secret",
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        "email_verified_at" => "datetime",
    ];

    /**
     * The accessors to append to the model"s array form.
     *
     * @var array
     */
    protected $appends = [
        "profile_photo_url",
    ];

    protected $guard_name = "web";


    public function toArray()
    {
        $array = parent::ToArray();
        $array["role"] = $this->getFirstRole();

        return $array;
    }

    public function getFirstRole()
    {
        $role = $this->roles()->first();
        if ($role) {
            return $this->roles()->first()->name;
        } else {
            return "";
        }
    }
    public function getAvatar()
    {
        if ($this->avatar) {
            return asset("/uploads/avatars/md/" . $this->avatar);
        } else {
            return "https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg";
        }
    }
}
