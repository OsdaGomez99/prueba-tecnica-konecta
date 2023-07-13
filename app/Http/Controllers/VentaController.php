<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Venta;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->query('search');

        $ventas = Venta::where(function ($query) use ($search) {
            if ($search) {
                $query->WhereHas('productos', function ($query) use ($search) {
                    $query->where('nombre', 'like', '%' . $search . '%');
                });
            }
        })->paginate(10);
        $ventas = Venta::paginate(10);
        return view ('ventas.index', compact('ventas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $productos = Producto::all('id', 'nombre', 'stock');
        return view('ventas.create', compact('productos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $producto = Producto::find($request->producto_id);

        $this->validate($request, [
            'producto_id' => 'required',
            'cantidad' => 'required',
        ]);

        if ($producto->stock < $request->cantidad) {
            return redirect()->back()->with('error', 'No hay suficiente stock disponible.');
        }

        Venta::create([
            'producto_id' => $request->producto_id,
            'cantidad' => $request->cantidad,
        ]);

        $producto->stock -= $request->cantidad;
        $producto->save();

        return redirect()->route('ventas.index');
    }

}
