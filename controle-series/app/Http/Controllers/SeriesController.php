<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(){
        $series = [
            'Lost',
            'The Walking Dead',
            'The 100'
        ];

        return view('listar-series', ['series' => $series]);
    }
}
