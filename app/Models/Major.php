<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Major extends Model
{
    use HasFactory;
    protected $guarded = ['id'];


    public function lecturer(): HasMany
    {
        return $this->hasMany(Lecturer::class);
    }

    public function student(): HasMany
    {
        return $this->hasMany(Student::class);
    }

    public function prodi(): HasMany
    {
        return $this->hasMany(Prodi::class);
    }

    public function value(): BelongsTo
    {
        return $this->belongsTo(Value::class);
    }

}
