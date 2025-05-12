<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstateEnquiry extends Model
{
    /** @use HasFactory<\Database\Factories\EstateEnquiryFactory> */
    use HasFactory;

    protected $fillable = ['estate_id', 'name', 'email', 'phone', 'message'];

    public function estate()
    {
        return $this->belongsTo(Estate::class);
    }
}
