<?php

namespace App\Http\Controllers;

use App\Mensaje;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $mcontador      = 0;
        $mensajes       = Mensaje::all();


        foreach ($mensajes as $mensaje) {
            if ($mensaje->visto == 0) {
                $mcontador++;
            }
        }

        return view('backend.index', [
            'mcontador' => $mcontador,
        ]);
        return view('backend.index');
    }
}
