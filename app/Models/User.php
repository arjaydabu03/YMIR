<?php

namespace App\Models;

use App\Filters\UserFilter;
use Laravel\Sanctum\HasApiTokens;
use Essa\APIToolKit\Filters\Filterable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes, Filterable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $table = "users";

    protected $fillable = [
        "id",
        "id_prefix",
        "id_no",
        "first_name",
        "middle_name",
        "last_name",
        "suffix",
        "position",
        "mobile_no",
        "role_id",
        "username",
        "password",
        "location_id",
        "location_code",
        "location",
        "department_id",
        "department_code",
        "department",
        "company_id",
        "company_code",
        "company",
    ];

    protected string $default_filters = UserFilter::class;

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = ["password", "remember_token"];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */

    function role()
    {
        return $this->belongsTo(Role::class);
    }
}
