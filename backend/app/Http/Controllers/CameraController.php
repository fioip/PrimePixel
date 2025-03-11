<?php

namespace App\Http\Controllers;

use App\Models\Camera;
use Illuminate\Http\Request;

class CameraController extends Controller
{
    public function cameras()
    {
        $cameras = Camera::all()
            ->map(function ($camera) {
                $camera->photo = basename($camera->photo);
                return $camera;
            });
        return response()->json($cameras);
    }

    public function show($id)
    {
        $camera = Camera::findOrFail($id);
        $camera->photo = basename($camera->photo);
        return response()->json($camera);
    }
}