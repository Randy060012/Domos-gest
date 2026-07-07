<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DemandeSurMesure extends Model
{
    protected $fillable = [
        'name', 'email', 'phone', 'nature_projet', 'type_propriete',
        'localisation', 'budget_max', 'chambres_min', 'description',
    ];

    protected function casts(): array
    {
        return [
            'budget_max'   => 'decimal:2',
            'chambres_min' => 'integer',
        ];
    }
}
