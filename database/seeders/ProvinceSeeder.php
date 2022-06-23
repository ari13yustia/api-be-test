<?php

namespace Database\Seeders;

use App\Models\Province;
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
        $data = service_api_rajaongkir("province");

        foreach($data as $row){
            Province::create([
                'id' => $row['province_id'],
                'province' => $row['province']
            ]);
        }
    }
}
