<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TestController extends Controller
{
    public function view (Request $request, Response $response)
    {
        return view('test');
    }
}
