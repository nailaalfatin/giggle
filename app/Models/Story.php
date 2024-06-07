<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    use HasFactory;
    protected $table = 'stories';

    protected $fillable = [
        'category_id',
        'title',
        'slug',
        'author',
        'image_cover',
        'level_id',
        'small_description',
        'meta_title',
        'trending'
    ];

    public function slides() {
        return $this->hasMany(Slide::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function level() {
        return $this->belongsTo(Level::class, 'level_id', 'id');
    }
}
