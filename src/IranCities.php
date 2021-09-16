<?php

namespace HKaghazi\IranCities;

use Illuminate\Http\Request;

class IranCities
{

    public function getProvinces()
    {
        return Province::all();
    }

    public function getCitiesByProvinceId(Request $request, $province)
    {
        if (!$province) {
            return [];
        }
        $province = Province::with("cities")->find($province);
        return $province->cities;
    }

    public function getProvinceFromCSV()
    {
        $provinces = [];
        // read from file
        $path = __DIR__ . "/../csv/province.csv";
        if (($handle = fopen($path, "r")) !== false) {
            while (($row = fgetcsv($handle)) != false) {
                $province_id = $row[0];
                $province_name = $row[1];

                array_push($provinces, [
                    "id" => $province_id,
                    "name" => $province_name
                ]);
            }
        }

        return $provinces;
    }

    public function getCountiesFromCSV()
    {
        $counties = [];
        // read from file
        $path = __DIR__ . "/../csv/county.csv";
        if (($handle = fopen($path, "r")) !== false) {
            while (($row = fgetcsv($handle)) != false) {
                $city_id = $row[0];
                $province_id = $row[1];
                $city_name = $row[2];

                array_push($counties, [
                    "id" => $city_id,
                    "province_id" => $province_id,
                    "name" => $city_name
                ]);
            }
        }

        return $counties;
    }

    public function getCitiesFromCSV()
    {
        $cities = [];
        // read from file
        $path = __DIR__ . "/../csv/city.csv";
        if (($handle = fopen($path, "r")) !== false) {
            while (($row = fgetcsv($handle)) != false) {
                $city_id = $row[0];
                $province_id = $row[1];
                $county_id = $row[2];
                $city_name = $row[3];

                array_push($cities, [
                    "id" => $city_id,
                    "province_id" => $province_id,
                    "county_id" => $county_id,
                    "name" => $city_name
                ]);
            }
        }

        return $cities;
    }
}
