<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Lecturer extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $with = ['course','prodi','major','user'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

   public function course(): BelongsTo
   {
    return $this->belongsTo(Course::class);
   }

   public function prodi(): BelongsTo
   {
    return $this->belongsTo(Prodi::class);
   }

   public function major(): BelongsTo
   {
    return $this->belongsTo(Major::class);
   }

   public function value(): BelongsTo
   {
    return $this->belongsTo(Value::class);
   }

   public function getRouteKeyName()
    {
        return 'uuid';
    }
}
