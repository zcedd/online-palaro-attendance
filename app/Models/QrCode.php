<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class QrCode extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $fillable = [
        'delegate_id',
        'qr_code_data',
    ];

    public function delegate(): BelongsTo
    {
        return $this->belongsTo(Delegate::class);
    }
}
