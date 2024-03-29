<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Compte extends Model
{
    protected $table = 'comptes';
    protected $fillable = [
        'name', 'login', 'pwd', 'address',
        'cp', 'city', 'mail', 'idTypeUser'
    ];
    public $timestamps = false;
}
