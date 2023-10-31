<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Disease;

class Counterplan extends Model
{
    use HasFactory;
    public function diseases()
    {
        return $this->belongsToMany(Disease::class);
    }
}
