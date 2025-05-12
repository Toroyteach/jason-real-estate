<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    /** @use HasFactory<\Database\Factories\FileFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'slug',
        'description',
        'file_path',
        'property_index',
        'land_dec',
        'is_featured',
        'is_downloadable',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
