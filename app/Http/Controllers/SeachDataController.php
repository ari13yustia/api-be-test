<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Province;
use Illuminate\Http\Request;

class SeachDataController extends Controller
{
    function searchDataProvince(Request $request) {
        $data = Province::find($request->id);
        return response()->json([
            'data' => $data
        ]);
    }

    function searchDataCity(Request $request) {
        $data = City::find($request->id);
        return response()->json([
            'data' => $data
        ]);
    }
}
