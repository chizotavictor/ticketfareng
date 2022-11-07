<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapController extends Controller
{
    private $googleMapRoot = "https://maps.googleapis.com/maps/api";

    public function findPlaces(Request $request)
    {
      $apiKey = env("GOOGLE_MAP_API_KEY");
      $encodedParams = urlencode($request->location);
      $url = "$this->googleMapRoot/place/autocomplete/json?input=$encodedParams&key=".$apiKey;

      $ch = curl_init();
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_URL,$url);
      $result=curl_exec($ch);
      curl_close($ch);

      $data = json_decode($result,true);

      $result = [];

      foreach($data['predictions'] as $location) {
        $info['description'] = $location['description'];
        $info['place_id'] = $location['place_id'];
        $info['main'] = $location['structured_formatting']['main_text'];
        $info['secondary'] = $location['structured_formatting']['secondary_text'];
        array_push($result, $info);
      }

      return response()->json($result);
    }
}
