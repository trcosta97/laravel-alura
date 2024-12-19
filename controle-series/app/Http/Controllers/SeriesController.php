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

        $html = '<ul>';
        foreach ($series as $serie) {
            $html.= "<li>$serie</li>";
        }
        $html .= '</ul>';

        echo $html;
    }
}
