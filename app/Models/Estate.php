<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estate extends Model
{
    /** @use HasFactory<\Database\Factories\EstateFactory> */
    use HasFactory;

    protected $fillable = [
        'title', 'slug', 'description', 'type',
        'location', 'price', 'status', 'cover_image'
    ];

    public function categories()
    {
        return $this->morphToMany(Category::class, 'categorizable');
    }

    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }

    public function media()
    {
        return $this->hasMany(EstateMedia::class);
    }

    public function enquiries()
    {
        return $this->hasMany(EstateEnquiry::class);
    }

    public function appointments()
    {
        return $this->hasMany(EstateAppointment::class);
    }

    public function feedback()
    {
        return $this->hasMany(EstateFeedback::class);
    }
}
