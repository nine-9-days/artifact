<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Plant;
use App\Models\Counterplan;


class Disease extends Model
{
    use HasFactory;
    public function plants()
    {
        return $this->belongsToMany(Plant::class);
    }
    
    public function counterplans()
    {
        return $this->belongsToMany(Counterplan::class);
    }
}
