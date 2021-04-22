<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cabania;
use App\Models\TipoCabania;

class CabaniaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cabanias = Cabania::all();
        //return $cabanias;
        return view('cabania.index', compact('cabanias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cabanias = Cabania::all();
        return view('cabania.create', compact('cabanias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'precio' => 'required',
            'descripcion' => 'required',
            'disponibilidad' => 'required',
            'url' => 'required|mimes:jpg,png,jpeg|max:5080'
        ]);
        
        $newImageName = time().'-'.$request->nombre.'.'.$request->url->extension();

        // $test = $request->url->move(public_path('images'), $newImageName);
        $request->url->move(public_path('images'), $newImageName);
        
        // dd($test);
        // dd($request->all());
        
        $cabania = new Cabania();
        $cabania->nombre = $request->nombre;
        $cabania->precio = $request->precio;
        $cabania->descripcion = $request->descripcion;
        $cabania->disponibilidad = $request->disponibilidad;
        $cabania->url = $newImageName;
        
        // $cabania->tipoCabania_id = $request->tipoCabania_id;

        $cabania->save();

        return redirect()->route('cabanias.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Cabania $cabania)
    {
        $tipoCabanias = TipoCabania::all();
        // return view('cabania.create', compact('tipoCabanias'));
        return view('cabania.edit', compact('cabania', 'tipoCabanias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cabania $cabania)
    {
        $request->validate([
            'nombre' => 'required',
            'precio' => 'required',
            'descripcion' => 'required',
            'disponibilidad' => 'required',
            'url' => 'required|mimes:jpg,png,jpeg|max:5080'
        ]);
        
        $newImageName = time().'-'.$request->nombre.'.'.$request->url->extension();

        // $test = $request->url->move(public_path('images'), $newImageName);
        $request->url->move(public_path('images'), $newImageName);
        
        
        $cabania->nombre = $request->nombre;
        $cabania->precio = $request->precio;
        $cabania->descripcion = $request->descripcion;
        $cabania->disponibilidad = $request->disponibilidad;
        $cabania->url = $newImageName;
        
        // $cabania->tipoCabania_id = $request->tipoCabania_id;

        $cabania->save();

        return redirect()->route('cabanias.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cabania $cabania)
    {
        $cabania->delete();
        return redirect()->route('cabanias.index');
    }
}