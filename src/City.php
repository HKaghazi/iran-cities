<?php

namespace HKaghazi\IranCities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['id', 'name', 'province_id', 'county_id'];

    public function province()
    {
        return $this->belongsTo(Province::class);
    }

    public function county()
    {
        return $this->belongsTo(County::class);
    }
}
