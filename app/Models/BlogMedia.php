<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BlogMedia extends Model
{
    /** @use HasFactory<\Database\Factories\BlogMediaFactory> */
    use HasFactory;

    protected $fillable = [
        'type',
        'file_path',
        'blog_id',
    ];

    public function blog(): BelongsTo
    {
        return $this->belongsTo(Blog::class);
    }
}
