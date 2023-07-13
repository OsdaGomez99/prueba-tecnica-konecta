@extends('app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row row-cols-2">
                            <div class="col">
                                <a href="{{ route('productos.create') }}" class="btn btn-outline-secondary">Registrar Producto</a>
                            </div>
                            <div class="col">
                                <form action="{{ route('productos.index') }}" method="GET" class="mb-3">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="search" placeholder="Buscar...">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary" type="submit">Buscar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Referencia</th>
                                        <th>Precio</th>
                                        <th>Peso</th>
                                        <th>Categoría</th>
                                        <th>Stock</th>
                                        <th>Fecha de creación</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($productos as $producto)
                                        <tr>
                                            <td>{{ $producto->nombre }}</td>
                                            <td>{{ $producto->referencia }}</td>
                                            <td>{{ $producto->precio }}</td>
                                            <td>{{ $producto->peso }}</td>
                                            <td>{{ $producto->categoria }}</td>
                                            <td>{{ $producto->stock }}</td>
                                            <td>{{ \Carbon\Carbon::parse($producto->fecha_creacion)->format('d-m-Y') }}</td>
                                            <td>
                                                <form action="{{ route('productos.destroy', $producto->id) }}" method="POST" >
                                                    <a href="{{ route('productos.edit', $producto->id) }}">
                                                        <a type="button" class="btn btn-outline-warning btn-sm" href="{{ route('productos.edit', $producto->id) }}">
                                                            <i class='fa fa-edit'></i>
                                                        </a>
                                                    </a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-outline-danger btn-sm">
                                                        <i class='fa fa-times'></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td class="text-center" colspan="8">
                                                NO HAY PRODUCTOS REGISTRADOS
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            {{$productos->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
