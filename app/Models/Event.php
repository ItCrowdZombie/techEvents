<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title',
        // 'event_date',
        // 'img',
        // 'description',
        // 'max_users',
        // 'is_it_featured',
    ];
}
