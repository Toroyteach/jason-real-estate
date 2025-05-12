<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstateAppointment extends Model
{
    /** @use HasFactory<\Database\Factories\EstateAppointmentFactory> */
    use HasFactory;

    protected $fillable = ['estate_id', 'name', 'email', 'phone', 'preferred_date', 'message'];

    public function estate()
    {
        return $this->belongsTo(Estate::class);
    }
}
