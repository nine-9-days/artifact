<?php

namespace App\Http\Controllers;
use App\Models\Counterplan;

use Illuminate\Http\Request;

class CounterplanController extends Controller
{
    public function counterplan(Counterplan $counterplan)
    {
        return view('posts.counterplan')->with(['counterplans'=>$counterplan->get()]);
    }
}
