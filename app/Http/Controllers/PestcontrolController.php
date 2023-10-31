<?php

namespace App\Http\Controllers;
use App\Models\Pestcountol;

use Illuminate\Http\Request;

class PestcontrolController extends Controller
{
    public function pestcountol(Pestcountol $disease)
    {
        return view('posts.pestcountol')->with(['pestcountols'=>$pestcountol]);
    }
}
