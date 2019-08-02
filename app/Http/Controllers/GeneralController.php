<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class GeneralController extends Controller
{
    public function richiesta(Request $request){

        $this->validate($request , [

        ]);
//
//        $data1 = substr($request->dates, 0, 8);
//        $data2 = substr($request->dates, 12);
////        dd(substr($request->dates, 12));

        $jsonurl = "https://app.ticketmaster.com/discovery/v2/events?apikey=7elxdku9GGG5k8j0Xm8KWdANDgecHMV0&locale=*&startDateTime=".$request->datepart."T00:00:00Z&endDateTime=".$request->daterit."T00:00:00Z&dmaId=".$request->arrivo;
        $json = file_get_contents($jsonurl);
        $data = json_decode($json);

        $eventi=$data->_embedded->events;
//        dd($eventi);

        return view('events')->with('eventi', $eventi);

    }
}
