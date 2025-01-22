<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Attendance extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'attendance_type_id',
        'qr_code_id',
        'venue_id',
        'check_in_at',
        'check_out_at',
        'gps_latitude',
        'gps_longitude',
    ];

    public function venue()
    {
        return $this->belongsTo(Venue::class);
    }
}
