<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $fillable = ['name','surname','birth_date','address','location_id','doctor_id','gender','email','phone'];

    public function location()
    {
        return $this->belongsTo('App\Models\Location', 'location_id');
    }

    public function doctor()
    {
        return $this->belongsTo('App\Models\Doctor', 'doctor_id');
    }

}
