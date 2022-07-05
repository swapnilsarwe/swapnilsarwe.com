<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsesController extends Controller
{
    public function __invoke()
    {
        return view('uses');
    }
}
