<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Headquarters extends Model
{
    use HasFactory;

    protected $fillable = [
        'municipality',
    ];

    public function users(): HasMany
    {
        return $this->hasMany(User::class, 'id');
    }

    public function obituaries(): HasMany
    {
        return $this->HasMany(Obituaries::class, 'municipality_id');
    }

}
