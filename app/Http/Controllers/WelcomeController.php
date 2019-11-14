<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function __invoke(Request $request)
    {
        $page = "welcome_" .cache("lang");

        return view($page);
    }
}
