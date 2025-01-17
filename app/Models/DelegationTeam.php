<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DelegationTeam extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'delegation_id',
        'user_id',
        'contact_person',
        'contact_number',
        'contact_email',
    ];
}
