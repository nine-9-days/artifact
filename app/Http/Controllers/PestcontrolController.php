<?php

namespace App\Http\Controllers;
use App\Models\Pestcountol;

use Illuminate\Http\Request;

class PestcontrolController extends Controller
{
    public function pestcontrol(Pestcontrol $disease)
    {
        return view('posts.pestcontrol')->with(['pestcontrols'=>$pestcontrol]);
    }
}
