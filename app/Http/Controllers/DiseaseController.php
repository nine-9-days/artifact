<?php

namespace App\Http\Controllers;
use App\Models\Disease;

use Illuminate\Http\Request;

class DiseaseController extends Controller
{
            
            
    public function disease(Disease $disease)
    {
        $uri = rtrim($_SERVER["REQUEST_URI"]);
        $uri = substr($uri, strrpos($uri,'/')+1);
        return view('posts.disease')->with(['diseases'=>$disease]);
    }
}
