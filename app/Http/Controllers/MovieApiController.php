<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieApiController extends Controller
{   

    // displaying index page in which showing some movies on the frontend....
    public function index()
    {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://imdb8.p.rapidapi.com/auto-complete?q=jatt",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "X-RapidAPI-Host: imdb8.p.rapidapi.com",
                "X-RapidAPI-Key: b539586b48mshe969a1b3b4c17bbp11634ejsn87c4b975ccf7"
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            $deco = json_decode($response, true);
        }

        return view('index', compact('deco'));
    }

// displaying searched movies 
    public function search_movie(Request $request)
    {

        if ($request->isMethod('post')) {

            $search = $request->get('item');
            $curl = curl_init();

            curl_setopt_array($curl, [
                CURLOPT_URL => "https://imdb8.p.rapidapi.com/auto-complete?q=$search",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_HTTPHEADER => [
                    "X-RapidAPI-Host: imdb8.p.rapidapi.com",
                    "X-RapidAPI-Key: b539586b48mshe969a1b3b4c17bbp11634ejsn87c4b975ccf7"
                ],
            ]);

            $response = curl_exec($curl);
            $err = curl_error($curl);

            curl_close($curl);

            if ($err) {
                echo "cURL Error #:" . $err;
            } else {
                $deco = json_decode($response, true);
            }
            return view('index', compact('deco'));
        }
    }
}
