<?php

namespace App\Http\Controllers;

use App\Models\Ferreteria;
use Illuminate\Http\Request;

class FerreteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['productos']=Ferreteria::paginate(5);
        return view('ferreteria.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ferreteria.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $datosFerreteria = request()-> except('_token');

        if($request->hasFile('ImagenProducto'))
        {
            $datosFerreteria['ImagenProducto']=$request->file('ImagenProducto')->store('uploads','public');
        }

        Ferreteria::insert($datosFerreteria);
        //return response()->json($datosFerreteria);
        return redirect('ferreteria')->with('mensaje','Ferreteria Agregada con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ferreteria  $ferreteria
     * @return \Illuminate\Http\Response
     */
    public function show(Ferreteria $ferreteria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ferreteria  $ferreteria
     * @return \Illuminate\Http\Response
     */
    public function edit(Ferreteria $ferreteria)
    {
        //
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ferreteria  $ferreteria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ferreteria $ferreteria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ferreteria  $ferreteria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ferreteria $ferreteria)
    {
        //
    }
}
