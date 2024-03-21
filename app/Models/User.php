<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Foundation\Auth\Users as Authenticatable;
use Illuminate\Database\Eloquent\Model;
//use Laravel\Sanctum\HasApiTokens;

class User extends Model implements AuthenticatableContract
{
    use HasFactory;
    use Authenticatable;

    protected $fillable = [
        'nom',  'adresse', 'telephone', 'email', 'date_de_naissance', 'ville_id', 'password'
    ];

    public function ville(){
        return $this->belongsTo(Villes::class, 'ville_id');
    }
}


