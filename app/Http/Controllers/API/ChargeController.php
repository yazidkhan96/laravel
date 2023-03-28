<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChargeController extends Controller
{
    public function charge()

    {
        $charge = [
            ["charge" => "USD"],
            ["charge" => "EUR"]

        ];
        return response()->json(["data" => $charge]);
    }
}
