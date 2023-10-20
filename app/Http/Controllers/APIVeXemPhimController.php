<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class APIVeXemPhimController extends Controller
{
    public function order(Request $request)
    {
        dd($request->all());
    }
}
