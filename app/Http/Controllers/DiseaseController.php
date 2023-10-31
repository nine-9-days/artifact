<?php

namespace App\Http\Controllers;
use App\Models\Disease;
use App\Models\Counterplan;

use Illuminate\Http\Request;

class DiseaseController extends Controller
{
    public function disease(Disease $disease)
    {
        //$uri = rtrim($_SERVER["REQUEST_URI"]);
        //$uri = substr($uri, strrpos($uri,'/')+1);
        return view('posts.disease')->with(['diseases'=>$disease->where('id',2)->get()]);
    }
    
    public function counterplan(Disease $counterplan)
    {
        $uri = rtrim($_SERVER["REQUEST_URI"]);
        $uri = substr($uri, strrpos($uri,'/')+1);
        return view('posts.counterplan')->with(['counterplans'=>$counterplan->get(), 'counterplan_id'=>$uri]);
    }
}
