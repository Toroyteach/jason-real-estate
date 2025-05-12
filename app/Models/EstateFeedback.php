<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstateFeedback extends Model
{
    /** @use HasFactory<\Database\Factories\EstateFeedbackFactory> */
    use HasFactory;

    protected $fillable = ['estate_id', 'name', 'message', 'rating', 'approved'];

    public function estate()
    {
        return $this->belongsTo(Estate::class);
    }
}
