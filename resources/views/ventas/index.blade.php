@extends('app')

@section('title', 'Cafetería KONECTA - Ventas')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row row-cols-2">
                            <div class="col">
                                <a href="{{ route('ventas.create') }}" class="btn btn-outline-secondary">Registrar Venta</a>
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
                                        <th>ID</th>
                                        <th>Producto</th>
                                        <th>Cantidad</th>
                                        <th>Fecha de Venta</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($ventas as $venta)
                                        <tr>
                                            <td>{{ $venta->id }}</td>
                                            <td>{{ $venta->producto->nombre }}</td>
                                            <td>{{ $venta->cantidad }}</td>
                                            <td>{{ \Carbon\Carbon::parse($venta->created_at)->format('d-m-Y') }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td class="text-center" colspan="8">
                                                NO HAY VENTAS REGISTRADOS
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            {{$ventas->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
