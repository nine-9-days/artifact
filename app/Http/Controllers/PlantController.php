<?php

namespace App\Http\Controllers;
use App\Models\Plant;
use App\Models\Disease;
use App\Models\Counterplan;

use Illuminate\Http\Request;

class PlantController extends Controller
{
    public function plant(Plant $plant)
    {
        return view('posts.plant')->with(['plants'=>$plant->nameBy()]);
    }
    
    public function disease(Plant $plant)
    {
        $uri = rtrim($_SERVER["REQUEST_URI"]);
        $uri = substr($uri, strrpos($uri,'/')+1);
        return view('posts.disease')->with(['diseases'=>$plant->get(), 'disease_id'=>$uri]);
        //return view('posts.disease')->with(['diseases'=>Plant::where('id',$id)->get()->diseases()]);
    }
    
    public function counterplan(Counterplan $counterplan)
    {
        $uri = rtrim($_SERVER["REQUEST_URI"]);
        $uri = substr($uri, strrpos($uri,'/')+1);
        return view('posts.counterplan')->with(['counterplans'=>$counterplan->get(), 'counterplan_id'=>$uri]);
    }
}
