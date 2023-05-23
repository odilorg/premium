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
        $data = json_decode($response);

//dd($data);
$ar =$response->collect();
$filtered = $ar->whereBetween('roomsavail', [1, 100])->values()->toArray();
//dd($filtered[0]);
$room_price =[];
$room_id = [];
$rooms_avail=[];
foreach ($filtered as $key => $value) {
    $room_price[] = $filtered[$key]['price'];
    $room_id[] = $filtered[$key]['roomId'];
    $rooms_avail[] = $filtered[$key]['roomsavail'];
}

dd($room_id);


dd($filtered);
$value = $filtered->get('price');
dd($value);

// $filtered = $ar->flatten();
// dd($filtered);
// foreach ($filtered as $value) {
//     if () {
//         # code...
//     }
// }


        dd($filtered);
    }
    
    
}
