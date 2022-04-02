<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Wrapper extends Controller
{
    public function symbols(){
        $json= Http::get('http://stage-ecomm-api.paxel.co/v1/shipments/:created_date/list')->json();

        return response()->json($json);
    }
}
