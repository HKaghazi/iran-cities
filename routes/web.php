<?php

use HKaghazi\IranCities\IranCities;

use Illuminate\Support\Facades\Route;

Route::get('/get-cities-by-provinceId/{province}', [IranCities::class, 'getCitiesByProvinceId']);