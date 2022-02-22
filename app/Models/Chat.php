<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;

    public function freelancer()
    {
        return $this->belongsTo(freelancer::class);
    }

    public function clint()
    {
        return $this->belongsTo(clint::class);
    }
    
}
