<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $productos = Producto::all();

        return view('productos.index',compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('productos.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $producto=new Producto();
       $producto->nombre_articulo=$request->nombre_articulo;
       $producto->seccion=$request->seccion;
       $producto->precio=$request->precio;
       $producto->fecha=$request->fecha;
       $producto->pais_origen=$request->pais_origen;

       $producto->save();

       return 'articulo creado';
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
        $producto=Producto::findOrFail($id);
        return view('productos.mostrar',compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $producto=Producto::findOrFail($id);

        return view('productos.editar',compact('producto'));


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
        //

        $producto=Producto::find($id);
        $producto->nombre_articulo=$request->nombre_articulo;
        $producto->seccion=$request->seccion;
        $producto->precio=$request->precio;
        $producto->fecha=$request->fecha;
        $producto->pais_origen=$request->pais_origen;

        $producto->save();

        $productos = Producto::all();

        return view('productos.index',compact('productos'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //


        $producto=Producto::find($id)->delete();

        $productos = Producto::all();

        return view('productos.index',compact('productos'));

    }
}
