<?php

namespace Rchitector\MockJson\App\Http\Controllers;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('mock-json::index');
    }
}
