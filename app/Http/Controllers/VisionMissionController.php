<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\VisionMission;

class VisionMissionController extends Controller
{
    public function edit()
    {
        $data = VisionMission::first();
        return view('admin.vision-mission.edit', compact('data'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'vision' => 'required',
            'mission' => 'required',
        ]);

        $data = VisionMission::first();
        $data->update($request->only('vision', 'mission'));

        return back()->with('success', 'Visi & Misi berhasil diupdate');
    }
}

