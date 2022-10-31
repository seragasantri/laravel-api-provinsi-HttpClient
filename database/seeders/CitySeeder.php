<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $response  = Http::withHeaders([
            'key' => 'b6479170986e16a72e6374c8b1b3fb61'
        ])->get('https://api.rajaongkir.com/starter/city');

        $cities = $response["rajaongkir"]["results"];

        foreach ($cities as $city) {
            $data_city[] = [
                "id" =>  $city["city_id"],
                "province_id" => $city["province_id"],
                "type" => $city["type"],
                "city_name" => $city["city_name"],
                "postal_code" =>  $city["postal_code"]
            ];
        }

        City::insert($data_city);
    }
}
