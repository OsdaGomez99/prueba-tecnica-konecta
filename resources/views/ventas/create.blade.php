@extends('app')

@section('title', 'Restaurante KONECTA - Ventas')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Registrar Venta</h3>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                <strong>¡Revise todos los campos!</strong>
                                    @foreach ($errors->all() as $error)
                                        <span class="badge bg-danger">{{ $error }}</span>
                                    @endforeach
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        <form method="POST" action="{{ route('ventas.store') }}">
                            @csrf
                            <div class="form-group p-2">
                                <div class="row row-cols-2">
                                    <div class="col">
                                        <label for="producto_id">Producto</label>
                                        <select name="producto_id" id="producto_id" class="form-control" required>
                                            <option value="">Seleccione</option>
                                            @foreach ( $productos as $producto)
                                                <option value="{{$producto->id}}">{{$producto->nombre}} - {{$producto->stock}} disponibles</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col">
                                        <label for="cantidad">Cantidad</label>
                                        <input type="number" class="form-control" name="cantidad" id="cantidad" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group p-2">
                               <button type="submit" class="btn btn-outline-primary">Vender</button>
                                <a href="{{ route('ventas.index') }}" class="btn btn-outline-secondary">Cancelar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
