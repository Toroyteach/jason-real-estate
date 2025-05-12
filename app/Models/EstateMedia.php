<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstateMedia extends Model
{
    /** @use HasFactory<\Database\Factories\EstateMediaFactory> */
    use HasFactory;

    protected $fillable = ['estate_id', 'type', 'file_path']; // type: image | video

    public function estate()
    {
        return $this->belongsTo(Estate::class);
    }
}
