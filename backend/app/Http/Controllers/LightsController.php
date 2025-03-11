<?php

namespace App\Http\Controllers;

use App\Models\Lights;
use Illuminate\Http\Request;

class LightsController extends Controller
{
    public function lights()
    {
        $lights = Lights::all()
            ->map(function ($light) {
                $light->photo = basename($light->photo);
                return $light;
            });
        return response()->json($lights);
    }

    public function show($id)
    {
        $light = Lights::findOrFail($id);
        $light->photo = basename($light->photo);
        return response()->json($light);
    }
}
