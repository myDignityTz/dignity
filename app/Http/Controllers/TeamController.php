<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class TeamController extends Controller
{
    public function __invoke()
    {
        $view = "team_" .cache("lang");

        if (View::exists($view)) {
            return view($view);
        }

        return view("team_swa");
    }
}
