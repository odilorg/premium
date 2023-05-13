<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AvailabilityController extends Controller
{
    
    public function availability(Request $request)
    {
      
        $arrival_date = $request->input('arrive');
        $departure_date = $request->input('departure');
        $num_adults = $request->input('adults');
        $num_children = $request->input('children');
      
        $response = Http::post('https://api.beds24.com/json/getAvailabilities', [
            'checkIn' =>  $arrival_date,
            'checkOut' => $departure_date,
            'propId' => '172793',
            'numAdult' => $num_adults,
            'numChild' => $num_children
        ]);
        //$data = json_decode($response->object());


$ar =$response->collect();
$filtered = $ar->flatten();
foreach ($filtered as $value) {
    if () {
        # code...
    }
}


        dd($filtered);
    }
    
    
}
