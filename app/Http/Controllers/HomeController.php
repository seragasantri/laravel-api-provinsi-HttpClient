<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {
        $response = Http::withHeaders([
            'key' => 'b6479170986e16a72e6374c8b1b3fb61'
        ])->get('https://api.rajaongkir.com/starter/province');
        $tes = $response["rajaongkir"]["results"];

        $response = Http::withHeaders([
            'key' => 'b6479170986e16a72e6374c8b1b3fb61'
        ])->get('https://api.rajaongkir.com/starter/city');
        $kota = $response["rajaongkir"]["results"];

        return view('welcome', compact("tes", 'kota'));
    }

    public function get()
    {
        $response = Http::withHeaders([
            'key' => 'b6479170986e16a72e6374c8b1b3fb61'
        ])->get('https://api.rajaongkir.com/starter/province');
        return $response["rajaongkir"]["results"];
    }
}
