<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OverviewApiController extends Controller
{
   
    public function overviewdisplay()
    {
        return view('overview');
    }
  
    // for displaying overview and all details of perticular selected movie
    public function overview($id)
    {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://imdb8.p.rapidapi.com/title/get-overview-details?tconst=$id",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "X-RapidAPI-Host: imdb8.p.rapidapi.com",
                "X-RapidAPI-Key: a225a545cemsh4dbf4fca6bb7247p171c89jsn55c1aa39fa46"
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            $dec = json_decode($response, true);
        }
        return view('overview', compact('dec'));
    }
}
