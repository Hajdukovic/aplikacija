<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;


class Control extends Model
{
    use Sortable;
    use HasFactory;
    protected $fillable = ['name', 'control_date', 'description', 'status', 'patient_id', 'doctor_id'];

    protected $sortable = ['name', 'control_date', 'description', 'status', 'patient_id'];

    public function patient()
    {
        return $this->belongsTo('App\Models\Patient', 'patient_id');
    }

    public function doctor()
    {
        return $this->belongsTo('App\Models\Doctor', 'doctor_id');
    }
}
