<?php

namespace Database\Seeders;

use HKaghazi\IranCities\Province;
use Illuminate\Database\Seeder;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $provinces = [];

        // read from file
        $path = __DIR__ . "/../../csv/province.csv";
        if (($handle = fopen($path, "r")) !== false) {
            while (($row = fgetcsv($handle, 35, ",")) != false) {
                $province_id = $row[0];
                $province_name = $row[1];

                array_push($provinces, [
                    "id" => $province_id,
                    "name" => $province_name
                ]);
            }
        }

        // Bulk insertation
        Province::insert($provinces);
    }
}
