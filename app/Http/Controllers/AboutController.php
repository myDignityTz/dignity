<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class AboutController extends Controller
{
    public function __invoke(Request $request)
    {
        $view = "about_" .cache("lang");

        if (View::exists($view)) {
            return view($view);
        }

        return view("about_swa");
    }
}
