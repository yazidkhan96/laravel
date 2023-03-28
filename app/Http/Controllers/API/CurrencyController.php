<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    public function currency()

    {
        $currency = [
            ["currency" => "AED"],
            ["currency" => "AFN"],
            ["currency" => "ALL"],
            ["currency" => "AMD"],
            ["currency" => "ANG"],
            ["currency" => "AOA"],
            ["currency" => "ARS"],
            ["currency" => "AUD"],
            ["currency" => "AWG"],
            ["currency" => "AZN"]


        ];
        return response()->json([$currency]);
    }
}
