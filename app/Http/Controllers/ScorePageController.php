<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScorePageController extends Controller
{
    public function index()
    {
        return view('Score.score-page');
    }
}
