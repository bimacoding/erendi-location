<?php
namespace Erendi\Location\Facades;
use Illuminate\Support\Facades\Facade;

class Location extends Facade {
    /**
     * Return facade accessor
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'erendi-lokasi';
    }
}
