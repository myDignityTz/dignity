<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class WelcomeController extends Controller
{
    public function __invoke(Request $request)
    {
        $view = "welcome_" .cache("lang");

        if (!View::exists($view)) {
            return view($view);
        }

        return view("welcome_swa");
    }
}
