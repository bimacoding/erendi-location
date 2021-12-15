<?php

namespace Erendi\Location;

use Erendi\Location\Facades\Location;
use App\Http\Controllers\Controller;
use Erendi\Location\Models\Cities;
use Erendi\Location\Models\Districts;
use Erendi\Location\Models\Subdistricts;
use Illuminate\Http\Request;


class LocationController extends Controller
{
    public function getcities(Request $request){
        $cities = Cities::where('prov_id',$request->prov)->get();
        return response()->json($cities);
    }

    public function getdistricts(Request $request){
        $dist = Districts::where('city_id',$request->city)->get();
        return response()->json($dist);
    }

    public function getsubdistricts(Request $request){
        $subdist = Subdistricts::where('dis_id',$request->dis)->get();
        return response()->json($subdist);
    }
}
