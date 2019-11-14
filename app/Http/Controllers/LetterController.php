<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LetterController extends Controller
{
    public function __invoke(Request $request)
    {
        $page = "letter_" .cache("lang");

        return view($page);
    }
}
