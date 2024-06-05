<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Student extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $with = ['user','major','prodi','kelas','semester'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function major(): BelongsTo
    {
        return $this->belongsTo(Major::class);
    }

    public function prodi(): BelongsTo
    {
        return $this->belongsTo(Prodi::class);
    }

    public function kelas(): BelongsTo
    {
        return $this->belongsTo(Kelas::class);
    }
    public function semester(): BelongsTo
    {
        return $this->belongsTo(Semester::class);
    }

    public function valuedetail(): HasMany
    {
        return $this->hasMany(ValueDetail::class);
    }
    public function getRouteKeyName()
    {
        return 'uuid';
    }
}
