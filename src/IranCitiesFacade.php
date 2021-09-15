<?php

namespace HKaghazi\IranCities;

use Illuminate\Support\Facades\Facade;

class IranCitiesFacade extends Facade
{

  protected static function getFacadeAccessor()
  {
    return 'Cities';
  }

}
