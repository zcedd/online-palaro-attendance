<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Delegate extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $fillable = [
        'delegation_id',
        'delegation_team_id',
        'first_name',
        'middle_name',
        'last_name',
        'suffix',
        'gender',
        'birthday',
        'contact_number',
        'email',
        'profile_photo_path',
        'address',
        'sport_id',
    ];

    public function delegation(): BelongsTo
    {
        return $this->belongsTo(Delegation::class);
    }

    public function delegationRole(): BelongsToMany
    {
        return $this->belongsToMany(DelegationRole::class);
    }

    public function qrCode(): HasMany
    {
        return $this->hasMany(QrCode::class);
    }

    public function sportEvent(): BelongsToMany
    {
        return $this->belongsToMany(SportEvent::class);
    }
}
