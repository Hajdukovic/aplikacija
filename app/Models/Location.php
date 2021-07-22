<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    public function patients()
    {
        return $this->belongsTo('App\Models\Patient', 'location_id');
    }
}
