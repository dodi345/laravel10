<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Cviebrock\EloquentSluggable\Sluggable;

class Dosen extends Model
{
    use HasFactory, Sluggable;

    protected $guarded = ['id'];

    public function matkul(): BelongsTo
    {
        return $this->belongsTo(Matkul::class);
    }

    public function getRouteKeyName(): string
    {
        return 'username';
    }


    public function sluggable(): array
    {
        return [
            'username' => [
                'source' => 'name'
            ]
        ];
    }

}
