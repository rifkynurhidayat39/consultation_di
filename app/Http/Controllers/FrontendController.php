<?php

namespace App\Http\Controllers;

use App\Models\VisionMission;
use App\Models\Sambutan;

class FrontendController extends Controller
{
    public function home()
    {
        $sambutan = Sambutan::first();
        return view('frontend.home', compact('sambutan'));
    }

    public function aboutus()
    {
        $visionMission = VisionMission::first();
        return view('frontend.aboutus', compact('visionMission'));
    }
}


