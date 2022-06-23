<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = service_api_rajaongkir("city");

        foreach($data as $row){
            City::create([
                'id' => $row['city_id'],
                'province_id' => $row['province_id'],
                'type' => $row['type'],
                'city_name' => $row['city_name'],
                'postal_code' => $row['postal_code']
            ]);
        }
    }
}
