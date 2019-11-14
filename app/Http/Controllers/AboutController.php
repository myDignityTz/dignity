<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function __invoke(Request $request)
    {
        $page = "about_" .cache("lang");

        return view($page);
    }
}
