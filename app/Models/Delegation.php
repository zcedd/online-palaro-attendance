<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Delegation extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $fillable = [
        'name',
        'delegation_type_id',
        'venue_id',
    ];

    public function delegationType(): BelongsTo
    {
        return $this->belongsTo(DelegationType::class);
    }

    public function venue(): BelongsTo
    {
        return $this->belongsTo(Venue::class);
    }

    public function delegates(): HasMany
    {
        return $this->hasMany(Delegate::class);
    }
}
