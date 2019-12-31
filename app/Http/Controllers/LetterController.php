<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class LetterController extends Controller
{
    public function __invoke(Request $request)
    {
        $view = "letter_" .cache("lang");

        if(View::exists($view)) {
            return view($view);
        }

        return view($view);
    }
}
