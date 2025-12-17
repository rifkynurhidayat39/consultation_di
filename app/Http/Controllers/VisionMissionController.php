<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VisionMission;

class VisionMissionController extends Controller
{
    public function index()
    {
        $visionMission = VisionMission::all();
return view('backend.vision-mission.index', compact('visionMission'));

    }

    public function edit($id)
    {
        $data = VisionMission::findOrFail($id);
        return view('backend.vision-mission.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'vision' => 'required',
            'mission' => 'required',
        ]);

        $data = VisionMission::findOrFail($id);
        $data->update([
            'vision' => $request->vision,
            'mission' => $request->mission,
        ]);

        return redirect()
            ->route('vision-mission.index')
            ->with('success', 'Visi & Misi berhasil diperbarui');
    }
}
