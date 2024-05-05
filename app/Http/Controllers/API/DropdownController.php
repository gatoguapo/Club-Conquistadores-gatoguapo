<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;

class DropdownController extends Controller
{
    public function getStateList(Request $request)
    {
        $states = DB::table("estados")
                    ->where("pais_id",$request->pais_id)
                    ->pluck("nombre","id");
        return response()->json($states);
    }
    public function getMunicipalityList(Request $request)
    {
        $municipios = DB::table("municipios")
                        ->where("estado_id",$request->estado_id)
                        ->pluck("nombre","id");
        return response()->json($municipios);
    }

    public function getCityList(Request $request)
    {
        try {
            $ciudades = DB::table("ciudad")
                            ->where("municipio_id",$request->municipio_id)
                            ->pluck("nombre","id");
            return response()->json($ciudades);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return response()->json(['error' => 'Internal Server Error'], 500);
        }
    }
}
