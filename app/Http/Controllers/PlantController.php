<?php

namespace App\Http\Controllers;
use App\Models\Plant;

use Illuminate\Http\Request;

class PlantController extends Controller
{
    public function plant(Plant $plant)
    {
        return view('posts.plant')->with(['plants'=>$plant->nameBy()]);
    }
}
