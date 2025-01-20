<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SportEvent extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'sport_id',
        'sport_category_id',
        'sport_division_id',
        'name',
    ];
}
