<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BiensPrestations extends Model
{
    protected $fillable = [
        'bien_id',
        'prestation',
        'ordre',
    ];

    protected $table = 'biens_prestations';

    public function bien(): BelongsTo
    {
        return $this->belongsTo(Biens::class, 'bien_id');
    }
}
