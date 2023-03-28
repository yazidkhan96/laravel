<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UomController extends Controller
{
    public function uom()

    {
        $uom = [
            ["uom" => "USD", "id" => 1],
            ["uom" => "EUR", "id" => 2]

        ];
        return response()->json(["data" => $uom]);
    }
}
