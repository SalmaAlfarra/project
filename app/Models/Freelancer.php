<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Freelancer extends Model
{
    use HasFactory;
    
    public function gallarey()
    {
        return $this->hasOne(Gallarey::class);
    }

    public function notifiations()
    {
        return $this->hasMany(Notifiation::class);
    }

    public function chats()
    {
        return $this->hasMany(Chat::class);
    }

    public function clints()
    {
        return $this->belongsToMany(Clint::class);
    }
}
