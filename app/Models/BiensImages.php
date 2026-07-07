<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BiensImages extends Model
{
    protected $fillable = [
        'bien_id',
        'image_path',
        'legende',
        'ordre',
    ];

    protected $table = 'biens_images';

    public function bien(): BelongsTo
    {
        return $this->belongsTo(Biens::class, 'bien_id');
    }
}
