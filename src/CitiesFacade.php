<?php

namespace HKaghazi\IranCities;

use Illuminate\Support\Facades\Facade;

class CitiesFacade extends Facade
{

  protected static function getFacadeAccessor()
  {
    return 'Cities';
  }

}
