<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use PHPUnit\Framework\MockObject\Builder\Stub;

class Semester extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function value(): BelongsTo
    {
        return $this->belongsTo(Value::class);
    }

    public function course(): HasMany
    {
        return $this->hasMany(Course::class);
    }

    public function student(): HasMany
    {
        return $this->hasMany(Student::class);
    }


}
