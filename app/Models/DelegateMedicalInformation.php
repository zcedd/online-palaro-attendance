<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DelegateMedicalInformation extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'delegate_id',
        'blood_type',
        'allergy',
        'chronic_illness',
        'current_medication',
        'past_medical_history',
        'vaccine_received',
        'physical_limitation',
        'recent_illness',
        'family_medical_history',
        'special_medical_need',
    ];
}
