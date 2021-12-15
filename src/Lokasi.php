<?php

namespace Erendi\Location;

use Erendi\Location\Models\Provinces;
use Illuminate\Http\Request;

class Lokasi {

    public static function render($arr){
        $provinces = Provinces::all();
        $var = $arr;
        return view('location::location',compact('provinces','var'));
    }

    public static function scripts()
    {
        return view('location::script');
    }

    public static function scriptsedit($arr)
    {
        $var = $arr;
        return view('location::scriptedit',compact('var'));
    }

    public static function css()
    {
        return view('location::script');
    }
}
