<?php

namespace App\Http\Controllers;

use App\Portafolio;
use Illuminate\Http\Request;

class EnglishController extends Controller
{
    public function index()
    {

        $portafolios = Portafolio::all();

        return view('frontend.english', [
            'portafolios' => $portafolios,
        ]);

    }
}
