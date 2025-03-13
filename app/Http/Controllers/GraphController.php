<?php

namespace App\Http\Controllers;

use App\Events\GraphBroadcast;
use Illuminate\Http\Request;
use Illuminate\View\View;

class GraphController extends Controller
{
    public function __invoke(): View
    {
        event(new GraphBroadcast(['data' => 'hello']));

        return view('test');
    }
}
