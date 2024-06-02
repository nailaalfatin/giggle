<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    use HasFactory;

    protected $table = 'stories';
    
    protected $fillable = [
        'title'
    ];

    public function slides()
    {
        return $this->hasMany(Slide::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
