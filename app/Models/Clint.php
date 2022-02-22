<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clint extends Model
{
    use HasFactory;

    public function notifiations()
    {
        return $this->hasMany(Notifiation::class);
    }

    public function chats()
    {
        return $this->hasMany(Chat::class);
    }

    public function freelancers()
    {
        return $this->belongsToMany(Freelancer::class);
    }
}
