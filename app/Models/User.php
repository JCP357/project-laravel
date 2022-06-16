<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array< string, string,string>
     */
    protected $guarded = ['id'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',

    ];

    protected $appends = ["provincia", "coche"];




    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function getProvinciaAttribute()
    {
        try {
            //code...


            if ($this->attributes['id_provincia']) {
                $provincia = Provincia::where("id_provincia", $this->attributes['id_provincia'])->first();
            }

            if ($provincia) {
                return $provincia['provincia'];
            } else {
                return "";
            }
        } catch (\Throwable $th) {
            return "";
        }
    }
    public function getCocheAttribute()
    {
    }
}
