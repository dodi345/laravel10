<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AcademicYears extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function value(): BelongsTo
    {
        return $this->belongsTo(Value::class);
    }
}
