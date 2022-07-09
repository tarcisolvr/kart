<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    public $timestamps = false;
    protected $connection = 'mysql';
    protected $table = 'user';

    protected $fillable = [
        'nome',
        'email',
    ];

    protected $hidden = [
        'senha'
    ];

}

