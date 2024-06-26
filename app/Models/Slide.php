<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    use HasFactory;

    protected $table = 'slides';

    protected $fillable = [
        'story_id',
        'image_path',
        'description'
    ];

    public function story() {
        return $this->belongsTo(Story::class);
    }
}
