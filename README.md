# Iran's provinces, County and cities list for Laravel freamwork

## How to use

### installation

Use link below to install package

    composer require hkaghazi/irancities

after inistallation done, add this lines to your `databaseSeeder` file in `/database/seeders/databaseSeeder`

    <?php

    namespace Database\Seeders;

    use Illuminate\Database\Seeder;

    // -> this lines <-
    use HKaghazi\IranCities\Province;
    use HKaghazi\IranCities\County;
    use HKaghazi\IranCities\City;
    use HKaghazi\IranCities\IranCities as Cities;

    class DatabaseSeeder extends Seeder
    {
        public function run()
        {
            ...

            // -> add this line in order <-
            Province::insert(Cities::getProvinceFromCSV());
            County::insert(Cities::getCountiesFromCSV());
            City::insert(Cities::getCitiesFromCSV());
        }
    }

than run commands below in terminal

    php artisan migrate

and

    php artisan db:seed

> note: this cmd may caused error if already have data in database

## Documentation

### Export csv

to export list of province, counties and cities use command belew

    php artisan vendor:publish --tag=iran-cities-csv

> We will update as soon as possible
