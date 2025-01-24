<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DelegateLogisticInformation extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'delegate_id',
        'venue_id',
        'meal_preference',
        'special_request',
    ];
}
