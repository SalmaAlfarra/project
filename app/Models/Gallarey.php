<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallarey extends Model
{
    use HasFactory;

    public function freelancer()
    {
        return $this->belongsTo(Freelancer::class);
    }

    public function projects()
    {
        return $this->belongsToMany(Project::class);
    }
}
