<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LandingSlider extends Model
{
    /** @use HasFactory<\Database\Factories\LandingSliderFactory> */
    use HasFactory;

    protected $fillable = [
        'title', 'subtitle', 'image_path', 'button_text', 'button_link', 'order'
    ];
}
