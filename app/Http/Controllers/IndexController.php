<?php

namespace App\Http\Controllers;

use App\Portafolio;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {

        $portafolios = Portafolio::all();

        return view('frontend.index', [
            'portafolios' => $portafolios,
        ]);

    }
}
