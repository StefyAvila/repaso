<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

// Para poder usarlo y poder poner los nombres en minuscula
use Illuminate\Database\Eloquent\Casts\Attribute;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

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
    ];

  
    protected function name(): Attribute{
        return new Attribute(
            
            //accesor= cuanod se hace una consulta en la base de datos
            //accesores  no cambian el valor en las bases de datos
            // para que las primeras letras del nombre que ingrese sean mayusculas

            /* ESTE ES VALIDO, PERO SE AHORRA MAS CON LA FUNCION FLECHA
            get: function($value){
                return ucwords($value);
            },*/
            get: fn($value) => ucwords($value),

            //mutadores = transforman el valor antes de almacenarlo
            // Para que el nombre que reciba se convierta en minuscula
            /*set: function($value){
                return strtolower($value);
                
            }*/
                set: fn($value) => strtolower($value)
            
        );
    }
}
