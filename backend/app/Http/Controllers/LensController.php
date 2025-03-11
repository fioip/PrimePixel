<?php

namespace App\Http\Controllers;

use App\Models\Lens;
use Illuminate\Http\Request;

class LensController extends Controller
{
    public function lenses()
    {
        $lenses = Lens::all()
            ->map(function ($lens) {
                $lens->photo = basename($lens->photo);
                return $lens;
            });
        return response()->json($lenses);
    }

    public function show($id)
    {
        $lens = Lens::findOrFail($id);
        $lens->photo = basename($lens->photo);
        return response()->json($lens);
    }
}
