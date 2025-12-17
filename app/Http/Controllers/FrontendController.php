<?php

namespace App\Http\Controllers;

use App\Models\VisionMission;

class FrontendController extends Controller
{
    public function aboutus()
    {
        $visionMission = VisionMission::first();
        return view('frontend.aboutus', compact('visionMission'));
    }
}


