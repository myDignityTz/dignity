<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function __invoke()
    {
        $page = "team_" .cache("lang");

        return view($page);
    }
}
