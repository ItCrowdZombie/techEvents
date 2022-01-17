<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    
    protected $dates = ['fecha']; // pasar fechas a carbon

    protected $fillable = [
        'title',
        'user_id',
        'event_date',
        'img',
        'description',
        'max_users',
        'is_it_featured',
        'link',
    ];
    public function subscribedUsers() {
     return $this->belongsToMany(User::class, 'events_register');
    
    }

    public function subscribedUsersCounter() {
        return $this->subscribedUsers()->count();
    }
}
