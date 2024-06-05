<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kelas extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function course(): HasMany
    {
        return $this->hasMany(Course::class);
    }

    public function student(): HasMany
    {
        return $this->hasMany(Student::class);
    }
}
