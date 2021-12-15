<?php
Route::post('/location/city',[\Erendi\Location\LocationController::class,'getcities']);
Route::post('/location/district',[\Erendi\Location\LocationController::class,'getdistricts']);
Route::post('/location/subdistrict',[\Erendi\Location\LocationController::class,'getsubdistricts']);
