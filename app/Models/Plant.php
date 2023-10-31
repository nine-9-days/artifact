<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\Disease;

class Plant extends Model
{
    use Hasfactory;
    
    public function diseases()   
    {
        return $this->belongsToMany(Disease::class);  
    }
    
    public function nameBy()
    {
        return $this->orderBy('name', 'ASC')->get();
    }
}
