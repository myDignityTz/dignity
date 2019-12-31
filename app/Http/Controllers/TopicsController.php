<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class TopicsController extends Controller
{
    public function __invoke()
    {
        $view = "topics_" .cache("lang");

        if (View::exists($view)) {
            return view($view);
        }

        return view("topics_swa");
    }
}
