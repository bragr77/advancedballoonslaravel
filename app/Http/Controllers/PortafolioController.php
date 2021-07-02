<?php

namespace App\Http\Controllers;

use App\Portafolio;
use Illuminate\Http\Request;

class PortafolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contp = 1;

        $portafolios = Portafolio::all();

        return view('backend.portafolio.index',[
            'portafolios'   => $portafolios,
            'contp'         => $contp,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.portafolio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $portafolio = new Portafolio();

        $portafolio->nombre         = $request->input('nombre');
        $portafolio->nombreingles   = $request->input('nombreingles');
        $portafolio->visible        = $request->input('visible');

        if ($request->hasFile('img_path')) {
             $file = $request->file('img_path');
             $name = $request->input('imagen') . time() . ".jpg";
             $file->move(public_path() . '/frontend/images/portafolio', $name);

             $portafolio->imagen = $name;
         }

         $portafolio->save();

         return redirect()->route('portafolio.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $portafolio = Portafolio::find($id);

        return view('backend.portafolio.show', [
            'portafolio' => $portafolio,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $portafolio = Portafolio::find($id);

        return view('backend.portafolio.edit', [
            'portafolio' => $portafolio,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $portafolio = Portafolio::find($id);

        $portafolio->nombre         = $request->input('nombre');
        $portafolio->nombreingles   = $request->input('nombreingles');
        $portafolio->visible        = $request->input('visible');

        if ($request->hasFile('img_path')) {
             $file = $request->file('img_path');
             $name = $request->input('imagen');
             $file->move(public_path() . '/frontend/images/portafolio', $name);

             $portafolio->imagen = $name;
         }

         $portafolio->save();

         return redirect()->route('portafolio.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $portafolio = Portafolio::find($id);

        $filepath = public_path() . '/frontend/images/portafolio/' . $portafolio->imagen;
        \File::delete($filepath);

        $portafolio->delete();

        return redirect()->route('portafolio.index');
    }
}
