<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    protected $fillable = [
        'name', 'email', 'phone', 'message', 'bien_titre',
    ];
}
