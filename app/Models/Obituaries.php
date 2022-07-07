<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Obituaries extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_deceased',
        'family',
        'date_death',
        'wake',
        'church',
        'hour',
        'cemetery',
        'municipality_id',
    ];

    protected $casts = [
        'hour' => 'datetime'
    ];

    public function headquarter(): BelongsTo
    {
        return $this->BelongsTo(Headquarters::class, 'id');
    }

}
