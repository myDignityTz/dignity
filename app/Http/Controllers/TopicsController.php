<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopicsController extends Controller
{
    public function __invoke()
    {
        $page = "topics_" .cache("lang");

        return view($page);
    }
}
