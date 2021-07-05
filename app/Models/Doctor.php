<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable = ['name','surname','birth_date','address','location_id','gender','email','phone'];

    public function location()
    {
        return $this->belongsTo('App\Models\Location', 'location_id');
    }
    
    public function patient()
    {
        return $this->belongsTo('App\Models\Patient', 'patient_id');
    }
}
