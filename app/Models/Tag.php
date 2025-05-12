<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /** @use HasFactory<\Database\Factories\TagFactory> */
    use HasFactory;

    protected $fillable = ['name', 'slug'];

    public function blogs()
    {
        return $this->morphedByMany(Blog::class, 'taggable');
    }

    public function estates()
    {
        return $this->morphedByMany(Estate::class, 'taggable');
    }
}
