<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Hashing\HashManager;
use Psy\CodeCleaner\ReturnTypePass;
use Symfony\Component\CssSelector\Node\HashNode;

class Value extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function academicyears(): HasMany
    {
       return $this->hasMany(AcademicYears::class);
    }

    public function semester(): HasMany
    {
        return $this->hasMany(Semester::class);
    }

    public function lecturer(): BelongsTo
    {
        return $this->belongsTo(Lecturer::class);
    }

    public function prodi(): HasMany
    {
        return $this->hasMany(Prodi::class);
    }

    public function major(): HasMany
    {
        return $this->hasMany(Major::class);
    }

    public function valudetail(): HasMany
    {
        return $this->hasMany(ValueDetail::class);
    }
}
