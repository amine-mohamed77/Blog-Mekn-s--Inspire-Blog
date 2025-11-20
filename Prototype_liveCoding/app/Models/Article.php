<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Article extends Model
{
    use HasFactory, Notifiable;

    // Fillable fields (optional but recommended)
    protected $fillable = [
        'title',
        'content',
        'status',
    ];

    // Relationship with categories
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
