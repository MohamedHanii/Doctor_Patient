<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = [
        'saturday','sunday', 'monday', 'tuesday','wednesday','thursday',
        'friday','hours_from','hours_to','doctor_id'
    ];
}
