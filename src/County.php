<?php

namespace HKaghazi\IranCities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class County extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['id', 'name', 'province_id'];

    public function cities()
    {
        return $this->hasMany(City::class);
    }
}
