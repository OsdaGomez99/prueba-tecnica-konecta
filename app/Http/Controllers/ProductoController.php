<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Producto::paginate(10);
        return view ('productos.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('productos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nombre' => 'required',
            'referencia' => 'required',
            'precio' => 'required',
            'peso' => 'required',
            'categoria' =>'required',
            'stock' =>'required',
            'fecha_creacion' =>'required',
        ]);

        Producto::create([
            'nombre' => $request->nombre,
            'referencia' => $request->referencia,
            'precio' => $request->precio,
            'peso' => $request->peso,
            'categoria' => $request->categoria,
            'stock' => $request->stock,
            'fecha_creacion' => $request->fecha_creacion,
        ]);

        return redirect()->route('productos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Producto $producto)
    {
        return view('productos.edit', compact('producto'));
    }

    /**
     * Update the specified resource in storage
     */
    public function update(Request $request, Producto $producto)
    {
        $this->validate($request, [
            'nombre' => 'required',
            'referencia' => 'required',
            'precio' => 'required',
            'peso' => 'required',
            'categoria' =>'required',
            'stock' =>'required',
            'fecha_creacion' =>'required',
        ]);

        $producto->update([
            'nombre' => $request->nombre,
            'referencia' => $request->referencia,
            'precio' => $request->precio,
            'peso' => $request->peso,
            'categoria' => $request->categoria,
            'stock' => $request->stock,
            'fecha_creacion' => $request->fecha_creacion,
        ]);

        return redirect()->route('productos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect()->route('productos.index');
    }
}
