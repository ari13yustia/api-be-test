<?php

namespace App\Http\Controllers;

use App\Models\Province;
use App\Models\City;
use Illuminate\Http\Request;

class SeachDataSwapController extends Controller
{
    function searchDataProvince(Request $request){
        if(config_search()){
            $data = Province::find($request->id);
        }else{
            $data = seach_with_rajaongkir("province",$request->id);
        }

        return response()->json([
            'data' => $data
        ]);
    }

    function searchDataCity(Request $request){
        if(config_search()){
            $data = City::find($request->id);
        }else{
            $data = seach_with_rajaongkir("city",$request->id);
        }

        return response()->json([
            'data' => $data
        ]);
    }
}
