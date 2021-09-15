<?php

namespace HKaghazi\IranCities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['id', 'name'];

    public function cities()
    {
        return $this->hasMany(City::class);
    }
}
