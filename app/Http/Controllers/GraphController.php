<?php

namespace App\Http\Controllers;

use App\Events\GraphBroadcast;
use Illuminate\Http\Request;

class GraphController extends Controller
{
    public function __invoke()
    {
        event(new GraphBroadcast());

        return view('test');
    }
}
