<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Prodi extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $with = ['major'];

    public function lecturer(): BelongsTo
    {
        return $this->belongsTo(Lecturer::class);
    }

    public function course(): HasMany
    {
        return $this->hasMany(Course::class);
    }

    public function student(): HasMany
    {
        return $this->hasMany(Student::class);
    }

    public function major(): BelongsTo
    {
        return $this->belongsTo(Major::class);
    }

    public function value(): BelongsTo
    {
        return $this->belongsTo(Value::class);
    }
}
