<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Semester extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function value(): BelongsTo
    {
        return $this->belongsTo(Value::class);
    }

    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }


}
