<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SingleAC extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
       echo "<h1>Single Action Controller</h1>";
    }
}
