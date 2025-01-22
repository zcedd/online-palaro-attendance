<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Venue extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'venue_type_id',
        'address',
        'gps_latitude',
        'gps_longitude',
    ];

    public function venueType(): BelongsTo
    {
        return $this->belongsTo(VenueType::class);
    }
}
