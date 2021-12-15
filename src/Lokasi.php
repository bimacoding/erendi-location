<?php

namespace Erendi\Location;

use Erendi\Location\Models\Provinces;
use Illuminate\Http\Request;

class Lokasi {

    public static function render(){
        $provinces = Provinces::all();
        return view('location::location',compact('provinces'));
    }

    public static function scripts()
    {
        return view('location::script');
    }

    public static function scriptsedit()
    {
        return view('location::scriptedit');
    }

    public static function css()
    {
        return view('location::script');
    }
}
